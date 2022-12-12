<?php

namespace App\Models;

use Database\Factories\TimesheetsFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class TimesheetsModel extends Model
{
    use HasFactory;
    protected $table = 'timesheets';

    protected $fillable = [
        'id',
        'employee_id',
        'timekeeper_id',
        'timekeeping_at',
        'face_image',
        'status',
        'note',
        'created_at',
        'created_user',
        'updated_at',
        'updated_user'
    ];



    protected static function newFactory()
    {
        return TimesheetsFactory::new();
    }

    public function selectAttendances($condition = null)
    {
        if ($condition == null) return [];
        $result = DB::table($this->table)->join('timekeepers', 'timekeepers.id', '=', $this->table.'.timekeeper_id')
        ->join('offices', 'offices.id', '=', 'timekeepers.office_id')
        ->join('employees', 'employees.id', '=', $this->table.'.employee_id')
        ->select('employees.id', 'employees.first_name', 'employees.last_name', 'office_name',
            $this->table.'.timekeeper_id', 'timekeeping_at')
        ->latest('timekeeping_at');

        if (isset($condition['office'])) {
            $result = $result->where('offices.id', $condition['office']);
        }
        if (isset($condition['from'])) {
            $result = $result->where('timekeeping_at', '>=', $condition['from']);
        }
        if (isset($condition['to'])) {
            $result = $result->where('timekeeping_at', '<=', $condition['to'].' 23:59:59');
        }

        return $result;
    }

    public function getAttendances($condition = null)
    {
        $timesheet = $this->selectAttendances($condition);
        return $timesheet == [] ? [] : $timesheet->get();
    }

    public function pagination($condition = [], $page = 1, $perPage = 50)
    {
        return $this->selectAttendances($condition)->paginate($perPage, '*', 'page', $page);
    }
}
