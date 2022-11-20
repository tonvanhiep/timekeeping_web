<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\EmployeesModel;
use App\Models\NoticesModel;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function index()
    {
        $employees = new EmployeesModel();
        $notification = new NoticesModel();

        $list = [];

        $notification = [];

        $info = [
            'employees' => 0,
            'male' => 0,
            'female' => 0,
            'active' => 0
        ];

        return view('admin.dashboard', compact('list', 'notification', 'info'));
    }
}
