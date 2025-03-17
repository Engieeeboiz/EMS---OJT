<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ems_auth_controller;
use App\Http\Controllers\ems_AJAX_controller;
use App\Http\Controllers\add_employee_controller;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

// Navigation Routes
Route::get('/Home', 
    [ems_AJAX_controller::class, 'homepage_request']
)->name('ems_homepage');

Route::get('/Employees', 
    [ems_AJAX_controller::class, 'employee_request']
)->name('ems_employees');

Route::get('/Expenses',
[ems_AJAX_controller::class, 'expenses_request']
)->name('ems_expenses');

Route::get('/Dashboard', 
[ems_AJAX_controller::class, 'dashboard_request']
)->name('ems_dashboard');

// Employee Routes
Route::post('/add-employee',
    [add_employee_controller::class, 'add_employee']
)->name('employee.add');

// Authentication Routes
Route::post('/sign-in',
    [ems_auth_controller::class, 'sign_in']
)->name('signin.auth');

Route::middleware([
    'auth:sanctum', 
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
