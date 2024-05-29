<nav class="sticky top-0 z-50  flex flex-wrap items-center justify-between p-3 bg-white">
    <a href="/">
        <div class="text-xl"><span class="font-semibold text-textbase">Assalam</span><span
                class="text-green-800 font-semibold">Hypermarket</span></div>
    </a>
    <div class="flex md:hidden">
        <button id="hamburger">
            <svg class="toggle block" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960"
                width="24px" fill="#444444">
                <path
                    d="M160-240q-17 0-28.5-11.5T120-280q0-17 11.5-28.5T160-320h640q17 0 28.5 11.5T840-280q0 17-11.5 28.5T800-240H160Zm0-200q-17 0-28.5-11.5T120-480q0-17 11.5-28.5T160-520h640q17 0 28.5 11.5T840-480q0 17-11.5 28.5T800-440H160Zm0-200q-17 0-28.5-11.5T120-680q0-17 11.5-28.5T160-720h640q17 0 28.5 11.5T840-680q0 17-11.5 28.5T800-640H160Z" />
            </svg>
            <svg class="toggle hidden" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960"
                width="24px" fill="#444444">
                <path
                    d="M480-424 284-228q-11 11-28 11t-28-11q-11-11-11-28t11-28l196-196-196-196q-11-11-11-28t11-28q11-11 28-11t28 11l196 196 196-196q11-11 28-11t28 11q11 11 11 28t-11 28L536-480l196 196q11 11 11 28t-11 28q-11 11-28 11t-28-11L480-424Z" />
            </svg>
        </button>
    </div>
    @auth
        <div
            class=" toggle hidden w-full md:w-auto md:text-lg md:-ml-36 md:flex text-right text-bold mt-5 md:mt-0 md:border-none">
            <a href="/"
                class="block md:inline-block md:text-semibold hover:text-green-800 px-3 py-3 md:border-none">Home
            </a>
            <a href="{{ route('pages.shop') }}"
                class="block md:inline-block md:text-semibold hover:text-green-800 px-3 py-3 md:border-none">Belanja
            </a>
            <a href="{{ route('pages.pre-membership') }}"
                class="block md:inline-block md:text-semibold hover:text-green-800 px-3 py-3 md:border-none">Membership
            </a>
            <a href="{{ route('pages.about') }}"
                class="block md:inline-block md:text-semibold hover:text-green-800 px-3 py-3 md:border-none">About
            </a>
        </div>
    @endauth
    @guest
        <div
            class=" toggle hidden w-full md:w-auto md:text-lg md:flex text-right text-bold mt-5 md:mt-0 md:border-none">
            <a href="/"
                class="block md:inline-block md:text-semibold hover:text-green-800 px-3 py-3 md:border-none">Home
            </a>
            <a href="{{ route('pages.shop') }}"
                class="block md:inline-block md:text-semibold hover:text-green-800 px-3 py-3 md:border-none">Belanja
            </a>
            <a href="{{ route('pages.pre-membership') }}"
                class="block md:inline-block md:text-semibold hover:text-green-800 px-3 py-3 md:border-none">Membership
            </a>
            <a href="{{ route('pages.about') }}"
                class="block md:inline-block md:text-semibold hover:text-green-800 px-3 py-3 md:border-none">About
            </a>
        </div>
    @endguest

    <div class="toggle w-full text-end hidden md:flex md:w-auto px-2 py-2 md:rounded">
        @auth
            <a href="{{ route('customer.dashboard') }}">
                <div class="flex justify-end">
                    <div class="flex items-center h-10 w-30 rounded-md  text-white font-medium p-2">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px"
                            fill="#444444">
                            <path
                                d="M480-480q-66 0-113-47t-47-113q0-66 47-113t113-47q66 0 113 47t47 113q0 66-47 113t-113 47ZM160-240v-32q0-34 17.5-62.5T224-378q62-31 126-46.5T480-440q66 0 130 15.5T736-378q29 15 46.5 43.5T800-272v32q0 33-23.5 56.5T720-160H240q-33 0-56.5-23.5T160-240Z" />
                        </svg>
                    </div>
                </div>
            </a>
        @endauth
        @guest
            <div class="flex flex-wrap gap-x-5 justify-end">
                <a href="{{ route('customer.login') }}"
                    class="px-5 ring-1 ring-green-800 text-white bg-green-800 py-2 rounded-lg transition-all duration-150">Login</a>
                <a href="{{ route('register') }}"
                    class="px-5 ring-1 ring-green-800 text-green-800 py-2 rounded-lg transition-all duration-150">Register</a>
                </a>
            @endguest
        </div>
</nav>
<script>
    document.getElementById("hamburger").onclick = function toggleMenu() {
        const navToggle = document.getElementsByClassName("toggle");
        for (let i = 0; i < navToggle.length; i++) {
            navToggle.item(i).classList.toggle("hidden");
        }
    };
</script>
