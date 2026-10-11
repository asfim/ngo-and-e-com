<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
    <title>@yield('title', 'Witness Foundation — Peace Begins With Me')</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fraunces:ital,opsz,wght@0,9..144,300;0,9..144,400;0,9..144,500;0,9..144,600;0,9..144,700;1,9..144,400;1,9..144,500&family=IBM+Plex+Sans:wght@400;500;600;700&family=Noto+Sans+Bengali:wght@400;500;600&display=swap" rel="stylesheet">

    <!-- Frontend Stylesheet -->
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
    @stack('styles')
</head>
<body>

    {{-- Main Navigation Header --}}
    @include('frontend.partials.header')

    {{-- Mobile Navigation Drawer --}}
    @include('frontend.partials.mobile-drawer')

    {{-- Page Content --}}
    <main id="main-content">
        @yield('content')
    </main>

    {{-- Footer --}}
    @include('frontend.partials.footer')

    <!-- Frontend Scripts -->
    <script src="{{ asset('frontend/js/main.js') }}"></script>
    <script src="{{ asset('frontend/js/pages.js') }}"></script>
    @stack('scripts')
</body>
</html>
