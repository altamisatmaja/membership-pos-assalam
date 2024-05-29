@extends('includes.app')

@section('title', 'Assalam | Membership')

@section('content')
    <div class="flex items-center justify-center p-12">
        <div class="mx-auto w-full">
            <div class="flex justify-center mb-8">
                <img src="{{ asset('images/kartupas.png') }}" alt="Logo" class="">
            </div>
            <div class="flex flex-col justify-center">
                <h1 class="text-2xl uppercase font-semibold text-center text-gray-800 mt-8 mb-6">apa itu kartu member pas?
                </h1>
                <p class="text-md text-lg font-medium text-gray-600">Kartu Member PAS atau Kartu Member Pelanggan Assalaam
                    Hypermarket, adalah kartu member khusus untuk pelanggan Assalaam Hypermarket yang bisa digunakan untuk
                    berbelanja dengan beberapa benefit yang bisa didapatkan.
                </p>
                <h1 class="text-2xl uppercase font-semibold text-center text-gray-800 mt-8 mb-6">KEUNTUNGAN BAGI CUSTOMER
                    DENGAN
                    KARTU MEMBER PAS
                </h1>
                <p class="text-md text-lg font-medium text-gray-600">Customer apabila berbelanja menggunakan Kartu PAS akan
                    mendapatkan keuntungan atau benefit seperti :
                </p>
                <div class="mt-8 px-10 text-gray-600">
                    <ul class="list-decimal">
                        <li>Reward Point:</li>
                        <ul class="list-disc px-10 pt-5">
                            <li>Setiap customer yang berbelanja menggunakan Kartu PAS minimal Rp. 10.000,- akan mendapatkan
                                1 point, dan berlaku kelipatan.</li>
                            <li>Setiap point yang sudah terkumpul dapat ditukarkan dengan hadiah menarik seperti <span
                                    class="font-bold">voucher belanja</span> dan berbagai hadiah lainnya.</li>
                        </ul>
                    </ul>
                </div>
                <h1 class="text-2xl uppercase font-semibold text-center text-gray-800 mt-8 mb-6">KEUNTUNGAN BAGI CUSTOMER
                    DENGAN
                    CARA MENDAPATKAN KARTU MEMBER PAS?
                </h1>
                <p class="text-center text-md text-lg font-medium text-gray-600">Pelanggan Klik Saja Tombol Daftar Dibawah
                    ini
                    dan isi data dengan benar
                </p>
                <div class="flex justify-center my-3">
                    <a href="{{ route('pages.membership') }}"
                        class="w-1/6  items-center flex px-5 justify-center bg-green-800 hover:bg-white hover:text-green-800 text-center ring-1 ring-green-800 text-white text-xl py-3 rounded-lg transition-all duration-150">Register</a>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('js')
@endpush
