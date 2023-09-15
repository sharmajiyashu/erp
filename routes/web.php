<?php

use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\EmployeeController;
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

Route::group(['middleware' => 'auth'], function () {
    Route::get('/', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('logout',[LoginController::class,'logout'])->name('admin.logout');

    Route::resource('employees',EmployeeController::class);
    Route::post('employees.change_status',[EmployeeController::class,'changeStatus'])->name('employees.change_status');

    Route::resource('departments',DepartmentController::class);
    Route::post('departments.change_status',[DepartmentController::class,'changeStatus'])->name('departments.change_status');
});

Route::get('login',[LoginController::class,'index'])->name('login');
Route::post('check_login',[LoginController::class,'check_login'])->name('check_login');