<div>
    @extends('layouts.frontEnd.app')
    @section('front-end-main')
    {{-- Do your work, then step back. --}}
    <div class="container mx-auto px-4 py-8">
        <div class="flex  flex-row">
            <!-- Sidebar -->
            <div class="w-1/4 pr-4 mb-8 lg:mb-0 lg:h-screen lg:sticky lg:top-0 overflow-y-auto">
                <div class="bg-white border p-6 mb-8">
                    <h2 class="text-2xl border-b  font-bold mb-4">Categories</h2>
                    <ul class="space-y-2 overflow-y-auto h-[200px] overflow-x-auto  ">
                        <li><a href="#" class="block text-blue-600 hover:text-blue-800">All</a></li>
                        <li><a href="#" class="block text-gray-700 hover:text-blue-800">Food</a></li>
                        <li><a href="#" class="block text-gray-700 hover:text-blue-800">Cosmetics</a></li>
                        <li><a href="#" class="block text-gray-700 hover:text-blue-800">Cleaning Products</a></li>
                        <li><a href="#" class="block text-gray-700 hover:text-blue-800">Nuts</a></li>
                        <li><a href="#" class="block text-gray-700 hover:text-blue-800">Spices</a></li>
                        <li><a href="#" class="block text-gray-700 hover:text-blue-800">Handmade</a></li>

                        <li><a href="#" class="block text-gray-700 hover:text-blue-800">Handmade</a></li>
                        <li><a href="#" class="block text-gray-700 hover:text-blue-800">Handmade</a></li>
                        <li><a href="#" class="block text-gray-700 hover:text-blue-800">Handmade</a></li>

                    </ul>
                </div>
                <div class="bg-white border p-6">
                    <h2 class="text-2xl border-b font-bold mb-4">Price</h2>
                    <div class="space-y-4">
                        <input type="number" placeholder="Lowest price" class="w-full p-3 border border-gray-200 bg-gray-50 rounded-3xl ">
                        <input type="number" placeholder="Highest price" class="w-full p-3 border border-gray-200  bg-gray-50 rounded-3xl ">
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



    @endsection
</div>
