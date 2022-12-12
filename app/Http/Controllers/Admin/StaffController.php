<?php

namespace App\Http\Controllers\Admin;

use App\Exports\StaffExportCsv;
use App\Http\Controllers\Controller;
use App\Models\EmployeesModel;
use App\Models\NoticesModel;
use App\Models\OfficesModel;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use Barryvdh\DomPDF\Facade\Pdf;

class StaffController extends Controller
{
    public function index(Request $request)
    {
        $employees = new EmployeesModel();
        $notification = new NoticesModel();
        $office = new OfficesModel();

        $perPage = $request->show == null ? 50 : $request->show;

        $condition = [
            'status' => $request->input('status') == null ? [0, 1, 2] : $request->input('status'),
            'sort' => $request->input('sort') == null ? 1 : $request->input('sort'),
            'search' => $request->input('search'),
            'office' => $request->input('office'),
            'depart' => $request->input('depart'),
        ];
        $list = $employees->pagination($condition, $request->page, $perPage);

        $pagination = [
            'perPage' => $list->perPage(),
            'lastPage' => $list->lastPage(),
            'currentPage' => $list->currentPage()
        ];

        $notification = $notification->getNotifications([]);
        $office = $office->getOffices([]);
        $page = 'staff';
        return view('admin.staff', compact('notification', 'list', 'page', 'pagination', 'office', 'condition'));
    }

    public function exportCsv(Request $request)
    {
        $csv = new StaffExportCsv($request);
        return Excel::download($csv, 'stafflist'.date("Ymd-His").'.csv');
    }

    public function exportPdf(Request $request)
    {
        $employees = new EmployeesModel();

        $condition = [
            'status' => $request->input('status') == null ? [0, 1, 2] : $request->input('status'),
            'sort' => $request->input('sort') == null ? 1 : $request->input('sort'),
            'search' => $request->input('search'),
            'office' => $request->input('office'),
            'depart' => $request->input('depart'),
        ];
        $list = $employees->getEmployees($condition);

        $pdf = PDF::loadView('admin.templates.staffpdf',  compact('list'))->setPaper('a4', 'landscape');
    	return $pdf->download('stafflist'.date("Ymd-His").'.pdf');
    }

    public function pagination (Request $request)
    {
        $employees = new EmployeesModel();

        $search = $request->input('search');
        $perPage = $request->show == null ? 50 : $request->show;

        $condition = [
            'status' => $request->input('status') == null ? [0, 1, 2] : $request->input('status'),
            'sort' => $request->input('sort') == null ? 1 : $request->input('sort'),
            'search' => $search,
            'office' => $request->input('office'),
            'depart' => $request->input('depart'),
        ];
        $list = $employees->pagination($condition, $request->page, $perPage);

        $pagination = [
            'perPage' => $list->perPage(),
            'lastPage' => $list->lastPage(),
            'currentPage' => $list->currentPage()
        ];
        $returnHTML = view('admin.pagination.staff', compact('list', 'pagination'))->render();
        return response()->json($returnHTML);
    }}
