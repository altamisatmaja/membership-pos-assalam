@extends('includes.app')

@section('title', 'Assalam | Daftar')

@section('content')
    <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
        <div class="p-6 space-y-4 md:space-y-6 sm:p-8 justify-center">
            <div class="flex justify-center mb-6">
                <a href="/" class="flex items-center text-2xl font-semibold text-gray-900">
                    <img class="h-8 mr-2" src="{{ asset('images/logoassalam.png') }}" alt="logo">
                    <img class="h-8 mr-2" src="{{ asset('images/teksassalam.png') }}" alt="logo">
                </a>
            </div>
            <h1 class="text-xl font-bold leading-tight text-center tracking-tight text-gray-900 md:text-2xl">
                Selamat datang di Assalam Hypermarket
            </h1>

            <x-auth-validation-errors class="mb-4" :errors="$errors" />

            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div>
                    <x-label for="name" :value="__('Name')" />
                    <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
                </div>

                <div class="mt-4">
                    <x-label for="email" :value="__('Email')" />
                    <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
                </div>

                <div class="mt-4">
                    <x-label for="password" :value="__('Password')" />
                    <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
                </div>

                <div class="mt-4">
                    <x-label for="password_confirmation" :value="__('Confirm Password')" />
                    <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required />
                </div>

                <div class="flex items-center justify-end mt-4">
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                        {{ __('Sudah punya akun?') }}
                    </a>

                    <x-button class="ml-4 bg-green-700">
                        {{ __('Daftar') }}
                    </x-button>
                </div>
            </form>
        </div>
    </div>
@endsection

@push('js')
@endpush
