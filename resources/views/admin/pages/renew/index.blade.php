@extends('admin.layouts.app')

@section('title', 'Assalam | Aktivasi')

@section('content')
    @if (session('success'))
        <div id="Message"
            class="fixed top-0 left-0 w-full h-full flex justify-center items-center backdrop-blur-md bg-white/30 bg-opacity-50 z-50">
            <div class="relative w-full max-w-screen-md rounded-lg bg-green-500 px-4 py-4 text-base text-white"
                data-dismissible="alert">
                <div class="absolute top-4 left-4">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"
                        class="mt-px h-6 w-6">
                        <path fill-rule="evenodd"
                            d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm13.36-1.814a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z"
                            clip-rule="evenodd"></path>
                    </svg>
                </div>
                <div class="ml-8 mr-12">
                    <h5 class="block font-sans text-xl font-semibold leading-snug tracking-normal text-white antialiased">
                        Berhasil
                    </h5>
                    <p class="mt-2 block font-sans text-base font-normal leading-relaxed text-white antialiased">
                        {{ session('success') }}
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
    @if (session('error'))
        <div id="Message"
            class="fixed top-0 left-0 w-full h-full flex justify-center items-center backdrop-blur-md bg-white/30 bg-opacity-50 z-50">
            <div class="relative w-full max-w-screen-md rounded-lg bg-red-500 px-4 py-4 text-base text-white"
                data-dismissible="alert">
                <div class="absolute top-4 left-4">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"
                        class="mt-px h-6 w-6">
                        <path fill-rule="evenodd"
                            d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm13.36-1.814a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z"
                            clip-rule="evenodd"></path>
                    </svg>
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

    <div class="pt-6 px-4">
        <section class="container px-4 mx-auto">
            <div class="flex flex-col">
                <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                        <div class="overflow-hidden border border-gray-200  md:rounded-lg">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50 ">
                                    <tr>
                                        <th scope="col"
                                            class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500">
                                            <div class="flex items-center gap-x-3">
                                                <button class="flex items-center gap-x-2">
                                                    <span>No</span>
                                                </button>
                                            </div>
                                        </th>

                                        <th scope="col"
                                            class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500">
                                            Nomor PAS
                                        </th>

                                        <th scope="col"
                                            class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500">
                                            Nama Lengkap
                                        </th>

                                        <th scope="col"
                                            class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500">
                                            Kontak
                                        </th>

                                        <th scope="col"
                                            class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500">
                                            Masa Aktif
                                        </th>

                                        <th scope="col"
                                            class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500">
                                            Alamat
                                        </th>

                                        <th scope="col"
                                            class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500">
                                            Status
                                        </th>

                                        <th scope="col"
                                            class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500">
                                            Aksi
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200 ">
                                    @foreach ($members as $member)
                                        <tr>
                                            <td class="px-4 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                                                <div class="inline-flex items-center gap-x-3">
                                                    <span>{{ $loop->iteration }}</span>
                                                </div>
                                            </td>
                                            <td class="px-4 py-4 text-sm text-gray-500 whitespace-nowrap">
                                                {{ $member->nomor_pas }}</td>
                                            <td class="px-4 py-4 text-sm text-gray-500 ">
                                                {{ $member->nama_member }}</td>
                                            <td class="px-4 py-4 text-sm text-gray-500 whitespace-nowrap">
                                                {{ $member->no_hp }}</td>
                                            <td class="px-4 py-4 text-sm text-gray-500 whitespace-nowrap">
                                                {{ \Carbon\Carbon::parse($member->masa_aktif)->format('d-m-Y') }}</td>
                                            <td class="px-4 py-4 text-sm text-gray-500">
                                                {{ $member->provinsi }}, {{ $member->kabupaten }}, {{ $member->kecamatan }},
                                                {{ $member->kelurahan }}, {{ $member->rt_rw }}</td>
                                            <td class="px-4 py-4 text-sm text-gray-500 whitespace-nowrap">
                                                <p
                                                    class="px-4 py-2 rounded-lg text-white text-center {{ $member->status == 'Aktif' ? 'bg-green-500' : 'bg-red-500' }}">
                                                    {{ $member->status }}
                                                </p>
                                            </td>
                                            <td class="px-4 py-4 text-sm text-gray-500 whitespace-nowrap">
                                                <a href="{{ route('admin.dashboard.activate.show', $member->id) }}">
                                                    <p class="bg-green-500 px-4 py-2 rounded-lg text-white text-center">
                                                        Aktivasi</p>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>

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
    @push('js')
    @endpush
@endsection
