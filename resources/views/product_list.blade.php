<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>eShops</title>
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    @vite('resources/css/app.css')
    <script src="//unpkg.com/alpinejs" defer></script>


</head>
<body class="antialiased">
    <div id="app">

        <div class="bg-white">
            <!-- Navigation Bar -->






            <nav class="bg-white ">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="flex justify-between h-20 items-center">

                        <div class="flex items-center space-x-4">
                            <img class="h-16 w-auto" src="{{ asset('loginSlider/icon.png') }}" alt="eShops Logo">
                            <button type="button" class="text-blue-500 bg-gray-50 h-10 rounded-full border-none focus:outline-none focus:ring-[#3b5998]/50 font-medium text-sm px-4 py-2 text-center inline-flex items-center dark:focus:ring-[#3b5998]/55 me-4 mb-2">
                                <svg data-slot="icon" class="w-6 h-6" fill="none" stroke-width="1.5" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"></path>
                                </svg>
                                Menu
                            </button>
                        </div>

                        <form class="flex-grow flex items-center mx-4 rounded-full border border-gray-300">
                            <button id="dropdown-button" data-dropdown-toggle="dropdown" class="flex-shrink-0 z-10 inline-flex items-center py-2.5 px-4 text-sm font-medium text-center focus:ring-[#3b5998]/50 text-gray-900 bg-gray-50 border-none rounded-l-full hover:bg-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:ring-gray-700 dark:text-white" type="button">
                                All categories
                                <svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                                </svg>
                            </button>

                            <div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdown-button">
                                    <li>
                                        <button type="button" class="inline-flex w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Mockups</button>
                                    </li>
                                    <li>
                                        <button type="button" class="inline-flex w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Templates</button>
                                    </li>
                                    <li>
                                        <button type="button" class="inline-flex w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Design</button>
                                    </li>
                                    <li>
                                        <button type="button" class="inline-flex w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Logos</button>
                                    </li>
                                </ul>
                            </div>

                            <div class="relative flex-grow">
                                <input type="search" id="search-dropdown" class="block p-2.5  w-full z-20 text-sm text-gray-900 bg-gray-50 rounded-full border-none focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:placeholder-gray-400 dark:text-white dark:focus:border-blue-500" placeholder="Search ..." required />
                            </div>
                        </form>

                        <div class="flex items-center space-x-4">
                            <svg data-slot="icon" fill="none" class="w-7 h-7" stroke-width="1.5" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z"></path>
                            </svg>

                            <div class="relative">
                                <svg data-slot="icon" class="w-7 h-7" fill="none" stroke-width="1.5" stroke="blue" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 1 0-7.5 0v4.5m11.356-1.993 1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 0 1-1.12-1.243l1.264-12A1.125 1.125 0 0 1 5.513 7.5h12.974c.576 0 1.059.435 1.119 1.007ZM8.625 10.5a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm7.5 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z"></path>
                                </svg>
                                <span class="absolute top-0 right-0 inline-flex items-center justify-center px-1 py-0.5 text-xs font-bold leading-none text-red-100 bg-red-600 rounded-full">3</span>
                            </div>

                            <svg data-slot="icon" fill="none" class="w-7 h-7" stroke-width="0.2" stroke="blue" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"></path>
                            </svg>
                        </div>
                    </div>
                </div>
            </nav>






