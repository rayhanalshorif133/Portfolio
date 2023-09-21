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

