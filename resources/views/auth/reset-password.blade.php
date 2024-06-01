@extends('includes.app')

@section('title', 'Assalam | Reset password')

@section('content')
    <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen p-4">
        <div class="w-full bg-white rounded-lg shadow  md:mt-0 sm:max-w-md p-5">
            <a href="#" class="flex justify-center flex-wrap items-center mb-6 text-2xl font-semibold text-gray-900 ">
                <div class="flex  justify-center items-center">
                    <img class="h-16 mr-2" src="{{ asset('images/logoassalam.png') }}" alt="logo-assalam">
                    <img class="h-16 mr-2" src="{{ asset('images/teksassalam.png') }}" alt="logo-teks">
                </div>
            </a>

            <!-- Validation Errors -->
            <x-auth-validation-errors class="mb-4" :errors="$errors" />

            <form method="POST" action="{{ route('password.update') }}">
                @csrf

                <!-- Password Reset Token -->
                <input type="hidden" name="token" value="{{ $request->route('token') }}">

                <!-- Email Address -->
                <div>
                    <x-label for="email" :value="__('Email')" />

                    <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email', $request->email)"
                        required autofocus />
                </div>

                <!-- Password -->
                <div class="mt-4">
                    <x-label for="password" :value="__('Password')" />

                    <x-input id="password" class="block mt-1 w-full" type="password" name="password" required />
                </div>

                <!-- Confirm Password -->
                <div class="mt-4">
                    <x-label for="password_confirmation" :value="__('Confirm Password')" />

                    <x-input id="password_confirmation" class="block mt-1 w-full" type="password"
                        name="password_confirmation" required />
                </div>

                <div class="flex items-center justify-end mt-4">
                    <x-button class="bg-green-700">
                        {{ __('Reset Password') }}
                    </x-button>
                </div>
            </form>
        </div>
    </div>
@endsection
@push('js')
@endpush
