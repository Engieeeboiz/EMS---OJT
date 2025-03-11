<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use SebastianBergmann\CodeUnit\FunctionUnit;

class ems_AJAX_controller extends Controller
{
    public function homepage_request(Request $request) {
        if($request -> ajax()) {
            return view('ems_pages.ems_homepage');
        }
        return view('layout.layout', ['content' => view('ems_pages.ems_homepage')]);
    }

    public function employee_request(Request $request) {
        if($request -> ajax()) {
            return view('ems_pages.ems_employees');
        }
        return view('layout.layout', ['content' => view('ems_pages.ems_employees')]);
    }

    public function expenses_request(Request $request) {
        if($request -> ajax()) {
            return view('ems_pages.ems_expenses');
        }
        return view('layout.layout', ['content' => view('ems_pages.ems_expenses')]);
    }
    
    public function dashboard_request(Request $request) {
        if($request -> ajax()) {
            return view('ems_pages.ems_dashboard');
        }
        return view('layout.layout', ['content' => view('ems_pages.ems_dashboard')]);
    }
}