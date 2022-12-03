<?php

namespace App\Http\Controllers\Admin;

use App\Exports\StaffExportCsv;
use App\Http\Controllers\Controller;
use App\Models\EmployeesModel;
use App\Models\NoticesModel;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use Barryvdh\DomPDF\Facade\Pdf;

class StaffController extends Controller
{
    public function index()
    {
        $employees = new EmployeesModel();
        $notification = new NoticesModel();

        $list = $employees->getEmployees([
            'status' => 1,
            'sort' => 1,
        ]);

        $notification = $notification->getNotifications([]);

        return view('admin.staff', compact('notification', 'list'));
    }

    public function exportCsv()
    {
        return Excel::download(new StaffExportCsv, 'stafflist'.date("Ymd-His").'.csv');
    }

    public function exportPdf()
    {
        $employees = new EmployeesModel();

        $list = $employees->getEmployees([
            'status' => 1,
            'sort' => 1,
        ]);

        $pdf = PDF::loadView('admin.templates.staffpdf',  compact('list'))->setPaper('a4', 'landscape');
    	return $pdf->download('stafflist'.date("Ymd-His").'.pdf');
    }
}
