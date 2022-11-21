<?php

use App\Http\Controllers\Admin\DashboardController;
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

    Route::get('/attendance', function() {return view('admin.attendance');})->name('attendance');

    Route::get('/report', function() {return view('admin.report');})->name('report');

    Route::group(['prefix' => 'staff', 'as'=> 'staff.'], function () {
        Route::get('/', function() {return view('admin.staff');})->name('list');
        Route::get('/add', function() {return view('admin.add-staff');})->name('add');
        Route::post('/add', function() {return "Dang xu ly";})->name('p_add');
    });

    Route::group(['middleware' => ['adminexistedmiddleware']], function () {
        Route::get('/login', [AdminLoginController::class, 'index'])->name('loginManagement');
        Route::post('/login', [AdminLoginController::class, 'actionLogin'])->name('p_loginManagement');
    });

});

