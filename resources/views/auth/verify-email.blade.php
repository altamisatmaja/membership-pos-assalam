@extends('includes.app')

@section('title', 'Assalam | Verifikasi Email')

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
                {{ __('Terima kasih sudah mendaftar, tapi sebelum itu, harap verifikasi via email terlebih dahulu ya!') }}
            </div>

            @if (session('status') == 'verification-link-sent')
                <div class="mb-4 font-medium text-sm text-green-600">
                    {{ __('A new verification link has been sent to the email address you provided during registration.') }}
                </div>
            @endif

            <div class="mt-4 flex items-center justify-between">
                <form method="POST" action="{{ route('verification.send') }}">
                    @csrf

                    <div>
                        <x-button class="bg-green-700">
                            {{ __('Kirim ulang verifikasi') }}
                        </x-button>
                    </div>
                </form>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900">
                        {{ __('Log Out') }}
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection
@push('js')
@endpush
