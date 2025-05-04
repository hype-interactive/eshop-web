<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" type="image/svg+xml" href="storage/system/logo.png" />

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles

</head>

<body class="min-h-screen md:h-screen md:grid md:grid-cols-2">
    <!-- Left Side - Background Image (Desktop Only) -->
    <div class="hidden md:block relative bg-black">
        <img src="https://res.cloudinary.com/do6zpq1dx/image/upload/v1697571247/KanisaOnline/xbospt43muekpfgjfdae.png" 
             alt="" 
             class="h-full w-full object-cover">
        <div class="absolute top-4 left-4 lg:top-5 lg:left-5">
            <img src="{{asset('assets/logo.png')}}" alt="" class="h-10 sm:h-12 lg:h-14">
        </div>
    </div>

    <!-- Right Side - Content -->
    <div class="min-h-screen flex flex-col justify-between bg-[url('https://res.cloudinary.com/do6zpq1dx/image/upload/v1697571247/KanisaOnline/xbospt43muekpfgjfdae.png')] md:bg-none bg-cover bg-center bg-no-repeat w-full relative">
        
        <!-- Mobile Logo -->
        <div class="md:hidden absolute top-4 left-4 z-20">
            <img src="{{asset('assets/logo.png')}}" alt="" class="h-10">
        </div>

        <!-- Main Content -->
        <div class="flex-grow">
            {{ $slot }}
        </div>

        <!-- Footer -->
        <footer class="w-full py-4 px-4 sm:px-6 lg:px-10 bg-black bg-opacity-50 md:bg-transparent">
            <hr class="border-gray-400 mb-3" />
            <span class="text-white text-xs sm:text-sm md:text-description">
                2024 © eshop Online
            </span>
        </footer>
    </div>
    @livewireScripts

</body>

</html>