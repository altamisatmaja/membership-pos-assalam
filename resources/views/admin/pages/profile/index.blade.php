@extends('admin.layouts.app')

@section('title', 'Assalam | Ubah password')

@section('content')
    <div class="pt-6 px-4">
        <section class="container px-4 mx-auto">
            @if (session('success'))
                <div
                    class='flex items-center text-white w-full sm:max-w-md bg-green-400 shadow-md rounded-lg overflow-hidden mx-auto mb-7'>
                    <div class='w-10 border-r px-2'>
                        <svg class="flex-shrink-0 w-6 h-6 text-white transition duration-75 group-hover:text-white"
                            xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24">
                            <path clip-rule="evenodd" fill-rule="white" fill="white"
                                d="M109-120q-11 0-20-5.5T75-140q-5-9-5.5-19.5T75-180l370-640q6-10 15.5-15t19.5-5q10 0 19.5 5t15.5 15l370 640q6 10 5.5 20.5T885-140q-5 9-14 14.5t-20 5.5H109Zm69-80h604L480-720 178-200Zm302-40q17 0 28.5-11.5T520-280q0-17-11.5-28.5T480-320q-17 0-28.5 11.5T440-280q0 17 11.5 28.5T480-240Zm0-120q17 0 28.5-11.5T520-400v-120q0-17-11.5-28.5T480-560q-17 0-28.5 11.5T440-520v120q0 17 11.5 28.5T480-360Zm0-100Z" />
                        </svg>
                    </div>

                    <div class='flex items-center px-2 py-3'>
                        <div class='mx-3'>
                            <p>{{ session('success') }}</p>
                        </div>
                    </div>
                </div>
            @endif
            @if (session('status'))
                <div
                    class='flex items-center text-white w-full sm:max-w-md bg-red-400 shadow-md rounded-lg overflow-hidden mx-auto mb-7'>
                    <div class='w-10 border-r px-2'>
                        <svg class="flex-shrink-0 w-6 h-6 text-white transition duration-75 group-hover:text-white"
                            xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24">
                            <path clip-rule="evenodd" fill-rule="white" fill="white"
                                d="M109-120q-11 0-20-5.5T75-140q-5-9-5.5-19.5T75-180l370-640q6-10 15.5-15t19.5-5q10 0 19.5 5t15.5 15l370 640q6 10 5.5 20.5T885-140q-5 9-14 14.5t-20 5.5H109Zm69-80h604L480-720 178-200Zm302-40q17 0 28.5-11.5T520-280q0-17-11.5-28.5T480-320q-17 0-28.5 11.5T440-280q0 17 11.5 28.5T480-240Zm0-120q17 0 28.5-11.5T520-400v-120q0-17-11.5-28.5T480-560q-17 0-28.5 11.5T440-520v120q0 17 11.5 28.5T480-360Zm0-100Z" />
                        </svg>
                    </div>

                    <div class='flex items-center px-2 py-3'>
                        <div class='mx-3'>
                            <p>{{ session('status') }}</p>
                        </div>
                    </div>
                </div>
            @endif
            @if (session('error'))
                <div
                    class='flex items-center text-white w-full sm:max-w-md bg-red-400 shadow-md rounded-lg overflow-hidden mx-auto mb-7'>
                    <div class='w-10 border-r px-2'>
                        <svg class="flex-shrink-0 w-6 h-6 text-white transition duration-75 group-hover:text-white"
                            xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24">
                            <path clip-rule="evenodd" fill-rule="white" fill="white"
                                d="M109-120q-11 0-20-5.5T75-140q-5-9-5.5-19.5T75-180l370-640q6-10 15.5-15t19.5-5q10 0 19.5 5t15.5 15l370 640q6 10 5.5 20.5T885-140q-5 9-14 14.5t-20 5.5H109Zm69-80h604L480-720 178-200Zm302-40q17 0 28.5-11.5T520-280q0-17-11.5-28.5T480-320q-17 0-28.5 11.5T440-280q0 17 11.5 28.5T480-240Zm0-120q17 0 28.5-11.5T520-400v-120q0-17-11.5-28.5T480-560q-17 0-28.5 11.5T440-520v120q0 17 11.5 28.5T480-360Zm0-100Z" />
                        </svg>
                    </div>

                    <div class='flex items-center px-2 py-3'>
                        <div class='mx-3'>
                            <p>{{ session('error') }}</p>
                        </div>
                    </div>
                </div>
            @endif
            <form action="{{ route('admin.profile.update') }}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="w-full">
                    <div class="mb-5">
                        <label for="ubah_password" class="mb-3 block text-xl font-semibold text-gray-800">
                            Ubah Password
                            {{-- <div class="">
                                <span class="font-medium text-base text-gray-600">Silahkan diisi sesuai nomor pas anda
                                    apabila sudah terdaftar. Apabila belum
                                    memiliki nomor pas, silahkan dikosongkan</span>
                            </div> --}}
                        </label>
                    </div>
                </div>
                <div class="-mx-3 flex flex-wrap">
                    <div class="w-full px-3 sm:w-1/2">
                        <div class="mb-5">
                            <label for="password" class="mb-3 block text-lg font-semibold text-gray-800">
                                Password
                            </label>
                            <input type="password" name="password" id="password" placeholder="Konfirmasi password"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                            @error('password')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="w-full px-3 sm:w-1/2">
                        <div class="mb-5">
                            <label for="password_confirmation" class="mb-3 block text-lg font-semibold text-gray-800">
                                Konfirmasi password
                            </label>
                            <input type="password" name="password_confirmation" id="password_confirmation"
                                placeholder="Masukkan konfirmasi password anda"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                            @error('password_confirmation')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="w-full mx-auto justify-center items-center">
                    <button type="submit"
                        class="w-full hover:shadow-form rounded-md bg-green-800 py-3 px-8 text-center text-base font-semibold text-white outline-none">
                        Ubah
                    </button>
                </div>
            </form>
        </section>
    </div>
    @push('js')
    @endpush
@endsection
