@extends('admin.layouts.app')

@section('title', 'Assalam | Dashboard')

@section('content')
    <div class="pt-6 px-4">
        <div class="mt-4 w-full grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-4">
            <div class="bg-white shadow rounded-lg p-4 sm:p-6 xl:p-8 ">
                <div class="flex items-center">
                    <div class="flex-shrink-0">
                        <span class="text-2xl sm:text-3xl leading-none font-bold text-gray-900">{{ $total_member }}</span>
                        <h3 class="text-base font-normal text-gray-500">Total member</h3>
                    </div>
                    <div class="ml-5 w-0 flex items-center justify-end flex-1 text-green-500 text-base font-bold">
                        14.6%
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M5.293 7.707a1 1 0 010-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L11 5.414V17a1 1 0 11-2 0V5.414L6.707 7.707a1 1 0 01-1.414 0z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </div>
                </div>
            </div>
            <div class="bg-white shadow rounded-lg p-4 sm:p-6 xl:p-8 ">
                <div class="flex items-center">
                    <div class="flex-shrink-0">
                        <span class="text-2xl sm:text-3xl leading-none font-bold text-gray-900">{{ $member_baru }}</span>
                        <h3 class="text-base font-normal text-gray-500">Member baru</h3>
                    </div>
                    <div class="ml-5 w-0 flex items-center justify-end flex-1 text-green-500 text-base font-bold">
                        32.9%
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M5.293 7.707a1 1 0 010-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L11 5.414V17a1 1 0 11-2 0V5.414L6.707 7.707a1 1 0 01-1.414 0z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </div>
                </div>
            </div>
            <div class="bg-white shadow rounded-lg p-4 sm:p-6 xl:p-8 ">
                <div class="flex items-center">
                    <div class="flex-shrink-0">
                        <span class="text-2xl sm:text-3xl leading-none font-bold text-gray-900">{{ $member_tidak_aktif }}</span>
                        <h3 class="text-base font-normal text-gray-500">Member tidak aktif</h3>
                    </div>
                    <div class="ml-5 w-0 flex items-center justify-end flex-1 text-red-500 text-base font-bold">
                        -2.7%
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M14.707 12.293a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 111.414-1.414L9 14.586V3a1 1 0 012 0v11.586l2.293-2.293a1 1 0 011.414 0z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
        <div class="grid grid-cols-1 2xl:grid-cols-2 xl:gap-4 my-4">
            <div class="bg-white h-full">
                <div class="flex items-center justify-between mb-4">
                    <h3 class="text-xl font-bold leading-none text-gray-900">{{ $total_member < 10 ? $total_member : 10 }} Member terbaru</h3>
                    <a href="{{ route('admin.dashboard.member') }}"
                        class="text-sm font-medium text-cyan-600 hover:bg-gray-100 rounded-lg inline-flex items-center p-2">
                        Lihat semua
                    </a>
                </div>
                <section class="container">
                    <div class="flex flex-col">
                        <div class="overflow-x-auto">
                            <div class="inline-block min-w-full align-middle">
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
                                                    Email
                                                </th>

                                                <th scope="col"
                                                    class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500">
                                                    Alamat
                                                </th>

                                                <th scope="col"
                                                    class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500">
                                                    Status
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody class="bg-white divide-y divide-gray-200 ">
                                            @foreach ($members as $member)
                                                <tr>
                                                    <td
                                                        class="px-4 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                                                        <div class="inline-flex items-center gap-x-3">
                                                            <span>{{ $loop->iteration }}</span>
                                                        </div>
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 whitespace-nowrap">
                                                        {{ $member->nomor_pas }}</td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 whitespace-nowrap">
                                                        {{ $member->nama_member }}</td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 whitespace-nowrap">
                                                        {{ $member->no_hp }}</td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 whitespace-nowrap">
                                                        {{ optional($member->user)->email }}</td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 whitespace-nowrap">
                                                        {{ $member->provinsi }}, {{ $member->kabupaten }},
                                                        {{ $member->kecamatan }},
                                                        {{ $member->kelurahan }}, {{ $member->rt_rw }}</td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 whitespace-nowrap">
                                                        {{ $member->status }}</td>
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
        </div>
    </div>
    @push('js')
    @endpush
@endsection
