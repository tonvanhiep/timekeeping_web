<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function index()
    {
        $notification = [];
        $page = 'report';
        return view('admin.report', compact('notification', 'page'));
    }
}
