@extends('includes.app')

@section('title', 'Assalam | Lupa password')

@section('content')
        <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen p-4">
            <div class="w-full bg-white rounded-lg shadow  md:mt-0 sm:max-w-md p-5">
                <a href="#" class="flex justify-center flex-wrap items-center mb-6 text-2xl font-semibold text-gray-900 ">
                    <div class="flex  justify-center items-center">
                        <img class="h-16 mr-2" src="{{ asset('images/logoassalam.png') }}" alt="logo-assalam">
                        <img class="h-16 mr-2" src="{{ asset('images/teksassalam.png') }}" alt="logo-teks">
                    </div>
                </a>

                <div class="mb-4 text-sm text-gray-600">
                    {{ __('Lupa password anda? tidak masalah, masukkan email anda dan nantinya akan kami beri email pemulihan akun.') }}
                </div>

                <!-- Session Status -->
                <x-auth-session-status class="mb-4" :status="session('status')" />

                <!-- Validation Errors -->
                <x-auth-validation-errors class="mb-4" :errors="$errors" />

                <form method="POST" action="{{ route('password.email') }}">
                    @csrf

                    <!-- Email Address -->
                    <div>
                        <x-label for="email" :value="__('Email')" />

                        <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                            required autofocus />
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        <x-button class="bg-green-700">
                            {{ __('Kirim email lupa password') }}
                        </x-button>
                    </div>
                </form>
            </div>
        </div>
@endsection
@push('js')
@endpush