<!-- resources/views/components/product-list.blade.php -->
<div class="container mx-auto px-4 py-8">
    <div class="flex  flex-row">
        <!-- Sidebar -->
        <div class="w-1/4 pr-4 mb-8 lg:mb-0 lg:h-screen lg:sticky lg:top-0 overflow-y-auto">
            <div class="bg-white border p-6 mb-8">
                <h2 class="text-2xl border-b  font-bold mb-4">Categories</h2>
                <ul class="space-y-2 overflow-y-auto h-75">
                    <li><a href="#" class="block text-blue-600 hover:text-blue-800">All</a></li>
                    <li><a href="#" class="block text-gray-700 hover:text-blue-800">Food</a></li>
                    <li><a href="#" class="block text-gray-700 hover:text-blue-800">Cosmetics</a></li>
                    <li><a href="#" class="block text-gray-700 hover:text-blue-800">Cleaning Products</a></li>
                    <li><a href="#" class="block text-gray-700 hover:text-blue-800">Nuts</a></li>
                    <li><a href="#" class="block text-gray-700 hover:text-blue-800">Spices</a></li>
                    <li><a href="#" class="block text-gray-700 hover:text-blue-800">Handmade</a></li>
                </ul>
            </div>
            <div class="bg-white border p-6">
                <h2 class="text-2xl border-b font-bold mb-4">Price</h2>
                <div class="space-y-4">
                    <input type="number" placeholder="Lowest price" class="w-full p-3 border-none bg-gray-50 rounded-3xl ">
                    <input type="number" placeholder="Highest price" class="w-full p-3 border-none  bg-gray-50 rounded-3xl ">
                    <button class="w-full  text-white py-3 rounded-lg hover:bg-blue-700" style="background-color: #1C70CD" >Apply</button>
                </div>
            </div>
        </div>
        <!-- Main Content -->
        <div class="w-3/4">
            <div class="flex justify-between items-center mb-8">
                <h1 class="text-3xl font-bold">Products</h1>
                <div class="relative">
                    <button class=" border text-gray-700 py-2 px-4 rounded-lg flex items-center">
                        Sort By
                        <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <!-- Sort options would go here -->
                </div>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Example product card -->
                <div class="card bg-white  rounded-lg overflow-hidden  w-64 h-80">
                    <img src="{{ asset('loginSlider/image1.png') }}" alt="Bee Honey" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="font-semibold text-lg">Bee Honey</h3>
                        <div class="flex justify-between items-center">
                            <p class="text-gray-600 mt-3">Tsh 14,000</p>
                            <button class="mt-2 text-white px-4 p-1 rounded" style="background-color: #1C70CD">Add To Cart</button>
                        </div>
                    </div>
                </div>
                <!-- Repeat similar blocks for other products -->
                <div class="card bg-white  rounded-lg overflow-hidden  w-64 h-80">
                    <img src="{{ asset('loginSlider/image1.png') }}" alt="Bee Honey" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="font-semibold text-lg">Bee Honey</h3>
                        <div class="flex justify-between items-center">
                            <p class="text-gray-600 mt-3">Tsh 14,000</p>
                            <button class="mt-2 text-white px-4 p-1 rounded" style="background-color: #1C70CD">Add To Cart</button>
                        </div>
                    </div>
                </div>
                <div class="card bg-white  rounded-lg overflow-hidden  w-64 h-80">
                    <img src="{{ asset('loginSlider/image1.png') }}" alt="Bee Honey" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="font-semibold text-lg">Bee Honey</h3>
                        <div class="flex justify-between items-center">
                            <p class="text-gray-600 mt-3">Tsh 14,000</p>
                            <button class="mt-2 text-white px-4 p-1 rounded" style="background-color: #1C70CD">Add To Cart</button>
                        </div>
                    </div>
                </div>
                <div class="card bg-white  rounded-lg overflow-hidden  w-64 h-80">
                    <img src="{{ asset('loginSlider/image1.png') }}" alt="Bee Honey" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="font-semibold text-lg">Bee Honey</h3>
                        <div class="flex justify-between items-center">
                            <p class="text-gray-600 mt-3">Tsh 14,000</p>
                            <button class="mt-2 text-white px-4 p-1 rounded" style="background-color: #1C70CD">Add To Cart</button>
                        </div>
                    </div>
                </div>
                <div class="card bg-white  rounded-lg overflow-hidden  w-64 h-80">
                    <img src="{{ asset('loginSlider/image1.png') }}" alt="Bee Honey" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="font-semibold text-lg">Bee Honey</h3>
                        <div class="flex justify-between items-center">
                            <p class="text-gray-600 mt-3">Tsh 14,000</p>
                            <button class="mt-2 text-white px-4 p-1 rounded" style="background-color: #1C70CD">Add To Cart</button>
                        </div>
                    </div>
                </div>
                <div class="card bg-white  rounded-lg overflow-hidden  w-64 h-80">
                    <img src="{{ asset('loginSlider/image1.png') }}" alt="Bee Honey" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="font-semibold text-lg">Bee Honey</h3>
                        <div class="flex justify-between items-center">
                            <p class="text-gray-600 mt-3">Tsh 14,000</p>
                            <button class="mt-2 text-white px-4 p-1 rounded" style="background-color: #1C70CD">Add To Cart</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>






