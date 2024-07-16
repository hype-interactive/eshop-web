<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>eShops</title>
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    @vite('resources/css/app.css')
    <script src="//unpkg.com/alpinejs" defer></script>

    <link href="{{ asset('assets/front-end.css') }}" rel="stylesheet" />
    <script src="{{ asset('assets/front-end.js') }}">  </script>


</head>
<body class="antialiased">
    <div id="app">

        <div class="bg-white">
            <!-- Navigation Bar -->



 <livewire:front-end.nav-bar />



@yield('front-end-main')



<livewire:front-end.upper-footer />

<livewire:front-end.footer />


    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
