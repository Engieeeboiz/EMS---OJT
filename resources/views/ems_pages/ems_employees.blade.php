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
                <table class="table-auto w-4/5 border-seprate">
                    <thead class="border-seprate border border-[black] bg-[#0a9c84] text-[#F2E7D5] font-bold h-full w-full">
                        <tr>
                            <th> ID </th>
                            <th> NAME </th>
                            <th> COMPANY </th>
                            <th> POSITION </th>
                            <th> SSS </th>
                            <th> HDMF </th>
                            <th> PHILHEALTH </th>
                            <th> TIN </th>
                            <th> STATUS </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td> </td>
                        </tr>
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
        class="hidden absolute top-0 left-0 h-screen w-screen justify-items-center pt-28 backdrop-filter backdrop-blur-sm">
            <div id="add_employee_modal_content"
            class="h-5/5 w-2/5 bg-[#0a9c84] rounded-xl border border-[1px] border-black px-8 py-8 relative">

            <form action="{{ route('employee.add')}}" method="POST" class="space-y-2">
            @csrf
                <div class="h-max w-full flex flex-row content-center">
                    <p class="text-3xl font-bold"> Add Employee </p>
                    <input type="text"
                    class="h-8 w-28 border-[1] border-black rounded-lg absolute right-8"
                    placeholder="ID No.">
                </div>
                    <div class="h-max w-full flex flex-row space-x-4 mt-4">
                        <div class="h-max w-full flex flex-col">
                            <label for="" class="text-md font-bold"> Last Name </label>
                            <input type="text"
                            name="employee_last_name"
                            id="employee_last_name"
                            placeholder="Last Name"
                            class="h-10 w-full rounded-lg border-[1px] border-black">
                        </div>
                        <div class="h-max w-full flex flex-col">
                            <label for="" class="text-md font-bold"> Given Name </label>
                            <input type="text"
                            placeholder="Given Name"
                            name="employee_given_name"
                            id="employee_given_name"
                            class="h-10 w-full rounded-lg border-[1px] border-black">
                        </div>
                        <div class="h-max w-full flex flex-col">
                            <label for="" class="text-md font-bold"> Middle Name </label>
                            <input type="text"
                            name="employee_middle_name"
                            id="employee_middle_name"
                            placeholder="Middle Name (Optional)"
                            class="h-10 w-full rounded-lg border-[1px] border-black">
                        </div>
                    </div>
                    <div class="h-max w-full flex flex-row space-x-4">
                        <div class="h-max w-1/5 flex flex-col">
                            <label for="" class="text-md font-bold"> Gender </label>
                            <select 
                                name="employee_gender"
                                id="employee_gender"
                                class="h-10 w-32 rounded-lg border-[1px] border-black">
                                <option value="0" class="text-md font-bold"> Gender </option>
                            </select>
                        </div>
                        <div class="h-max w-1/5 flex flex-col">
                            <label for="" class="text-md font-bold"> Age </label>
                            <input type="text"
                            maxlength="2"
                            placeholder="Age"
                            name="employee_age"
                            id="employee_age"
                            class="h-10 w-full rounded-lg border-[1px] border-black">
                        </div>
                        <div class="h-max w-full flex flex-col">
                            <label for="" class="text-md font-bold"> Birthday </label>
                            <div class="flex flex-row space-x-2">
                                <select
                                name="employee_dd" 
                                id="employee_dd"
                                class="h-10 w-2/6 rounded-lg border-[1px] border-black">
                                    <option value="0"> DD </option>
                                </select>

                                <select
                                name="employee_mm" 
                                id="employee_mm"
                                class="h-10 w-2/6 rounded-lg border-[1px] border-black">
                                    <option value="0"> MM </option>
                                </select>

                                <select
                                name="employee_yyyy" 
                                id="employee_yyyy"
                                class="h-10 w-2/6 rounded-lg border-[1px] border-black">
                                    <option value="0"> YYYY </option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="h-max w-full flex flex-col">
                        <label for="" class="text-md font-bold"> Address </label>
                        <input type="text"
                        placeholder="Address"
                        name="employee_address"
                        id="employee_company"
                        class="h-10 w-full rounded-lg bordr-[1px] border-black">
                    </div>
                    <div class="h-max w-full flex flex-col">
                        <label for="" class="text-md font-bold"> Company </label>
                        <input type="text"
                        placeholder="Company"
                        name="employee_company"
                        id="employee_company"
                        class="h-10 w-full rounded-lg bordr-[1px] border-black">
                    </div>
                    <div class="h-max w-full flex flex-col">
                        <label for="" class="text-md font-bold"> Position </label>
                        <input type="text"
                        placeholder="Position"
                        name="employee_position"
                        id="employee_position"
                        class="h-10 w-full rounded-lg bordr-[1px] border-black">
                    </div>
                    <div class="h-max w-full flex flex-col">
                        <label for="" class="text-md font-bold"> Contact Person </label>
                        <input type="text"
                        placeholder="Contact Person"
                        name="employee_contact_person"
                        id="employee_contact_person"
                        class="h-10 w-full rounded-lg bordr-[1px] border-black">
                    </div>
                    <div class="h-max w-full flex flex-col">
                        <label for="" class="text-md font-bold"> Contact Number </label>
                        <input type="text"
                        placeholder="Contact Number"
                        name="employee_contact_number"
                        id="employee_contact_number"
                        class="h-10 w-full rounded-lg bordr-[1px] border-black">
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
        
    @endsection