<!-- resources/views/components/footer.blade.php -->
<div id="fullWidthTabContent" class="border-t border-gray-200 dark:border-gray-600">
    <div class="p-4 bg-white flex justify-center items-center rounded-lg md:p-8 dark:bg-gray-800" id="stats" role="tabpanel" aria-labelledby="stats-tab">
        <dl class="grid max-w-screen-xl grid-cols-1 sm:grid-cols-5 gap-8 p-4 mx-auto text-gray-900 dark:text-white sm:p-8">

            <div class="flex flex-col items-center justify-center relative p-4">
                <div class="flex flex-col items-center text-center">
                    <img src="{{ asset('/footer/cup.png') }}" class="w-16 h-16 mb-4">
                    <dt class="mb-2 text-2xl font-bold">Free Delivery</dt>
                    <dd class="text-gray-500 dark:text-gray-400">Lorem ipsum dolor sit amet consectetur Malesuada volutpat.</dd>
                </div>
            </div>

            <div class="flex items-center justify-center">
                <div class="h-1/2 border-r-2 border-gray-200 dark:border-gray-600"></div>
            </div>

            <div class="flex flex-col items-center justify-center relative p-4">
                <div class="flex flex-col items-center text-center">
                    <img src="{{ asset('/footer/tr.png') }}" class="w-16 h-16 mb-4">
                    <dt class="mb-2 text-2xl font-extrabold">Secure payments</dt>
                    <dd class="text-gray-500 dark:text-gray-400">Lorem ipsum dolor sit amet consectetur Malesuada volutpat.</dd>
                </div>
            </div>

            <div class="flex items-center justify-center">
                <div class="h-1/2 border-r-2 border-gray-200 dark:border-gray-600"></div>
            </div>

            <div class="flex flex-col items-center justify-center relative p-4">
                <div class="flex flex-col items-center text-center">
                    <img src="{{ asset('/footer/leaf.png') }}" class="w-16 h-16 mb-4">
                    <dt class="mb-2 text-2xl font-extrabold">Best Quality Material</dt>
                    <dd class="text-gray-500 dark:text-gray-400">Lorem ipsum dolor sit amet consectetur Malesuada volutpat.</dd>
                </div>
            </div>

        </dl>
    </div>
</div>


<footer class="bg-blue-900  mt-4 text-white py-4">
    <div class="container mx-auto px-4">

        <div class=" border-gray-700 pt-8">
            <div class="flex justify-between">
                <div class="flex flex-col">
                    <img class="h-20 w-32 md:w-36" src="{{ asset('loginSlider/eshop-icon.png') }}" alt="eShops Logo">

                    <p>Lorem ipsum dolor sit amet consectetur. <br> Augue quis urna tristique posuere. Ut a a cras vel v</p>

                    <div class="flex  mt-4 items-center p-1 ">
                        <img src="{{ asset('social/fb.png') }}" alt="Icon 1" class="w-10 h-10 mx-2">
                        <img src="{{ asset('/social/ig.png') }}" alt="Icon 2" class="w-10 h-10 mx-2">
                        <img src="{{ asset('/social/lnk.png') }}" alt="Icon 3" class="w-10 h-10 mx-2">
                    </div>

                </div>
                <div>
                    <h4 class="text-lg  font-bold" style="color:#F5AD42" >Shop</h4>
                    <ul>
                        <li><a href="#" class="hover:underline text-gray-400 ">Food</a></li>
                        <li><a href="#" class="hover:underline text-gray-400 ">Beverages</a></li>
                        <li><a href="#" class="hover:underline text-gray-400 ">Cosmetics</a></li>
                        <li><a href="#" class="hover:underline text-gray-400 ">Home Decor</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="text-lg font-bold" style="color:#F5AD42" >Help & Information</h4>

                    <ul>
                        <li><a href="#" class="hover:underline text-gray-400">How to order</a></li>
                        <li><a href="#" class="hover:underline text-gray-400">Terms & Condition</a></li>
                        <li><a href="#" class="hover:underline text-gray-400">Help center</a></li>
                        <li><a href="#" class="hover:underline text-gray-400">Term of Use</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="text-lg font-bold" style="color:#F5AD42" >My Account</h4>
                    <ul>
                        <li><a href="#" class="hover:underline text-gray-400">My Orders</a></li>
                        <li><a href="#" class="hover:underline text-gray-400">Favourites</a></li>
                        <li><a href="#" class="hover:underline text-gray-400">Lorem ipsum</a></li>
                        <li><a href="#" class="hover:underline text-gray-400">Lorem ipsum</a></li>
                    </ul>
                </div>
            </div>
            <div class=" border-t text-center mt-8">
                <p class="mt-4">© Eshops 2024 Copyright</p>
            </div>
        </div>
    </div>
</footer>



    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
