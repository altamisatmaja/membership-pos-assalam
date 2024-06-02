@extends('includes.app')

@section('title', 'Assalam | Beranda')

@section('content')
    @if (session('error'))
        <div id="Message"
            class="fixed top-0 left-0 w-full h-full flex justify-center items-center backdrop-blur-md bg-white/30 bg-opacity-50 z-50">
            <div class="relative w-full max-w-screen-md rounded-lg bg-red-500 px-4 py-4 text-base text-white"
                data-dismissible="alert">
                <div class="absolute top-4 left-4">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#ffffff"><path d="M480-120q-33 0-56.5-23.5T400-200q0-33 23.5-56.5T480-280q33 0 56.5 23.5T560-200q0 33-23.5 56.5T480-120Zm-80-240v-480h160v480H400Z"/></svg>
                </div>
                <div class="ml-8 mr-12">
                    <h5 class="block font-sans text-xl font-semibold leading-snug tracking-normal text-white antialiased">
                        Gagal
                    </h5>
                    <p class="mt-2 block font-sans text-base font-normal leading-relaxed text-white antialiased">
                        {{ session('error') }}
                    </p>
                </div>
                <div data-dismissible-target="alert" data-ripple-dark="true" id="successMessage"
                    class="absolute top-3 right-3 w-max rounded-lg transition-all hover:bg-white hover:bg-opacity-20">
                    <div role="button" class="w-max rounded-lg p-1">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12">
                            </path>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    @endif
    <div>
        <div class="relative w-full" id="home">
            <div class="relative w-full aspect-w-16 aspect-h-9">
                <img src="https://assalaammarket.com/wp-content/uploads/2023/01/Template-Slider-1.jpg"
                    alt="Background Image" class="object-cover object-center w-full h-full" />
            </div>
        </div>

        <div class="w-full flex flex-col justify-center items-center gap-y-3 mt-10">
            <h2 class="text-6xl font-semibold text-black">-- PROMO --</h2>
            <p class="text-3xl font-semibold text-green-800">ASSALAM HYPERMARKET</p>
        </div>
        <div class=" flex items-center justify-center py-16">
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
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var successMessage = document.getElementById('successMessage');
            var Message = document.getElementById('Message');
            successMessage.addEventListener('click', function() {
                Message.style.display = 'none';
            });
        });
    </script>
@endsection
@push('js')
@endpush
