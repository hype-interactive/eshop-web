<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{-- <link rel="icon" type="image/svg+xml" href="/assets/logo.png" /> --}}
  <link rel="icon" type="image/svg+xml" href="storage/system/logo.png" />


    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="h-screen md:grid grid-cols-2">
    <div class=" w-full bg-black hidden md:block">
        <img src="https://res.cloudinary.com/do6zpq1dx/image/upload/v1697571247/KanisaOnline/xbospt43muekpfgjfdae.png" alt="" class="h-screen w-full z-10 object-cover ">
        <div class="z-20 absolute top-5 left-5">
            <img src="{{asset('assets/logo.png')}}" alt="" class="h-14">
        </div>
    </div>
    <div class="h-screen flex flex-col justify-between bg-[url('https://res.cloudinary.com/do6zpq1dx/image/upload/v1697571247/KanisaOnline/xbospt43muekpfgjfdae.png')] md:bg-none bg-cover bg-no-repeat w-full">
        <div>
            {{ $slot }}
        </div>
        <div class="w-full h-[56px] px-5 lg:px-10 space-y-5 bg-black lg:bg-transparent bg-opacity-50">
            <div>
                <hr class="" />
            </div>
            <div>
                <span class="text-white md:text-description text-sm">2024 © eshop Online</span>
            </div>
        </div>
    </div>
</body>

</html>
