<div>


    @extends('layouts.frontEnd.app')
    @section('front-end-main')
        <div class="max-w-7xl mx-auto bg-white p-6 rounded-lg">
            <h2 class="text-2xl font-bold mb-6">My Cart</h2>
            <div class="flex flex-col lg:flex-row">
                <div class="flex-grow mr-8">
                    <!-- Cart Items -->
                    <div class="mb-4 flex items-center border-b pb-4">
                        <img src="{{ asset('loginSlider/image1.png') }}" alt="Spice"
                            class="w-32 h-32 rounded-md object-cover mr-4"> <!-- Adjusted image size -->
                        <div class="flex-grow">
                            <h3 class="text-lg font-semibold">Spice</h3>
                            <p class="text-gray-400">Unit : 45g</p>
                            <button class="text-red-500 flex hover:text-red-700 mt-2">
                                <svg data-slot="icon" class="w-6 h-6" fill="none" stroke-width="1.5"
                                    stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                                    aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0">
                                    </path>
                                </svg>

                                <span> Remove </span>

                            </button>

                        </div>
                        <div class="flex flex-col items-center">
                            <p class="text-left text-sm h-4 mb-4 font-semibold">Quantity </p>
                            <div class="flex items-center bg-gray-100 p-2 rounded-md">
                                <button id="decrease"
                                    class="px-4 py-2 border border-gray-100 bg-gray-100 text-gray-600 hover:bg-gray-200 focus:outline-none focus:ring-2 shadow-md  focus:ring-black-500">-</button>
                                <input type="text" id="quantity" numeber
                                    class="w-14 text-center bg-gray-100 border border-gray-300 text-gray-700"
                                    value="00">
                                <button id="increase"
                                    class="px-4 py-2 border-blue-900 border-gray-100 bg-gray-100   text-gray-600 hover:bg-gray-200 focus:outline-none focus:ring-2 shadow-md focus:ring-black-500">+</button>
                            </div>

                            <p class="text-right font-semibold">Tsh 23,000</p>
                        </div>
                    </div>

                    <div class="mb-4 flex items-center border-b pb-4">
                        <img src="{{ asset('loginSlider/image1.png') }}" alt="Spice"
                            class="w-32 h-32 rounded-md  object-cover mr-4"> <!-- Adjusted image size -->
                        <div class="flex-grow">
                            <h3 class="text-lg font-semibold">Spice</h3>
                            <p class="text-gray-400">Unit : 45g</p>
                            <button class="text-red-500 flex hover:text-red-700 mt-2">
                                <svg data-slot="icon" class="w-6 h-6" fill="none" stroke-width="1.5"
                                    stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                                    aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0">
                                    </path>
                                </svg>

                                <span> Remove </span>

                            </button>

                        </div>
                        <div class="flex flex-col items-center">
                            <p class="text-left text-sm h-4 mb-4 font-semibold">Quantity </p>
                            <div class="flex items-center bg-gray-100 p-2 rounded-md">
                                <button id="decrease"
                                    class="px-4 py-2 border border-gray-100 bg-gray-100 text-gray-600 hover:bg-gray-200 focus:outline-none focus:ring-2 shadow-md  focus:ring-black-500">-</button>
                                <input type="text" id="quantity" numeber
                                    class="w-14 text-center bg-gray-100 border border-gray-300 text-gray-700"
                                    value="00">
                                <button id="increase"
                                    class="px-4 py-2 border-blue-900 border-gray-100 bg-gray-100   text-gray-600 hover:bg-gray-200 focus:outline-none focus:ring-2 shadow-md focus:ring-black-500">+</button>
                            </div>

                            <p class="text-right font-semibold">Tsh 23,000</p>
                        </div>
                    </div>

                    <div class="mb-4 flex items-center border-b pb-4">
                        <img src="{{ asset('loginSlider/image1.png') }}" alt="Spice"
                            class="w-32 h-32 rounded-md  object-cover mr-4"> <!-- Adjusted image size -->
                        <div class="flex-grow">
                            <h3 class="text-lg font-semibold">Spice</h3>
                            <p class="text-gray-400">Unit : 45g</p>
                            <button class="text-red-500 flex hover:text-red-700 mt-2">
                                <svg data-slot="icon" class="w-6 h-6" fill="none" stroke-width="1.5"
                                    stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                                    aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0">
                                    </path>
                                </svg>
                                <span> Remove </span>
                            </button>
                        </div>
                        <div class="flex flex-col items-center">
                            <p class="text-left text-sm h-4 mb-4 font-semibold">Quantity </p>
                            <div class="flex items-center bg-gray-100 p-2 rounded-md">
                                <button id="decrease"
                                    class="px-4 py-2 border border-gray-100 bg-gray-100 text-gray-600 hover:bg-gray-200 focus:outline-none focus:ring-2 shadow-md  focus:ring-black-500">-</button>
                                <input type="text" id="quantity" numeber
                                    class="w-14 text-center bg-gray-100 border border-gray-300 text-gray-700"
                                    value="00">
                                <button id="increase"
                                    class="px-4 py-2 border-blue-900 border-gray-100 bg-gray-100   text-gray-600 hover:bg-gray-200 focus:outline-none focus:ring-2 shadow-md focus:ring-black-500">+</button>
                            </div>
                            <p class="text-right font-semibold">Tsh 23,000</p>
                        </div>
                    </div>

                </div>

                <!-- Order Summary -->
                <div class="w-full lg:w-1/3      lg:ml-6 mt-6 lg:mt-0">

                    <div class="border shadow rounded-lg ">
                        <div class=" p-6 rounded-lg">
                            <h3 class="text-lg font-bold mb-4">Order Summary</h3>
                            <div class="mb-4 flex gap-2">
                                <input type="text" id="voucher"
                                    class="bg-gray-50  border border-gray-300  text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white"
                                    placeholder="Enter voucher code">
                                <button type="button"
                                    class="py-2.5 px-5 me-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100    ">
                                    Apply </button>

                            </div>
                            <div class="flex  justify-between mb-2">
                                <p class="text-gray-600 text-sm">Sub Total</p>
                                <p>Tsh 45,000</p>
                            </div>
                            <div class="flex text-gray-200  justify-between mb-4">
                                <p class="text-gray-600 text-sm">Discount (10%)</p>
                                <p class="text-green-500">Tsh 0</p>
                            </div>
                            <div class="flex  justify-between text-xl font-semibold mb-4">
                                <p>Grand Total</p>
                                <p>Tsh 45,000</p>
                            </div>
                            <button class="w-full text-white py-2 rounded-lg" style="background-color: #1C70CD">Checkout
                                Now</button>
                        </div>
                    </div>
                    <div class="mt-6 text-start">
                        <p class=" mb-2 font-bold">Supported Payment Method</p>
                        <img src="{{ asset('payment/selcome.png') }}" alt="Payment Method" class="w-16 h-10">
                    </div>
                </div>
            </div>
        </div>
    @endsection
</div>
