@extends('layout.layout')

@section('content')
    <div class="h-full w-full px-[10%] overflow-hidden"> 
        <div class="h-full w-full flex flex-row overflow-hidden pt-20"> 
            <div class="h-full w-[33vw] justify-items-center">
                <div class="h-[200px] w-[200px]"> 
                    <img src = "{{ asset('img/icons/buildings-solid-60.png') }}"
                    class="h-full w-full">
                </div>
            </div>
            <div class="h-full w-[66vw]">
                <div class="border-b-[2px] border-b-black pb-4 relative flex flex-row"> 
                    <span class="tracking-widest text-3xl font-semibold"> Personal Information </span>
                    <div class="absolute right-4 pb-4 h-full w-max flex flex-row space-x-4">
                        <button type="button"
                        id="edit_personal_information">
                            <svg width="25" height="25" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M16.5 3L21 7.5L7.5 21H3V16.5L16.5 3Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>                          
                        </button>
                        <button type="button"
                        id="delete_personal_info">
                            <img src="{{ asset('img/icons/delete.png') }}" alt="" class="h-6 w-6">
                        </button>
                    </div>
                </div>
                <div class="flex flex-row pt-4">
                    <div class="w-[50%] space-y-2">
                        @foreach ([
                            'Name' => $add_employee->emp_name, 
                            'Gender' => $add_employee->emp_gender, 
                            'Age' => $add_employee->emp_age,
                            'Birthdate' => \Carbon\Carbon::parse($add_employee->emp_birthday)->format('F j, Y'), 
                            'Address' => $add_employee->emp_address
                        ] as $label => $value)
                            <div class="personal-info-row flex flex-row content-center h-8 w-max">
                                <p class="field-display-personal-info text-lg font-semibold child">{{ $label }}: {{ $value }} </p>
                                
                                <form action="{{ route('update_employee', ['id' => $add_employee->emp_ID])}}" method="POST"
                                class="edit-form-personal-info flex flex-row hidden h-full w-full items-center">
                                @csrf
                                <div class="flex flex-row items-center space-x-2">
                                    <label for="" class="text-lg font-semibold w-max self-center">{{$label}}: </label>                                   
                                    <input type="text"
                                    name="{{ Str::snake($label) }}"
                                    value="{{ $value }}"
                                    class="border rounded p-1 h-8 self-center w-[200px]">
                                
                                    <div class="flex flex-row space-x-2 h-max w-max items-center">
                                        <button type="submit" class="bg-[#0a9c84] text-white px-3 py-1 rounded">Save</button>
                                        <button type="button" class="personal_info_cancel_button hover:bg-red-400 bg-gray-400 text-white px-3 py-1 rounded">Cancel</button>
                                    </div>
                                </div>
                                </form>
                                <div class="personal_info_action_buttons flex flex-row space-x-2 h-max w-max items-center hidden ms-4">
                                    <button class="personal_info_edit_button" data.id="{{ $add_employee->id }}" data-field="{{ $label }}">
                                        <svg width="25" height="25" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M16.5 3L21 7.5L7.5 21H3V16.5L16.5 3Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg> 
                                    </button>
                                </div>  
                            </div>
                        @endforeach
                    </div>
                    <div class="w-[50%] space-y-2">  

                        @foreach ([
                            'Contact No.' => preg_replace("/(\d{4})(\d{3})(\d{4})/", "$1-$2-$3", $add_employee->emp_contact_number),
                            'Contact Person' => $add_employee->emp_contact_person,
                            'Contact Person No.' => preg_replace("/(\d{4})(\d{3})(\d{4})/", "$1-$2-$3", $add_employee->emp_contact_p_number), 
                            'Status' => $add_employee->emp_status
                        ] as $label => $value)
                        <div class="personal-info-row flex flex-row content-center h-8 w-max">
                            <p class="field-display-personal-info text-lg font-semibold child">{{ $label }}: {{ $value }} </p>

                            <form action="{{ route('update_employee', ['id' => $add_employee->emp_ID])}}" method="POST"
                                class="edit-form-personal-info flex flex-row hidden h-full w-full items-center">
                                @csrf
                                <div class="flex flex-row items-center space-x-2">
                                    <label for="" class="text-lg font-semibold w-max self-center">{{$label}}: </label>                                   
                                    <input type="text"
                                    name="{{ Str::snake($label) }}"
                                    value="{{ $value }}"
                                    class="border rounded p-1 h-8 self-center w-[200px]">
                                
                                    <div class="flex flex-row space-x-2 h-max w-max items-center">
                                        <button type="submit" class="bg-[#0a9c84] text-white px-3 py-1 rounded">Save</button>
                                        <button type="button" class="personal_info_cancel_button hover:bg-red-400 bg-gray-400 text-white px-3 py-1 rounded">Cancel</button>
                                    </div>
                                </div>
                            </form>

                            <div class="personal_info_action_buttons flex flex-row space-x-2 h-max w-max items-center ms-4 hidden">
                                <button class="personal_info_edit_button" data.id="{{ $add_employee->id }}" data-field="{{ $label }}">
                                    <svg width="25" height="25" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M16.5 3L21 7.5L7.5 21H3V16.5L16.5 3Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg> 
                                </button>
                            </div>  
                        </div>
                        @endforeach
                        
                    </div>
                </div>
                <div class="mt-12">
                    <div class="border-b-[2px] border-b-black pb-4 relative flex flex-row">
                        <span class="tracking-widest text-3xl font-semibold"> Employment Information </span>
                        <div class="absolute right-4 pb-4 h-full w-max flex flex-row space-x-4">
                            <button id="edit_employment_information">
                                <svg width="25" height="25" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M16.5 3L21 7.5L7.5 21H3V16.5L16.5 3Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>     
                            </button>
                        </div>
                    </div>
                    <div class="flex flex-row pt-4">
                        <div class="w-[50%] space-y-2">
                            @foreach ([
                                'Company' => $add_employee->emp_company, 
                                'Position' => $add_employee->emp_position, 
                                'Salary' => "P" . $add_employee->emp_salary,
                            ] as $label => $value)
                                <div class="employment-info-row flex flex-row space-x-4 content-center h-8 w-max">
                                    <p class="field-display-employment-info text-lg font-semibold child">{{ $label }}: {{ $value }} </p>

                                    <form action="{{ route('update_employee', ['id' => $add_employee->emp_ID])}}" method="POST"
                                        class="edit-form-employment-info flex flex-row hidden h-full w-full items-center">
                                        @csrf
                                        <div class="flex flex-row items-center space-x-2">
                                            <label for="" class="text-lg font-semibold w-max self-center"> {{$label }}: </label>
                                            <input type="text"
                                            name="{{ Str::snake($label) }}"
                                            value="{{ $value }}"
                                            class="border rounded p-1 h-8 self-center w-[200px]">
                                        
                                            <div class="flex flex-row space-x-2 h-max w-max items-center">
                                                <button type="submit" class="bg-[#0a9c84] text-white px-3 py-1 rounded">Save</button>
                                                <button type="button" class="employment_info_cancel_button hover:bg-red-400 bg-gray-400 text-white px-3 py-1 rounded">Cancel</button>
                                            </div>
                                        </div>
                                    </form>

                                    <div class="employment_info_action_buttons flex flex-row space-x-2 h-max w-max items-center ms-4 hidden">
                                        <button class="employment_info_edit_button" data.id="{{ $add_employee->id }}" data-field="{{ $label }}">
                                            <svg width="25" height="25" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M16.5 3L21 7.5L7.5 21H3V16.5L16.5 3Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg> 
                                        </button>
                                    </div>  
                                </div>
                            @endforeach
                            <p class="text-lg font-semibold"> Date hired: {{ \Carbon\Carbon::parse($add_employee->emp_date_hired)->format('F j, Y') }}</p>
                        </div>
                        <div class="w-[50%] space-y-2">
                            @foreach ([
                                'SSS' => $add_employee->emp_sss,
                                'HMDF' => $add_employee->emp_hmdf,
                                'PhilHealth' => $add_employee->emp_philhealth,
                                'TIN' => $add_employee->emp_tin,
                            ] as $label => $value)
                                <div class="employment-info-row flex  flex flex-row content-center h-8 w-max">
                                    <p class="field-display-employment-info text-lg font-semibold child">{{ $label }}: {{ $value }} </p>

                                    <form action="{{ route('update_employee', ['id' => $add_employee->emp_ID])}}" method="POST"
                                    class="edit-form-employment-info flex flex-row hidden h-full w-full items-center">
                                        @csrf
                                        <div class="flex flex-row items-center space-x-2"> 
                                            <label for="" class="text-lg font-semibold w-max self-center">{{$label}}: </label>                                   
                                            <input type="text"
                                            name="{{ Str::snake($label) }}"
                                            value="{{ $value }}"
                                            class="border rounded p-1 h-8 self-center w-[200px]">
                                        
                                            <div class="flex flex-row space-x-2 h-max w-max items-center">
                                                <button type="submit" class="bg-[#0a9c84] text-white px-3 py-1 rounded">Save</button>
                                                <button type="button" class="employment_info_cancel_button hover:bg-red-400 bg-gray-400 text-white px-3 py-1 rounded">Cancel</button>
                                            </div>
                                        </div>
                                    </form>

                                    <div class="employment_info_action_buttons flex flex-row space-x-2 h-max w-max items-center ms-4 hidden">
                                        <button class="employment_info_edit_button" data.id="{{ $add_employee->id }}" data-field="{{ $label }}">
                                            <svg width="25" height="25" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M16.5 3L21 7.5L7.5 21H3V16.5L16.5 3Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg> 
                                        </button>
                                    </div>  
                                </div>
                            @endforeach
                        </div>  
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script>
        document.addEventListener('DOMContentLoaded', function() {

            document.getElementById('edit_personal_information').addEventListener('click', function() {
                const actionbuttons = document.querySelectorAll('.personal_info_action_buttons');

                // Check if any button is currently visible (not hidden)
                const anyVisible = Array.from(actionbuttons).some(button => !button.classList.contains('hidden'));

                // If any button is visible, hide all; otherwise, show all
                actionbuttons.forEach(actionbutton => {
                    if (anyVisible) {
                        actionbutton.classList.add('hidden'); // Hide all
                    } else {
                        actionbutton.classList.remove('hidden'); // Show all
                    }
                });
            });

            document.querySelectorAll('.personal_info_edit_button').forEach(button => {
            button.addEventListener("click", function () {
                let parent = this.closest(".personal-info-row");
                let displayText = parent.querySelector(".field-display-personal-info");
                let editForm = parent.querySelector(".edit-form-personal-info");
                let actionButtons = parent.querySelector(".personal_info_action_buttons");

                displayText.classList.add("hidden"); // Hide text
                editForm.classList.remove("hidden"); // Show form
                actionButtons.classList.add("hidden"); // Hide action buttons
                });
            });

            document.querySelectorAll('.personal_info_cancel_button').forEach(button => {
            button.addEventListener("click", function() {
                const parent = this.closest('.personal-info-row');
                const displayText = parent.querySelector('.field-display-personal-info');
                const editForm = parent.querySelector('.edit-form-personal-info');
                let actionButtons = parent.querySelector(".personal_info_action_buttons");

                displayText.classList.remove('hidden'); // Show text
                editForm.classList.add('hidden');
                actionButtons.classList.remove('hidden'); // Hide form
                });
            });

            document.getElementById('edit_employment_information').addEventListener('click', function() {
                const actionbuttons = document.querySelectorAll('.employment_info_action_buttons');

                // Check if any button is currently visible (not hidden)
                const anyVisible = Array.from(actionbuttons).some(button => !button.classList.contains('hidden'));

                // If any button is visible, hide all; otherwise, show all
                actionbuttons.forEach(actionbutton => {
                    if (anyVisible) {
                        actionbutton.classList.add('hidden'); // Hide all
                    } else {
                        actionbutton.classList.remove('hidden'); // Show all
                    }
                });
            });

            document.querySelectorAll('.employment_info_edit_button').forEach(button => {
            button.addEventListener("click", function () {
                let parent = this.closest(".employment-info-row");
                let displayText = parent.querySelector(".field-display-employment-info");
                let editForm = parent.querySelector(".edit-form-employment-info");
                let actionButtons = parent.querySelector(".employment_info_action_buttons");

                displayText.classList.add("hidden"); // Hide text
                editForm.classList.remove("hidden"); // Show form
                actionButtons.classList.add("hidden"); // Hide action buttons
                });
            });

            document.querySelectorAll('.employment_info_cancel_button').forEach(button => {
            button.addEventListener("click", function () {
                let parent = this.closest(".employment-info-row");
                let displayText = parent.querySelector(".field-display-employment-info");
                let editForm = parent.querySelector(".edit-form-employment-info");
                let actionButtons = parent.querySelector(".employment_info_action_buttons");

                displayText.classList.remove("hidden"); // Hide text
                editForm.classList.add("hidden"); // Show form
                actionButtons.classList.remove("hidden"); // Hide action buttons
                });
            });

        })
    </script>
@endsection
