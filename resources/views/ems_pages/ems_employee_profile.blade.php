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
                        <button>
                            <svg width="25" height="25" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M16.5 3L21 7.5L7.5 21H3V16.5L16.5 3Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                              </svg>
                                                      
                        </button>
                        <button>
                            <img src="{{ asset('img/icons/delete.png') }}" alt="" class="h-6 w-6">
                        </button>
                    </div>
                </div>
                <div class="flex flex-row pt-4">
                    <div class="w-[50%] space-y-2">
                        <p class="text-lg font-semibold"> Name: {{ $add_employee->emp_name }} </p>
                        <p class="text-lg font-semibold"> Gender: {{ $add_employee->emp_gender}} </p>
                        <p class="text-lg font-semibold"> Age: {{ $add_employee->emp_age }}</p>
                        <p class="text-lg font-semibold"> Birthdate: {{ \Carbon\Carbon::parse($add_employee->emp_birthday)->format('F j, Y') }} </p>
                        <p class="text-lg font-semibold"> Address: {{ $add_employee->emp_address }} </p>
                    </div>
                    <div class="w-[50%] space-y-2">  
                        <p class="text-lg font-semibold"> Contact No.: {{ preg_replace("/(\d{4})(\d{3})(\d{4})/", "$1-$2-$3", $add_employee->emp_contact_number) }} </p>
                        <p class="text-lg font-semibold"> Contact Person: {{ $add_employee->emp_contact_person }} </p>
                        <p class="text-lg font-semibold"> Contact Person No.: {{ $add_employee->emp_contact_p_number }} </p>
                        <p class="text-lg font-semibold"> Status: {{ $add_employee->emp_status }} </p>
                        
                    </div>
                </div>
                <div class="mt-12">
                    <div class="border-b-[2px] border-b-black pb-4 relative flex flex-row">
                        <span class="tracking-widest text-3xl font-semibold"> Employment Information </span>
                        <div class="absolute right-4 pb-4 h-full w-max flex flex-row space-x-4">
                            <button>
                                <svg width="25" height="25" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M16.5 3L21 7.5L7.5 21H3V16.5L16.5 3Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                  </svg>
                                   
                            </button>
                        </div>
                    </div>
                    <div class="flex flex-row pt-4">
                        <div class="w-[50%] space-y-2">
                            <p class="text-lg font-semibold"> Company: {{ $add_employee->emp_company }} </p>
                            <p class="text-lg font-semibold"> Position: {{$add_employee->emp_position }} </p>
                            <p class="text-lg font-semibold"> Salary: P{{$add_employee->emp_salary }} </p>
                            <p class="text-lg font-semibold"> Date Hired: {{ \Carbon\Carbon::parse($add_employee->emp_date_hired)->format('F j, Y') }} </p>
                        </div>
                        <div class="w-[50%] space-y-2">
                            <p class="text-lg font-semibold"> SSS: {{ $add_employee->emp_sss }} </p>
                            <p class="text-lg font-semibold"> HMDF: {{$add_employee->emp_hmdf }} </p>
                            <p class="text-lg font-semibold"> PhilHealth {{$add_employee->emp_philhealth }} </p>
                            <p class="text-lg font-semibold"> TIN No.: {{$add_employee->emp_tin}} </p>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
