@extends('includes.app')

@section('title', 'Assalam | Beranda')

@section('content')
    <div>
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
    </div>
@endsection
@push('js')
@endpush
