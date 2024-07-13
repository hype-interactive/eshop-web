<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    @vite('resources/css/app.css')

    <style>

 .mycontent{
    margin-left: 4%;
 }

</style>

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
                <form action="/register" method="POST" class="w-full space-y-6">
                    @csrf

                    <div>
                        <label for="phone_number" class="block text-sm font-medium text-gray-700">Phone Number</label>
                        <input type="text" id="phone_number"  name="phone_number" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg  focus:ring-blue-500 focus:border-blue-500 block w-full p-3 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter Your  Phone Number " required />

                    </div>
                    <div>
                        <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                        <input type="password" id="password"  name="password" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg  focus:ring-blue-500 focus:border-blue-500 block w-full p-3 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter Your password " required />

                    </div>
                    <div class="flex justify-between">
                      <div class="flex p-2">
                        <input type="checkbox" id="remember_me" name="remember_me" class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                        <label for="remember_me" class="ml-2 block text-sm text-gray-900">Remember Password</label>
                      </div>
                        <div class="text-sm text-center">
                             <a href="/login" class="text-blue-600 hover:text-blue-500" style="color: #F6AE42; " > Forget Password ? </a>
                        </div>


                    </div>

                    <div>
                        <button type="submit" class="w-full  text-white py-2 rounded-md shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500" style="background-color: #1c70cd"> Login </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @vite('resources/js/app.js')
</body>
</html>
