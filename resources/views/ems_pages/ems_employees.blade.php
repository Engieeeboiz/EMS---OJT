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
            class="h-4/5 w-2/5 bg-[#0a9c84] rounded-xl border border-[1px] border-black px-8 py-8">
                <div class="h-max w-full">
                    <p class="text-3xl font-bold"> Add Employee </p>
                </div>
                <form action="" method="" class="space-y-2">
                    <div class="h-max w-full flex flex-row space-x-4 mt-4">
                        <div class="h-max w-full flex flex-col">
                            <label for="" class="text-md font-bold"> Last Name </label>
                            <input type="text"
                            placeholder="Last Name"
                            class="h-10 w-full rounded-lg border-[1px] border-black">
                        </div>
                        <div class="h-max w-full flex flex-col">
                            <label for="" class="text-md font-bold"> Given Name </label>
                            <input type="text"
                            placeholder="Given Name"
                            class="h-10 w-full rounded-lg border-[1px] border-black">
                        </div>
                        <div class="h-max w-full flex flex-col">
                            <label for="" class="text-md font-bold"> Middle Name </label>
                            <input type="text"
                            placeholder="Middle Name"
                            class="h-10 w-full rounded-lg border-[1px] border-black">
                        </div>
                    </div>
                    <div class="h-max w-full flex flex-row space-x-4">
                        <div class="h-max w-1/5 flex flex-col">
                            <label for=""> Gender </label>
                            <select 
                                name=""
                                id=""
                                class="h-10 w-32 rounded-lg border-[1px] border-black">
                                <option value="0"> Gender </option>
                            </select>
                        </div>
                        <div class="h-max w-1/5 flex flex-col">
                            <label for=""> Age </label>
                            <input type="text"
                            placeholder="Age"
                            class="h-10 w-full rounded-lg border-[1px] border-black">
                        </div>
                        <div class="h-max w-full flex flex-col">
                            <label for=""> Birthday </label>
                            <div class="flex flex-row space-x-2">
                                <select name="" 
                                id=""
                                class="h-10 w-2/6 rounded-lg border-[1px] border-black">
                                    <option value="0"> DD </option>
                                </select>

                                <select name="" 
                                id=""
                                class="h-10 w-2/6 rounded-lg border-[1px] border-black">
                                    <option value="0"> MM</option>
                                </select>

                                <select name="" 
                                id=""
                                class="h-10 w-2/6 rounded-lg border-[1px] border-black">
                                    <option value="0"> YYYY </option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="h-max w-full flex flex-col">
                        <label for=""> Company </label>
                        <input type="text"
                        placeholder="Company"
                        class="h-10 w-full rounded-lg bordr-[1px] border-black">
                    </div>
                    <div class="h-max w-full flex flex-col">
                        <label for=""> Position </label>
                        <input type="text"
                        placeholder="Position"
                        class="h-10 w-full rounded-lg bordr-[1px] border-black">
                    </div>
                    <div class="h-max w-full flex flex-col">
                        <label for=""> Contact Person </label>
                        <input type="text"
                        placeholder="Contact Person"
                        class="h-10 w-full rounded-lg bordr-[1px] border-black">
                    </div>
                    <div class="h-max w-full flex flex-col">
                        <label for=""> Contact Number </label>
                        <input type="text"
                        placeholder="Contact Number"
                        class="h-10 w-full rounded-lg bordr-[1px] border-black">
                    </div>
                    <div class="h-max w-full pt-8 justify-center flex flex-row space-x-4">
                        <button type="submit"
                        id="add_employee_register"
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
