<header class="h-32 w-full border-b-[1px] border-black" style="background-color: #0a9c84;">

    <div class="flex justify-between items-center h-full w-full px-32">
        <div>
            <img src="{{ asset('img/icons/buildings-solid-60.png') }}" alt="">
        </div>
        <div class="space-x-12">
            <a href=" {{ route('ems_homepage') }}"
            
            class="nav-link text-xl font-bold"> Home </a>

            <a href="{{ route('ems_employees') }}"
            
            class="nav-link text-xl font-bold"> Employees </a>

            <a href="{{ route('ems_expenses') }}"
            
            class="nav-link text-xl font-bold"> Expenses </a>
            
            <a href="{{ route('ems_dashboard') }}"
            
            class="nav-link text-xl font-bold"> Dashboard </a>
            
        </div>
    </div>

</header> 