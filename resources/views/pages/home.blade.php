<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Navbar | TailGrids</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script defer src="{{ asset('js/alpine.min.js') }}"></script>
</head>

<body>
    <div>

        <nav class="flex flex-wrap items-center justify-between p-3 bg-[#e8e8e5]">
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
                    <svg class="toggle hidden" xmlns="http://www.w3.org/2000/svg" height="24px"
                        viewBox="0 -960 960 960" width="24px" fill="#444444">
                        <path
                            d="M480-424 284-228q-11 11-28 11t-28-11q-11-11-11-28t11-28l196-196-196-196q-11-11-11-28t11-28q11-11 28-11t28 11l196 196 196-196q11-11 28-11t28 11q11 11 11 28t-11 28L536-480l196 196q11 11 11 28t-11 28q-11 11-28 11t-28-11L480-424Z" />
                    </svg>
                </button>
            </div>
            <div
                class=" toggle hidden w-full md:w-auto md:text-lg md:flex text-right text-bold mt-5 md:mt-0 md:border-none">
                <a href="/" class="block md:inline-block hover:text-green-800 px-3 py-3 md:border-none">Home
                </a>
                <a href="{{ route('pages.shop') }}"
                    class="block md:inline-block hover:text-green-800 px-3 py-3 md:border-none">Belanja
                </a>
                <a href="{{ route('pages.membership') }}"
                    class="block md:inline-block hover:text-green-800 px-3 py-3 md:border-none">Membership
                </a>
                <a href="{{ route('pages.about') }}"
                    class="block md:inline-block hover:text-green-800 px-3 py-3 md:border-none">About
                </a>
            </div>

            <div class="toggle w-full text-end hidden md:flex md:w-auto px-2 py-2 md:rounded">
                @auth
                    <a href="{{ route('customer.dashboard') }}">
                        <div class="flex justify-end">
                            <div class="flex items-center h-10 w-30 rounded-md  text-white font-medium p-2">
                                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960"
                                    width="24px" fill="#444444">
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
                            class="px-6 ring-1 ring-green-800 text-white bg-green-800 py-3 rounded-lg transition-all duration-150">Login</a>
                        <a href="{{ route('register') }}"
                            class="px-6 ring-1 ring-green-800 text-green-800 py-3 rounded-lg transition-all duration-150">Register</a>
                        </a>
                    @endguest
                </div>
        </nav>
        <div class="relative w-full h-screen" id="home">
            <div class="absolute inset-0 opacity-70">
                <img src="https://image1.jdomni.in/banner/13062021/0A/52/CC/1AF5FC422867D96E06C4B7BD69_1623557926542.png"
                    alt="Background Image" class="object-cover object-center w-full h-full" />

            </div>
        </div>
        <div class="w-full flex flex-col justify-center items-center my-10 gap-y-3">
            <h2 class="text-6xl font-semibold text-black">-- PROMO --</h2>
            <p class="text-3xl font-semibold text-green-800">ASSALAM HYPERMARKET</p>
        </div>
        <div class=" flex items-center justify-center">
            <div class="container mx-auto">
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-4 xl:grid-cols-4 gap-4">
                    <div class="bg-white rounded-lg border border-black p-4 content-between grid grid-cols-1">
                        <img src="https://placehold.co/300x200/d1d4ff/352cb5.png" alt="Placeholder Image"
                            class="w-full h-48 rounded-md object-cover">
                        <div class="px-1 py-4">
                            <div class="font-bold text-xl mb-2 uppercase text-center">Minuman & Biskuit</div>
                            <p class="text-gray-700 text-base text-center">
                                This is a simple blog card example using Tailwind CSS. You can replace this text with
                                your own blog content.
                            </p>
                        </div>
                        <a href="#"
                            class="text-white bg-green-800 hover:underline bottom-0 items-end rounded-lg"><button
                                class="middle none center w-full rounded-lg bg-green-700 py-3 px-6 font-sans text-xs font-bold uppercase text-white shadow-md shadow-green-500/20 transition-all hover:shadow-lg hover:shadow-green-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                                data-ripple-light="true">
                                Detail
                            </button></a>
                    </div>
                    <div class="bg-white rounded-lg border border-black p-4 content-between grid grid-cols-1">
                        <img src="https://placehold.co/300x200/d1d4ff/352cb5.png" alt="Placeholder Image"
                            class="w-full h-48 rounded-md object-cover">
                        <div class="px-1 py-4">
                            <div class="font-bold text-xl mb-2 uppercase text-center">Elektronika & Perlengkapan rumah
                                tangga</div>
                            <p class="text-gray-700 text-base text-center">
                                This is a simple blog card example using Tailwind CSS. You can replace this text with
                                your own blog content.
                            </p>
                        </div>
                        <a href="#"
                            class="text-white bg-green-800 hover:underline bottom-0 items-end rounded-lg"><button
                                class="middle none center w-full rounded-lg bg-green-700 py-3 px-6 font-sans text-xs font-bold uppercase text-white shadow-md shadow-green-500/20 transition-all hover:shadow-lg hover:shadow-green-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                                data-ripple-light="true">
                                Detail
                            </button></a>
                    </div>
                    <div class="bg-white rounded-lg border border-black p-4 content-between grid grid-cols-1">
                        <img src="https://placehold.co/300x200/d1d4ff/352cb5.png" alt="Placeholder Image"
                            class="w-full h-48 rounded-md object-cover">
                        <div class="px-1 py-4">
                            <div class="font-bold text-xl mb-2 uppercase text-center">Aneka snack & Kebutuhan masak
                            </div>
                            <p class="text-gray-700 text-base text-center">
                                This is a simple blog card example using Tailwind CSS. You can replace this text with
                                your own blog content.
                            </p>
                        </div>
                        <a href="#"
                            class="text-white bg-green-800 hover:underline bottom-0 items-end rounded-lg"><button
                                class="middle none center w-full rounded-lg bg-green-700 py-3 px-6 font-sans text-xs font-bold uppercase text-white shadow-md shadow-green-500/20 transition-all hover:shadow-lg hover:shadow-green-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                                data-ripple-light="true">
                                Detail
                            </button></a>
                    </div>
                    <div class="bg-white rounded-lg border border-black p-4 content-between grid grid-cols-1">
                        <div>
                            <img src="https://placehold.co/300x200/d1d4ff/352cb5.png" alt="Placeholder Image"
                                class="w-full h-48 rounded-md object-cover">
                            <div class="px-1 py-4">
                                <div class="font-bold text-xl mb-2 uppercase text-center">Parcel lebaran</div>
                                <p class="text-gray-700 text-base text-center">
                                    This is a simple blog card example using Tailwind CSS. You can replace this text
                                    with
                                    your own blog content.
                                </p>
                            </div>
                        </div>
                        <a href="#"
                            class="text-white bg-green-800 hover:underline bottom-0 items-end rounded-lg"><button
                                class="middle none center w-full rounded-lg bg-green-700 py-3 px-6 font-sans text-xs font-bold uppercase text-white shadow-md shadow-green-500/20 transition-all hover:shadow-lg hover:shadow-green-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                                data-ripple-light="true">
                                Detail
                            </button></a>
                    </div>
                </div>
            </div>
        </div>
        @include('includes.footer')
    </div>
    <script>
        document.getElementById("hamburger").onclick = function toggleMenu() {
            const navToggle = document.getElementsByClassName("toggle");
            for (let i = 0; i < navToggle.length; i++) {
                navToggle.item(i).classList.toggle("hidden");
            }
        };
    </script>
</body>

</html>
