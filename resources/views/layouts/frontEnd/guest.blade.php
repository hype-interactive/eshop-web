<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eshop</title>
    @vite('resources/css/app.css')
    <link href="{{ asset('assets/customer-guest.css') }}" rel="stylesheet" />
    @livewireStyles
</head>
<body class="bg-gray-100 font-sans min-h-screen flex justify-center items-center">
    <div class="w-full max-w-full bg-white shadow-xl flex flex-col md:flex-row overflow-hidden min-h-screen">
        
        <!-- Left Section - Background Image -->
        <div class="hidden md:block md:w-1/2 h-screen" 
             style="background-image: url('/loginSlider/slider.png'); background-size: cover; background-position: center;">
            <div class="h-full flex flex-col justify-end p-4 sm:p-6 lg:p-8 text-white bg-black bg-opacity-40">
                <div>
                    <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold">
                        Please sign in to securely access your account.
                    </h2>
                    <p class="mt-2 md:mt-4 text-sm md:text-base">
                        Welcome back! We're thrilled to have you return to our platform. Your presence means a lot to us.
                    </p>
                </div>
            </div>
        </div>
        
        <!-- Right Section - Form -->
        <div class="w-full md:w-1/2 flex flex-col p-6 sm:p-8 md:p-12 lg:p-20">
            <div class="flex flex-col mb-6 md:mb-8">
                <img src="{{ asset('/loginSlider/icon.png') }}" alt="Logo" class="h-10 w-20 sm:h-12 sm:w-24 mb-4">
                <h1 class="text-2xl sm:text-3xl md:text-4xl font-semibold text-gray-700">
                    Sign in to access<br>
                    <span class="font-serif italic">your account</span>
                </h1>
            </div>
            
            <!-- Mobile Background Image -->
            <div class="md:hidden h-40 mb-6 rounded-lg overflow-hidden" 
                 style="background-image: url('/loginSlider/slider.png'); background-size: cover; background-position: center;">
                <div class="h-full flex flex-col justify-end p-4 text-white bg-black bg-opacity-40">
                    <h2 class="text-xl font-bold">Welcome Back!</h2>
                    <p class="text-sm">Sign in to access your account.</p>
                </div>
            </div>
            
            <div class="flex-grow flex">
                @yield('guest-content')
            </div>
        </div>
    </div>
    @livewireScripts
    @vite('resources/js/app.js')
</body>
</html>