<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\OfficesModel;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TimesheetController extends Controller
{
    public function index()
    {
        $office = new OfficesModel();
        $office = $office->getOffices([]);

        $notification = [];
        $page = 'timesheet';
        return view('admin.timesheet', compact('notification', 'page', 'office'));
    }

    public function detail(Request $request)
    {
        $office = new OfficesModel();
        $office = $office->getOffices([]);

        $notification = [];
        $page = 'timesheet';
        return view('admin.detail', compact('notification', 'page', 'office'));
    }

    public function attendance(Request $request)
    {
        $notification = [];
        $page = 'timesheet';
        return view('admin.attendance-detail', compact('notification', 'page'));
    }
}
