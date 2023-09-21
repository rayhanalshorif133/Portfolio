<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
    @vite('resources/css/app.css')
</head>

<body class="bg-[#F2F6FC]">
    <div class="flex space-x-2">
        {{-- sidebar --}}
        <div
            class="justify-start h-screen mr-auto w-72 bg-stone-900  border-r-[2px] border-spacing-8 border-[#554e4e] drop-shadow-md">
            {{-- logo --}}
            <div class="flex items-center justify-center border-b-[2px] border-[#554e4e] py-2">
                <img src="{{ asset('assets/images/admin_logo.png') }}" alt="logo" class="w-10 h-10">
                <span class="mx-1 font-mono text-2xl font-bold text-white">
                    Portfolio
                </span>
            </div>
            <div class="mt-2">
                <div class="">
                    <a href="#"
                        class="flex items-center justify-start px-4 py-3 space-x-2 text-white hover:bg-stone-700">
                        <i class="mr-2 fa-solid fa-gauge-high fa-xl"></i> <span
                            class="text-xl font-bold">Dashboard</span>
                    </a>
                </div>
            </div>
        </div>
        {{-- space design --}}
        {{-- navbar --}}
        <div class="w-full h-16 px-5 py-2 bg-white shadow-lg">
            <div class="flex justify-between">
                <div class="flex items-center mt-[6px] space-x-4">
                    <button
                        class="flex duration-500 transition-all ease-in-out items-center px-5 py-2 text-sm font-medium text-white rounded-md to-[#411D95] from-[#CC8CE6] bg-gradient-to-r hover:from-[#411D95] hover:to-[#CC8CE6] ">
                        Home
                    </button>
                    <button
                        class="flex items-center px-5 py-2 text-sm font-medium text-gray-700 transition-all duration-500 ease-in-out bg-gray-200 rounded-md hover:text-white hover:bg-gray-400 ">
                        Contact
                    </button>
                </div>
                <div class="flex space-x-4 mt-[6px]">
                    <button
                        class="flex items-center px-5 py-2 text-sm font-medium text-gray-700 transition-all duration-500 ease-in-out bg-gray-200 rounded-md hover:text-white hover:bg-gray-400 ">
                        <i class="mr-2 fa-solid fa-bell fa-lg"></i>
                        <span class="text-sm font-semibold">Notification</span>
                    </button>
                    <a href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();"
                        class="flex items-center px-5 py-2 text-sm font-medium transition-all duration-500 ease-in-out bg-red-500 rounded-md text-gray-50 hover:text-white hover:bg-red-600 ">
                        <i class="mr-2 fa-solid fa-right-from-bracket fa-lg"></i>
                        <span class="text-sm font-semibold">Logout</span>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </div>
    {{-- body --}}
</body>

</html>
