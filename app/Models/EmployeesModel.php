<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class EmployeesModel extends Model
{
    protected $table = 'Employees';

    use HasFactory;

    public function selectEmployees($condition = null)
    {
        if ($condition == null) return;

        $employees = DB::table($this->table)->select('*');

        return $employees;
    }

    public function getEmployees($condition = null)
    {
        $result = $this->selectEmployees($condition);
        return $result == null ? [] : $result->get();
    }

    public function getCountEmployees($condition = null)
    {
        $result = $this->selectEmployees($condition);
        return $result == null ? 0 : $result->count();
    }
}
