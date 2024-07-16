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
<body class="bg-gray-100 font-sans h-screen flex justify-center items-center">
    <div class="w-full max-w-full bg-white shadow-xl flex rounded-lg overflow-hidden h-full">
        <div class="w-1/2 h-full" style="background-image:  url('/loginSlider/slider.png') ; background-size: cover; background-position: center;  ">
            <div class="h-full flex flex-col justify-end p-8 text-white bg-black bg-opacity-40">
                <div>
                    <h2 class="text-4xl font-bold">Please sign in to securely access your account.</h2>
                    <p class="mt-4">Welcome back! We're thrilled to have you return to our platform. Your presence means a lot to us.</p>
                </div>
            </div>
        </div>
        <div class="w-1/2 flex flex-col mycontent  ml-12 px-4  py-12 px-16">
            <div class="flex flex-col  mb-8">
                <img src="{{ asset('/loginSlider/icon.png') }}" alt="Logo" class="h-12 w-24 mb-4">
                <h1 class="text-4xl font-semibold text-gray-700 ">Sign in to access  <br> <span class="font-serif italic">your account</span></h1>
            </div>
            <div class="flex-grow flex  ">


                @yield('guest-content')

            </div>
        </div>
    </div>
    @livewireScripts
    @vite('resources/js/app.js')
</body>
</html>
