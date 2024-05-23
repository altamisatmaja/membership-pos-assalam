<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}"></script>
</head>

<body class="antialiased">
    <div class="min-h-screen bg-gray-50/50">
        @include('pelanggan.layouts.sidebar')
        <div class="p-4 xl:ml-80">
            @include('pelanggan.layouts.navbar')
            <div class="mt-5">
                @yield('content')
            </div>
        </div>
    </div>
</body>
@stack('js')
</html>
