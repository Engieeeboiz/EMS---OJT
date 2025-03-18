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
                            <div id="personal_info_action_buttons"
                            class="flex flex-row space-x-4 content-center h-8 w-max">
                                <p class="text-lg font-semibold child">{{ $label }}: {{ $value }} </p>
                                <div class="personal_info_action_buttons flex flex-row space-x-2 h-max w-max items-center hidden">
                                    <button class="personal_info_edit_button" data.id="{{ $add_employee->id }}" data-field="{{ $label }}">
                                        <svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="teal" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <line x1="12" y1="5" x2="12" y2="19"></line>
                                            <line x1="5" y1="12" x2="19" y2="12"></line>
                                        </svg>
                                    </button>
                                    <button class="personal_info_delete_button" data.id="{{ $add_employee->id }}" data-field="{{ $label }}">
                                        <svg width="25" height="25" viewBox="0 0 50 50" xmlns="http://www.w3.org/2000/svg">
                                            <line x1="10" y1="10" x2="40" y2="40" stroke="red" stroke-width="5" stroke-linecap="round"/>
                                            <line x1="40" y1="10" x2="10" y2="40" stroke="red" stroke-width="5" stroke-linecap="round"/>
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
                        <div class="flex flex-row space-x-4 content-center h-8 w-max">
                            <p class="personal_info_content text-lg font-semibold child">{{ $label }}: {{ $value }} </p>
                            <div class="personal_info_action_buttons flex flex-row space-x-2 h-max w-max items-center hidden">
                                <button class="personal_info_edit_button" data.id="{{ $add_employee->id }}" data-field="{{ $label }}">
                                    <svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="teal" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <line x1="12" y1="5" x2="12" y2="19"></line>
                                        <line x1="5" y1="12" x2="19" y2="12"></line>
                                    </svg>
                                </button>
                                <button class="personal_info_delete_button" data.id="{{ $add_employee->id }}" data-field="{{ $label }}">
                                    <svg width="25" height="25" viewBox="0 0 50 50" xmlns="http://www.w3.org/2000/svg">
                                        <line x1="10" y1="10" x2="40" y2="40" stroke="red" stroke-width="5" stroke-linecap="round"/>
                                        <line x1="40" y1="10" x2="10" y2="40" stroke="red" stroke-width="5" stroke-linecap="round"/>
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
                                // 'Date Hired' => \Carbon\Carbon::parse($add_employee->emp_date_hired)->format('F j, Y')
                            ] as $label => $value)
                                <div class="flex flex-row space-x-4 content-center h-8 w-max">
                                    <p class="employment_info_content text-lg font-semibold child">{{ $label }}: {{ $value }} </p>
                                    <div class="employment_info_action_buttons flex flex-row space-x-2 h-max w-max items-center hidden">
                                        <button class="employment_info_edit_button" data.id="{{ $add_employee->id }}" data-field="{{ $label }}">
                                            <svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="teal" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <line x1="12" y1="5" x2="12" y2="19"></line>
                                                <line x1="5" y1="12" x2="19" y2="12"></line>
                                            </svg>
                                        </button>
                                        <button class="employment_info_delete_button" data.id="{{ $add_employee->id }}" data-field="{{ $label }}">
                                            <svg width="25" height="25" viewBox="0 0 50 50" xmlns="http://www.w3.org/2000/svg">
                                                <line x1="10" y1="10" x2="40" y2="40" stroke="red" stroke-width="5" stroke-linecap="round"/>
                                                <line x1="40" y1="10" x2="10" y2="40" stroke="red" stroke-width="5" stroke-linecap="round"/>
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
                                <div class="flex flex-row space-x-4 content-center h-8 w-max">
                                    <p class="personal_info_content text-lg font-semibold child">{{ $label }}: {{ $value }} </p>
                                    <div class="employment_info_action_buttons flex flex-row space-x-2 h-max w-max items-center hidden">
                                        <button class="employment_info_edit_button" data.id="{{ $add_employee->id }}" data-field="{{ $label }}">
                                            <svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="teal" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <line x1="12" y1="5" x2="12" y2="19"></line>
                                                <line x1="5" y1="12" x2="19" y2="12"></line>
                                            </svg>
                                        </button>
                                        <button class="employment_info_delete_button" data.id="{{ $add_employee->id }}" data-field="{{ $label }}">
                                            <svg width="25" height="25" viewBox="0 0 50 50" xmlns="http://www.w3.org/2000/svg">
                                                <line x1="10" y1="10" x2="40" y2="40" stroke="red" stroke-width="5" stroke-linecap="round"/>
                                                <line x1="40" y1="10" x2="10" y2="40" stroke="red" stroke-width="5" stroke-linecap="round"/>
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
                actionbuttons.forEach(actionbutton => {
                    actionbutton.classList.toggle('hidden');
                });
            });

            document.getElementById('edit_employment_information').addEventListener('click', function() {
                const actionbuttons = document.querySelectorAll('.employment_info_action_buttons');
                actionbuttons.forEach(actionbutton => {
                    actionbutton.classList.toggle('hidden');
                });
            })

        })
    </script>
@endsection
