@extends('includes.app')

@section('title', 'Assalam | Login')

@section('content')
    <section class="bg-white">
        <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
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
            <div class="w-full bg-white rounded-lg shadow  md:mt-0 sm:max-w-md xl:p-0 ">
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                    <a href="#"
                        class="flex justify-center items-center mb-6 text-2xl font-semibold text-gray-900 ">
                        <div class="flex flex-col justify-center items-center">
                            <img class="w-2/3 mr-2" src="{{ asset('images/teksassalam.png') }}" alt="logo-teks">
                            <img class="w-1/3 mr-2" src="{{ asset('images/logoassalam.png') }}" alt="logo-assalam">
                        </div>
                    </a>
                    <h1 class="text-xl font-bold leading-tight text-center tracking-tight text-gray-900 md:text-2xl ">
                        Selamat datang di Assalam Hypermarket
                    </h1>
                    <form class="space-y-4 md:space-y-6" action="{{ route('customer.login.store') }}" method="POST">
                        @csrf
                        <div>
                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 ">Email</label>
                            <input type="email" name="email" id="email"
                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5   "
                                placeholder="name@company.com" required="">
                        </div>
                        <div>
                            <label for="password" class="block mb-2 text-sm font-medium text-gray-900 ">Password</label>
                            <input type="password" name="password" id="password" placeholder="••••••••"
                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5   "
                                required="">
                        </div>
                        <div class="flex items-center justify-between">
                            <div class="flex items-start">
                                <div class="flex items-center h-5">
                                    <input
                                        class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300  ">
                                </div>
                                <div class="ml-3 text-sm">
                                    <label for="remember" class="text-gray-500">Ingat password</label>
                                </div>
                            </div>
                            <a href="{{ route('password.request') }}" class="text-sm font-medium text-primary-600 hover:underline ">Lupa
                                akun?</a>
                        </div>
                        <button type="submit"
                            class="w-full text-white bg-green-600 hover:bg-green-700 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center ">Login</button>
                        <p class="text-sm font-light text-gray-500 ">
                            Belum punya akun? <a href="{{ route('register') }}"
                                class="font-medium text-green-600 hover:underline ">Daftar</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </section>
    @endsection
    @push('js')
    @endpush
