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
        </div>
    @endsection

