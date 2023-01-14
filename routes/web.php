<?php

use App\Http\Controllers\EmployeeController;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('/employees', [App\Http\Controllers\EmployeeController::class, 'index'])->name('employees.index');
// Route::get('/employees/create', [App\Http\Controllers\EmployeeController::class, 'create'])->name('employees.create');
// Route::post('/employees', [App\Http\Controllers\EmployeeController::class, 'store'])->name('employees.store');
// Route::get('/employees/{employee}/edit', [App\Http\Controllers\EmployeeController::class, 'edit'])->name('employees.edit');
// Route::put('/employees/{employee}', [App\Http\Controllers\EmployeeController::class, 'update'])->name('employees.update');
// Route::delete('/employees/{employee}', [App\Http\Controllers\EmployeeController::class, 'destroy'])->name('employees.destroy');
//
Route::resource('employees', EmployeeController::class);


Route::get('/archived_employees', [App\Http\Controllers\ArchivedEmployeesController::class, 'index'])
    ->name('archived_employees.index');

Route::post('/archived_employees/{id}/restore', [App\Http\Controllers\ArchivedEmployeesController::class, 'restore'])
    ->name('archived_employees.restore');

Route::post('/archived_employees/{id}/forceDelete', [App\Http\Controllers\ArchivedEmployeesController::class, 'forceDelete'])
    ->name('archived_employees.forceDelete');
