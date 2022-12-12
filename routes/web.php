<?php

use App\Http\Controllers\Admin\AttendanceController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ReportController;
use App\Http\Controllers\Admin\StaffController;
use App\Http\Controllers\Admin\TimesheetController;
use App\Http\Controllers\AttendanceController as ControllersAttendanceController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function() {
    return view('welcome');
});

Route::group(['prefix' => 'login', 'middleware' => 'loginmiddleware', 'as'=> 'login.'], function ()
{
    Route::get('/', [LoginController::class, 'index'])->name('home');

    Route::get('/user', [LoginController::class, 'user'])->name('user');
    Route::post('/user', [LoginController::class, 'userLogin'])->name('p_user');

    Route::get('/admin', [LoginController::class, 'admin'])->name('admin');
    Route::post('/admin', [LoginController::class, 'adminLogin'])->name('p_admin');

    Route::get('/attendance', [LoginController::class, 'attendance'])->name('attendance');
    Route::post('/attendance', [LoginController::class, 'attendanceLogin'])->name('p_attendance');
});

Route::prefix('admin')->name('admin.')->group(function ()
{
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/dashboard', [DashboardController::class, 'index']);
    Route::post('/dashboard/pagination', [DashboardController::class, 'pagination'])->name('dashboard.pagination');

    Route::group(['prefix' => 'staff', 'as'=> 'staff.'], function () {
        Route::get('/', [StaffController::class, 'index'])->name('list');
        Route::post('/', [StaffController::class, 'pagination'])->name('pagination');
        // Route::post('/pagination', [StaffController::class, 'pagination'])->name('pagination');

        Route::get('/add', [StaffController::class, 'add'])->name('add');
        Route::post('/add', [StaffController::class, 'actionAdd'])->name('p_add');

        Route::get('/add', [StaffController::class, 'add'])->name('add');
        Route::post('/add', [StaffController::class, 'actionAdd'])->name('p_add');

        Route::get('/edit/{id}', [StaffController::class, 'add'])->name('edit');
        Route::post('/edit', [StaffController::class, 'actionAdd'])->name('p_edit');

        Route::get('/exportcsv', [StaffController::class, 'exportCsv'])->name('exportcsv');
        Route::get('/exportpdf', [StaffController::class, 'exportPdf'])->name('exportpdf');
    });

    Route::group(['prefix' => 'attendance', 'as'=> 'attendance.'], function () {
        Route::get('/', [AttendanceController::class, 'index'])->name('list');
        Route::post('/', [AttendanceController::class, 'pagination'])->name('pagination');

        Route::get('/exportcsv', [AttendanceController::class, 'exportCsv'])->name('exportcsv');
        Route::get('/exportpdf', [AttendanceController::class, 'exportPdf'])->name('exportpdf');
    });

    Route::group(['prefix' => 'timesheet', 'as'=> 'timesheet.'], function () {
        Route::get('/', [TimesheetController::class, 'index'])->name('list');

        Route::get('/detail/{id}/attendance', [TimesheetController::class, 'attendance'])->name('attendance');
        Route::get('/detail/{id}/', [TimesheetController::class, 'detail'])->name('detail');
    });

    Route::group(['prefix' => 'report', 'as'=> 'report.'], function () {
        Route::get('/', [ReportController::class, 'index'])->name('list');

        Route::get('/exportcsv', [ReportController::class, 'exportCsv'])->name('exportcsv');
        Route::get('/exportpdf', [ReportController::class, 'exportPdf'])->name('exportpdf');
    });
});

Route::get('/check-in', [ControllersAttendanceController::class, 'index'])->name('check-in');
