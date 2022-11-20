<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class EmployeesModel extends Model
{
    private $table = 'Employees';

    use HasFactory;

    public function selectEmployees($condition = null)
    {
        if ($condition == null) return [];

        $employees = DB::table($this->table)->select('*');

        return $employees;
    }

    public function getEmployees()
    {
        return
    }
}
