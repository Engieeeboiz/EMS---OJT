@extends('layout.layout')

    @section('content')
        <div class="h-full w-full flex flex-col items-center pt-8 space-y-8">
            <div class="h-fit w-fit justify-items-center">
                <img src="{{ asset('img/icons/buildings-solid-60.png') }}" alt="">
            </div>
            <div class="h-max w-screen justify-items-center">
                <form action="" method="" class="flex flex-col w-full items-center">
                    <label for="" class="text-center text-3xl font-bold text-[#0a9c84] mb-4"> Efficient Manpower Services </label>
                    <input type="text"
                    name="hp_search"
                    id="hp_search"
                    class="w-1/2 h-[40px] border-[1px] border-black rounded-full px-4"
                    placeholder="Search for a job">
                </form>
            </div>
            <div class="h-max w-screen justify-items-center">
                <table class="table-fixed w-[90%] border-seprate">
                    <thead class="border-seprate border border-[black] duration-[1s] bg-[#0a9c84] text-[#F2E7D5] font-bold h-full w-full">
                        <tr>
                            <th class="w-max"> ID         </th>
                            <th class="w-max"> NAME       </th>
                            <th class="w-max"> COMPANY    </th>
                            <th class="w-max"> POSITION   </th>
                            <th class="w-max"> SSS        </th>
                            <th class="w-max"> HDMF       </th>
                            <th class="w-max"> PHILHEALTH </th>
                            <th class="w-max"> TIN        </th>
                            <th class="w-max"> STATUS     </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($add_employees as $add_employee) 
                            <tr onclick="window.location='/ems_employee/{{ $add_employee->emp_ID }}';"
                            class="hover:cursor-pointer hover:text-slate-100 hover:bg-[#0a9c84] font-bold border-b-[1px] border-black">
                                <td class="text-center font-bold"> {{ $add_employee->emp_ID }} </td>
                                <td class="text-center"> {{ $add_employee->emp_name }} </td>
                                <td class="text-center"> {{ $add_employee->emp_company }} </td>
                                <td class="text-center"> {{ $add_employee->emp_position }} </td>
                                <td class="text-center"> {{ $add_employee->emp_sss }} </td>
                                <td class="text-center"> {{ $add_employee->emp_hmdf }} </td>
                                <td class="text-center"> {{ $add_employee->emp_philhealth}} </td>
                                <td class="text-center"> {{ $add_employee->emp_tin }} </td>
                                <td class="text-center"> {{ $add_employee->emp_status }} </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div>
                <button type="button"
                id="add_employee"
                class="bg-[#0a9c84] text-[#F2E7D5] border border-[1] border-black font-bold px-4 py-2 rounded-full mt-4">
                    Add Employee 
                </button>
            </div>      
        </div>
        
        <div id="add_employee_modal"
        class="hidden absolute top-0 left-0 h-screen w-screen justify-items-center pt-40 backdrop-filter backdrop-blur-sm">
            <div id="add_employee_modal_content"
            class="h-2/5 w-2/5 bg-[#0a9c84] rounded-xl justify-items-center content-center border border-[1px] border-black ">
                <div>
                    <p class="text-3xl font-bold"> Add Employee? </p>
                </div>  
                <div class="pt-20 space-x-10">
                    <button type="button"
                    id="add_employee_content"
                    class="rounded-full bg-green-400 h-[32px] w-[100px] font-bold text-sm border-[1px] border-black hover:text-[#F2E7D5]">
                        Add
                    </button>
                    <button type="button"
                    id="cancel_employee_content"
                    class="rounded-full bg-red-400 h-[32px] w-[100px] font-bold text-sm border-[1px] border-black hover:text-[#F2E7D5]">
                        Cancel
                    </button>
                </div>
            </div>
        </div>

        <div id="register_employee_modal"
        class="hidden absolute top-0 left-0 h-screen w-screen justify-items-center pt-12     backdrop-filter backdrop-blur-sm">
            <div id="add_employee_modal_content"
            class="h-[90%] w-2/5 bg-[#0a9c84] rounded-xl border border-[1px] border-black px-8 py-8 relative">

            <form action="{{ route('employee.add')}}" method="POST" class="space-y-2">
            @csrf
                <div class="h-max w-full flex flex-row content-center">
                    <p class="text-3xl font-bold"> Add Employee </p>
                    <div class="absolute right-8">
                    <label for="" class="text-md font-bold me-2"> ID: </label>
                    <input type="text"
                    value="{{ old('employee_id') }} "
                    name="employee_id"
                    class="h-8 w-28 border-[1] border-black rounded-lg  @error('employee_last_name') border-[2px] border-red-500 @enderror"
                    placeholder="ID No.">
                    </div>
                </div>
                    <div class="h-max w-full flex flex-row space-x-4 mt-4">
                        <div class="h-max w-full flex flex-col">
                            <label for="" class="text-md font-bold"> Last Name </label>
                            <input type="text"
                            value="{{ old('employee_last_name') }}"
                            name="employee_last_name"
                            id="employee_last_name"
                            placeholder="Last Name"
                            class="h-10 w-full rounded-lg border-[1px] border-black @error('employee_last_name') border-[2px] border-red-500 @enderror">
                        </div>
                        <div class="h-max w-full flex flex-col">
                            <label for="" class="text-md font-bold"> Given Name </label>
                            <input type="text"
                            value="{{ old('employee_first_name') }}"
                            placeholder="Given Name"
                            name="employee_first_name"
                            id="employee_first_name"
                            class="h-10 w-full rounded-lg border-[1px] border-black @error('employee_first_name') border-[2px] border-red-500 @enderror">
                        </div>
                        <div class="h-max w-full flex flex-col">
                            <label for="" class="text-md font-bold"> Middle Name </label>   
                            <input type="text"
                            value="{{ old('employee_middle_name') }}"
                            name="employee_middle_name"
                            id="employee_middle_name"
                            placeholder="Middle Name (Optional)"
                            class="h-10 w-full rounded-lg border-[1px] border-black @error('employee_middle_name') border-[2px] border-red-500 @enderror">
                        </div>
                    </div>
                    <div class="h-max w-full flex flex-row space-x-4">
                        <div class="h-max w-[33%] flex flex-col">
                            <label for="" class="text-md font-bold"> Gender </label>
                            <select 
                                value="{{ old('employee_gender') }}"
                                name="employee_gender"
                                id="employee_gender"
                                class="h-10 w-full rounded-lg border-[1px] border-black @error('employee_gender') border-[2px] border-red-500 @enderror">
                                <option value="" class="text-md" selected disabled> Gender </option>
                                <option value="Female" class="text-md"> Female </option>
                                <option value="Male" class="text-md"> Male </option>
                                <option value="Other" class="text-md"> Other </option>
                            </select>
                        </div>
                        <div class="h-max w-[32%] flex flex-col">
                            <label for="" class="text-md font-bold"> Age </label>
                            <input type="number"
                            value="{{ old('employee_age') }}"
                            maxlength="2"
                            placeholder="Age"
                            name="employee_age"
                            id="employee_age"
                            class="h-10 w-full rounded-lg border-[1px] border-black @error('employee_age') border-[2px] border-red-500 @enderror">
                        </div>
                        <div class="h-max w-[33%] flex flex-col">
                            <label for="" class="text-md font-bold"> Birthday </label>
                            <input type="date"
                            value="{{ old('employee_birthday') }}"
                            name="employee_birthday"
                            id="employee_birthday"
                            class="h-10 w-full rounded-lg border-[1px] border-black @error('employee_brithday') border-[2px] border-red-500 @enderror ">
                        </div>
                    </div>
                    <div class="h-max w-full flex flex-col">
                        <label for="" class="text-md font-bold"> Address </label>
                        <input type="text"
                        value="{{ old('employee_address') }}"
                        placeholder="Address"
                        name="employee_address"
                        id="employee_address"
                        class="h-10 w-full rounded-lg border-[1px] border-black @error('employee_address') border-[2px] border-red-500 @enderror">
                    </div>
                    <div class="h-max w-full flex flex-col">
                        <label for=""> Contact Number </label>
                        <input type="text"
                        maxlength="11"
                        value="{{ old('employee_contact_number') }} {{ $errors->has('employee_contact_number') ? ', ' . $errors->first('employee_contact_number') : 'Contact Number'}}"
                        name="employee_contact_number"
                        id="employee_contact_number"
                        class="h-10 w-full rounded-lg border-[1px] border-black px-2 @error('employee_contact_number') border-[2px] border-red-500 @enderror">
                    </div>
                    <div class="h-max w-full flex flex-col">
                        <label for="" class="text-md font-bold"> Company </label>
                        <select value="{{ old('employee_company') }}"
                        name="employee_company"
                        id="employee_company"
                        class="h-10 w-full rounded-lg border-[1px] border-black @error('employee_company') border-[2px] border-red-500 @enderror">
                            <option value="" selected disabled> Company </option>
                            <option value="Oakwave Corporation" class="text-md"> Oakwave Corporation </option>
                            <option value="Cavite East Asia Medical Center" class="text-md"> Cavite East Asia Medical Center </option>
                            <option value="Chin Su Philippines Company Incorporated" class="text-md"> Chin Su Philippines Company Incorporated </option>
                            <option value="BIONIC" class="text-md"> BIONIC </option>
                            <option value="iCare" class="text-md"> iCare </option>
                        </select>
                    </div>
                    <div class="h-max w-full flex flex-col">
                        <label for="" class="text-md font-bold"> Position </label>
                        <input type="text"
                        value="{{ old('employee_position') }}"
                        placeholder="Position"
                        name="employee_position"
                        id="employee_position"
                        class="h-10 w-full rounded-lg border-[1px] border-black @error('employee_position') border-[2px] border-red-500 @enderror">
                    </div>
                    <div class="h-max w-full flex flex-col">
                        <label for="" class="text-md font-bold"> Contact Person </label>
                        <input type="text"
                        value="{{ old('employee_contact_person') }}"
                        placeholder="Contact Person"
                        name="employee_contact_person"
                        id="employee_contact_person"
                        class="h-10 w-full rounded-lg border-[1px] border-black @error('employee_contact_person') border-[2px] border-red-500 @enderror">
                    </div>
                    <div class="h-max w-full flex flex-col">
                        <label for="" class="text-md font-bold"> Contact Person Number </label>
                        <input type="text"
                        value="{{ old('employee_contact_person_number') }} {{ $errors->has('employee_contact_person_number') ? ', ' . $errors->first('employee_contact_person_number') : 'Contact Person Number'}}"
                        maxlength="11"
                        name="employee_contact_person_number"
                        id="employee_contact_person_number"
                        class="h-10 w-full rounded-lg border-[1px] border-black px-2 @error('employee_contact_person_number') border-[2px] border-red-500 @enderror">
                    </div>
                    <div class="h-max w-full pt-8 justify-center flex flex-row space-x-4">
                        <button type="submit"
                        id="next_employee_register"
                        class="rounded-full bg-green-400 h-[32px] w-[100px] font-bold text-sm border-[1px] border-black hover:text-[#F2E7D5]">
                            Add
                        </button>
                        <button type="button"
                        id="cancel_employee_register"
                        class="rounded-full bg-red-400 h-[32px] w-[100px] font-bold text-sm border-[1px] border-black hover:text-[#F2E7D5]">
                            Cancel
                        </button>
                    </div>
                </form>
            </div>
        </div>

        @if($errors->any())
            <script>
                document.addEventListener('DOMContentLoaded', () => {
                    document.getElementById('register_employee_modal').classList.remove('hidden');
                });
            </script>
        @endif

        <script>
            document.addEventListener('DOMContentLoaded', () => {
                document.getElementById('employee_age').addEventListener('input', function() {
                    let age = parseInt(this.value);
                    if (isNaN(age) || age <= 0) return;

                    let today = new Date();
                    let birthdate = new Date(today.getFullYear() - age, today.getMonth(), today.getDate());

                    document.getElementById('employee_birthday').value = birthdate.toISOString().split('T')[0];
                });

                document.getElementById('employee_contact_number').addEventListener('focus', function() {
                    if (this.value.includes('Contact Number')) {
                        this.value = '';
                    }
                })

                    document.getElementById('employee_contact_number').addEventListener('blur', function () {
                        if (this.value.trim() === '') {
                            this.value = 'Contact Number'; // Restore the value when clicked outside
                        }
                    });

                document.getElementById('employee_contact_person_number').addEventListener('focus', function() {
                    if (this.value.includes('Contact Person Number')) {
                        this.value = '';
                    }
                })

                    document.getElementById('employee_contact_person_number').addEventListener('blur', function () {
                        if(this.value.trim() === '') {
                            this.value = 'Contact Person Number'; // Restore the value when clicked outside
                        }
                    })
            });
        </script>
        
    @endsection
