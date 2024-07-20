<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>eShops</title>
    @vite('resources/css/app.css')
    <script src="//unpkg.com/alpinejs" defer></script>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.css"  rel="stylesheet" />
    <link href="{{ asset('css/front-end.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    {{-- <script src="{{ asset('css/front-end.js') }}">  </script> --}}
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.js"></script>
</head>
<body class="antialiased">
@include('shared.nav_bar')
    @yield('front-end-main')
@include('shared.upper_footer')
@include('shared.footer')
</body>
</html>
