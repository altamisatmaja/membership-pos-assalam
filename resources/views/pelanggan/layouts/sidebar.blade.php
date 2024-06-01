<div
    class="fixed flex flex-col top-14 left-0 w-14 hover:w-64 md:w-64 bg-green-700  h-full text-white transition-all duration-300 border-none z-10 sidebar">
    <div class="overflow-y-auto overflow-x-hidden flex flex-col justify-between flex-grow">
        <ul class="flex flex-col py-4 space-y-1">
            <li>
                <a href="{{ route('customer.dashboard') }}"
                    class="relative hidden md:flex items-center justify-center mx-auto text-center mb-10 mt-8 h-32 focus:outline-none  text-white-600  border-l-4 border-transparent  pr-6 rounded-lg">
                    <div class="w-full md:w-40 flex justify-center items-center">
                        <img class="w-full rounded-xl" src="/uploads/{{ $member->gambar_member }}" alt="dress" />
                    </div>
                </a>
            </li>
            <li class="px-5 hidden md:block">
                <div class="flex flex-row items-center h-8">
                    <div class="text-sm font-light tracking-wide text-white uppercase">UTAMA</div>
                </div>
            </li>
            <li>
                <a href="{{ route('customer.dashboard') }}"
                    class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-green-600  text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-green-900  pr-6">
                    <span class="inline-flex justify-center items-center ml-4">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                            </path>
                        </svg>
                    </span>
                    <span class="ml-2 text-lg font-semibold tracking-wide truncate">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="{{ route('customer.dashboard.update') }}"
                    class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-green-600  text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-green-900  pr-6">
                    <span class="inline-flex justify-center items-center ml-4">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4">
                            </path>
                        </svg>
                    </span>
                    <span class="ml-2 text-lg font-semibold tracking-wide truncate">Update Profile</span>
                </a>
            </li>
            <li>
                <a href="{{ route('customer.dashboard.barcode') }}"
                    class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-green-600  text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-green-900  pr-6">
                    <span class="inline-flex justify-center items-center ml-4">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z">
                            </path>
                        </svg>
                    </span>
                    <span class="ml-2 text-lg font-semibold tracking-wide truncate">Barcode</span>
                </a>
            </li>
            <li>
                <a href="{{ route('pages.home') }}"
                    class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-green-600  text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-green-900  pr-6">
                    <span class="inline-flex justify-center items-center ml-4">
                        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960"
                            fill="#ffffff">
                            <path
                                d="M240-200h120v-200q0-17 11.5-28.5T400-440h160q17 0 28.5 11.5T600-400v200h120v-360L480-740 240-560v360Zm-80 0v-360q0-19 8.5-36t23.5-28l240-180q21-16 48-16t48 16l240 180q15 11 23.5 28t8.5 36v360q0 33-23.5 56.5T720-120H560q-17 0-28.5-11.5T520-160v-200h-80v200q0 17-11.5 28.5T400-120H240q-33 0-56.5-23.5T160-200Zm320-270Z" />
                        </svg>
                    </span>
                    <span class="ml-2 text-lg font-semibold tracking-wide truncate">Beranda</span>
                </a>
            </li>
            <li class="px-5 hidden md:block">
                <div class="flex flex-row items-center mt-5 h-8">
                    <div class="text-sm font-light tracking-wide text-white uppercase">AUTENTIKASI</div>
                </div>
            </li>
            <li>
                <a href="{{ route('pelanggan.logout') }}"
                    class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-green-600  text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-green-900  pr-6">
                    <span class="inline-flex justify-center items-center ml-4">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z">
                            </path>
                        </svg>
                    </span>
                    <span class="ml-2 text-lg font-semibold tracking-wide truncate">Logout</span>
                </a>
            </li>
        </ul>
        <p class="mb-14 px-5 py-3 hidden md:block text-center text-xs">Copyright @2024</p>
    </div>
</div>
