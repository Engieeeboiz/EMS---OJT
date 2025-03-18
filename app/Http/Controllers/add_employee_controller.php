<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use App\Models\add_employee_table;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class add_employee_controller extends Controller
{
    
    public function add_employee(Request $request)
    {

        $validated_data = $request->validate([
            'employee_id' => 'required|integer',
            'employee_last_name' => 'required|string|max:255',
            'employee_first_name' => 'required|string|max:255',
            'employee_middle_name' => 'nullable|string|max:255',
            'employee_gender' => 'required|string|not_in:""',
            'employee_age' => 'required|integer|min:18|max:35',
            'employee_birthday' => 'required|date',
            'employee_address' => 'required|string|unique|max:255',
            'employee_contact_number' => [
                'required',
                'string',
                'min:11',
                'max:11',
                'regex:/^09[0-9]{9}$/'
            ],
            'employee_company' => 'required|string|max:255',
            'employee_position' => 'required|string|max:255',
            'employee_contact_person' => 'required|string|max:255',
            'employee_contact_person_number' => [
                'required',
                'string',
                'min:11',
                'max:11',
                'unique',
                'regex:/^09[0-9]{9}$/'
            ],
        ], [
            'employee_id.required' => 'ID',
            'employee_last_name.required' => 'Please provide your last name',
            'employee_first_name.required' => 'Please provide your first name',
            'employee_gender.not_in' => 'Gender',
            'employee_age.required' => 'Age',
            'employee_birhtday.required' => 'Birthday',
            'employee_address.required' => 'Please provide address',
            'employee_contact_number.required' => 'Please provide contact number',
            'employee_contact_number.regex' => 'Invalid contact number, must be starting with \'09\'',
            'employee_contact_number.unique' => 'Contact number already exists',
            'employee_company.required' => 'Please provide company',
            'employee_position.required' => 'Please provide position',
            'employee_contact_person.required' => 'Please provide contact person',
            'employee_contact_person_number.required' => 'Please provide contact number',
            'employee_contact_person_number.regex' => 'Invalid contact number, must be starting with \'09\'',
            'employee_contact_person_number.unique' => 'Contact number already exists',
        ]);

        $name_cased = Str::title($validated_data['employee_last_name'] . ', ' . $validated_data['employee_first_name'] . ' ' . $validated_data['employee_middle_name']);
        
        try {
            add_employee_table::create([
                'emp_ID' => $validated_data['employee_id'],
                'emp_name' => $name_cased,
                'emp_gender' => $validated_data['employee_gender'],
                'emp_age' => $validated_data['employee_age'],
                'emp_birthday' => $validated_data['employee_birthday'],
                'emp_address' => $validated_data['employee_address'],
                'emp_contact_number' => $validated_data['employee_contact_number'],
                'emp_company' => $validated_data['employee_company'],
                'emp_position' => $validated_data['employee_position'],
                'emp_contact_person' => $validated_data['employee_contact_person'], 
                'emp_contact_p_number' => $validated_data['employee_contact_person_number'],
            ]);
            return redirect(route("ems_employees"))->with('success', 'Successfully registered.');
        } catch (\Exception $e) {
            Log::error('Error adding employee: ' . $e->getMessage());
            return back()->with('error', 'An error occurred while adding the employee.');
        }
    }

    public function employee_fetch_data() {

        $add_employees = add_employee_table::all();
        return view('ems_pages.ems_employees', compact('add_employees'));

    }

    public function employee_profile_data($emp_ID) {
        $add_employee = add_employee_table::find($emp_ID);
    
        if (!$add_employee) {
            abort(404); // Handle not found
        }
    
        return view('ems_pages.ems_employee_profile', compact('add_employee'));
    }
}
