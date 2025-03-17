<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class add_employee_controller extends Controller
{
    public function add_employee(Request $request)
    {
        $request->validate([
            'employee_last_name' => 'required|string|max:255',
            'employee_given_Name' => 'required|string|max:255',
            'employee_middle_name' => 'nullable|string|max:255',
            'employee_gender' => 'required|string|max:255',
            'employee_age' => 'required|integer|min:18|max:35',
            'employee_dd' => 'required|integer|min:1|max:31',
            'employee_mm' => 'required|integer|min:1|max:12',
            'employee_yyyy' => 'required|integer|min:1950|max:2025',
            'employee_address' => 'required|string|max:255',
            'employee_company' => 'required|string|max:255',
            'employee_position' => 'required|string|max:255',
            'employee_contact_person' => 'required|string|max:255',
            'employee_contact_number' => 'required|string|min:11|max:11',
        ], [
            'employee_last_name.required' => 'Please provide your last name',
            'employee_given_Name.required' => 'Please provide your first name',
            'employee_middle_name.required' => 'Please provide your middle name',
            'employee_gender.required' => 'Gender',
            'employee_age.required' => 'Age',
            'employee_dd.required' => 'Day',
            'employee_mm.required' => 'Month',
            'employee_yyyy.required' => 'Year',
            'employee_address.required' => 'Please provide address',
            'employee_company.required' => 'Please provide company',
            'employee_position.required' => 'Please provide position',
            'employee_contact_person.required' => 'Please provide contact person',
            'employee_contact_number.required' => 'Please provide contact number',
        ]);
    }
}
