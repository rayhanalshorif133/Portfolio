@php
    $routeName = Route::currentRouteName();
@endphp

<div
    class="justify-start h-screen mr-auto w-72 bg-stone-900  border-r-[2px] border-spacing-8 border-[#554e4e] drop-shadow-md">
    {{-- logo --}}
    <div class="flex items-center justify-center border-b-[2px] border-[#554e4e] py-2">
        <img src="{{ asset('assets/images/admin_logo.png') }}" alt="logo" class="w-10 h-10">
        <span class="mx-1 font-mono text-2xl font-bold text-white">
            Portfolio
        </span>
    </div>
    <div class="mt-2 space-y-1">
        <div class="">
            <a href="{{route('admin.dashboard')}}" class="@if ($routeName == 'admin.dashboard')
            to-[#411D95] from-[#CC8CE6] bg-gradient-to-r
            @endif flex items-center justify-start px-4 py-3 space-x-2 text-white hover:bg-stone-700">
                <i class="mr-2 fa-solid fa-gauge-high fa-md"></i> <span class="text-base font-bold">Dashboard</span>
            </a>
        </div>
        <div class="">
            <a href="{{route('admin.user.index')}}" class="@if ($routeName == 'admin.user.index')
            to-[#411D95] from-[#CC8CE6] bg-gradient-to-r
            @endif flex items-center justify-start px-4 py-3 space-x-2 text-white hover:bg-stone-700">
                <i class="mr-2 fa-solid fa-user fa-md"></i> <span class="text-base font-bold">User</span>
            </a>
        </div>
        <div class="">
            <a href="{{route('admin.site.index')}}" class="@if ($routeName == 'admin.site.index')
            to-[#411D95] from-[#CC8CE6] bg-gradient-to-r
            @endif flex items-center justify-start px-4 py-3 space-x-2 text-white hover:bg-stone-700">
                <i class="mr-2 fa-solid fa-gear fa-md"></i> <span class="text-base font-bold">Site Setting</span>
            </a>
        </div>
    </div>
</div>
