<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="icon" type="image/svg+xml" href="{{ asset('images/logoassalam.png') }}" />
    <script defer src="{{ asset('js/alpine.min.js') }}"></script>
    <title>@yield('title')</title>
</head>

<body>
    <div>
        @include('admin.layouts.navbar')
        <div class="flex overflow-hidden bg-white pt-16">
            @include('admin.layouts.sidebar')
            <div class="bg-gray-900 opacity-50 hidden fixed inset-0 z-10" id="sidebarBackdrop"></div>
            <div id="main-content" class="h-full w-full bg-gray-50 relative overflow-y-auto lg:ml-64">
                <main>
                    @yield('content')
                </main>
            </div>
        </div>
        <script async defer src="https://buttons.github.io/buttons.js"></script>
        <script src="https://demo.themesberg.com/windster/app.bundle.js"></script>
    </div>
    @stack('js')
</body>

</html>




