<div>
    @extends('layouts.frontEnd.app')
    @section('front-end-main')
        <div class="max-w-7xl mx-auto bg-white p-6 rounded-lg">
            <h2 class="text-3xl font-bold mb-6">My Cart</h2>
            <div class="flex flex-col lg:flex-row">
                <div class="flex-grow">
                    <!-- Customer Information and Payment Method -->
                    <div class="mb-6">
                        <div class="border-b border-gray-200 dark:border-gray-700">
                            <ul
                                class="flex flex-wrap -mb-px text-sm font-medium text-start text-gray-500 dark:text-gray-400">
                                <li class="w-1/2">
                                    <a href="#"
                                        class="inline-flex w-full items-center justify-start p-1 border-[#F5AD42]  border-b-2 border-transparent rounded-t-lg   group">
                                        <svg data-slot="icon" fill="#F5AD42" class=" w-8 h-8 text-[#F5AD42] "
                                            stroke-width="1.5" stroke="white" viewBox="0 0 24 24"
                                            xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"></path>
                                        </svg>
                                        Costumer Information
                                    </a>
                                </li>

                                <li class="w-1/2 flex ">
                                    <a href="#"
                                        class="inline-flex w-full  items-center justify-start p-1 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 group">
                                        <svg data-slot="icon" fill="none" class="w-8 h-8" stroke-width="1.5"
                                            stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                                            aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"></path>
                                        </svg>
                                        Payment Details
                                    </a>
                                </li>

                            </ul>
                        </div>

                        <div>
                            <h3 class="text-lg font-semibold mb-4 mt-2 ">Check Out Your Items</h3>
                            <p class="text-gray-600 mb-4">For a better experience, check your item and choose your shipping
                                before ordering.</p>
                            <form class="grid grid-cols-1 lg:grid-cols-2 gap-4">
                                <div class="relative mb-4">
                                    <input type="text"
                                        class="peer m-0 block h-[58px] w-full rounded-md border border-gray-200 border-secondary-500 bg-transparent bg-clip-padding px-3 py-4 text-base font-normal leading-tight text-neutral-700 transition duration-200 ease-linear placeholder:text-transparent focus:border-primary focus:pb-[0.625rem] focus:pt-[1.625rem] focus:text-neutral-700 focus:outline-none peer-focus:text-primary dark:border-neutral-400 dark:text-white dark:autofill:shadow-autofill dark:focus:border-primary dark:peer-focus:text-primary [&:not(:placeholder-shown)]:pb-[0.625rem] [&:not(:placeholder-shown)]:pt-[1.625rem]"
                                        id="floatingInput" placeholder="John" />
                                    <label for="floatingInput"
                                        class="pointer-events-none absolute left-3 top-4 text-neutral-500 transition-transform duration-200 ease-linear peer-focus:-translate-y-3 peer-focus:translate-x-[0.15rem] peer-focus:scale-[0.85] peer-focus:text-primary peer-placeholder-shown:top-4 peer-placeholder-shown:scale-100 peer-placeholder-shown:text-neutral-500 peer-placeholder-shown:left-3 peer-[:not(:placeholder-shown)]:-translate-y-3 peer-[:not(:placeholder-shown)]:translate-x-[0.15rem] peer-[:not(:placeholder-shown)]:scale-[0.85] motion-reduce:transition-none dark:text-neutral-400 dark:peer-focus:text-primary">
                                        First Name
                                    </label>
                                </div>


                                <div class="relative mb-4">
                                    <input type="text"
                                        class="peer m-0 block h-[58px] w-full rounded-md border border-gray-200 border-secondary-500 bg-transparent bg-clip-padding px-3 py-4 text-base font-normal leading-tight text-neutral-700 transition duration-200 ease-linear placeholder:text-transparent focus:border-primary focus:pb-[0.625rem] focus:pt-[1.625rem] focus:text-neutral-700 focus:outline-none peer-focus:text-primary dark:border-neutral-400 dark:text-white dark:autofill:shadow-autofill dark:focus:border-primary dark:peer-focus:text-primary [&:not(:placeholder-shown)]:pb-[0.625rem] [&:not(:placeholder-shown)]:pt-[1.625rem]"
                                        id="floatingInput" placeholder="Juma" />
                                    <label for="floatingInput"
                                        class="pointer-events-none absolute left-3 top-4 text-neutral-500 transition-transform duration-200 ease-linear peer-focus:-translate-y-3 peer-focus:translate-x-[0.15rem] peer-focus:scale-[0.85] peer-focus:text-primary peer-placeholder-shown:top-4 peer-placeholder-shown:scale-100 peer-placeholder-shown:text-neutral-500 peer-placeholder-shown:left-3 peer-[:not(:placeholder-shown)]:-translate-y-3 peer-[:not(:placeholder-shown)]:translate-x-[0.15rem] peer-[:not(:placeholder-shown)]:scale-[0.85] motion-reduce:transition-none dark:text-neutral-400 dark:peer-focus:text-primary">
                                        Last Name
                                    </label>
                                </div>


                                <div class="relative mb-4">
                                    <input type="number"
                                        class="peer m-0 block h-[58px] w-full rounded-md border border-gray-200 border-secondary-500 bg-transparent bg-clip-padding px-3 py-4 text-base font-normal leading-tight text-neutral-700 transition duration-200 ease-linear placeholder:text-transparent focus:border-primary focus:pb-[0.625rem] focus:pt-[1.625rem] focus:text-neutral-700 focus:outline-none peer-focus:text-primary dark:border-neutral-400 dark:text-white dark:autofill:shadow-autofill dark:focus:border-primary dark:peer-focus:text-primary [&:not(:placeholder-shown)]:pb-[0.625rem] [&:not(:placeholder-shown)]:pt-[1.625rem]"
                                        id="floatingInput" placeholder="+255" />
                                    <label for="floatingInput"
                                        class="pointer-events-none absolute left-3 top-4 text-neutral-500 transition-transform duration-200 ease-linear peer-focus:-translate-y-3 peer-focus:translate-x-[0.15rem] peer-focus:scale-[0.85] peer-focus:text-primary peer-placeholder-shown:top-4 peer-placeholder-shown:scale-100 peer-placeholder-shown:text-neutral-500 peer-placeholder-shown:left-3 peer-[:not(:placeholder-shown)]:-translate-y-3 peer-[:not(:placeholder-shown)]:translate-x-[0.15rem] peer-[:not(:placeholder-shown)]:scale-[0.85] motion-reduce:transition-none dark:text-neutral-400 dark:peer-focus:text-primary">
                                        Phone Number
                                    </label>
                                </div>


                                <div class="relative mb-4">
                                    <input type="email"
                                        class="peer m-0 block h-[58px] w-full rounded-md border border-gray-200 border-secondary-500 bg-transparent bg-clip-padding px-3 py-4 text-base font-normal leading-tight text-neutral-700 transition duration-200 ease-linear placeholder:text-transparent focus:border-primary focus:pb-[0.625rem] focus:pt-[1.625rem] focus:text-neutral-700 focus:outline-none peer-focus:text-primary dark:border-neutral-400 dark:text-white dark:autofill:shadow-autofill dark:focus:border-primary dark:peer-focus:text-primary [&:not(:placeholder-shown)]:pb-[0.625rem] [&:not(:placeholder-shown)]:pt-[1.625rem]"
                                        id="floatingInput" value="jumael@gmail.com" placeholder="Enter email address " />
                                    <label for="floatingInput"
                                        class="pointer-events-none absolute left-3 top-4 text-neutral-500 transition-transform duration-200 ease-linear peer-focus:-translate-y-3 peer-focus:translate-x-[0.15rem] peer-focus:scale-[0.85] peer-focus:text-primary peer-placeholder-shown:top-4 peer-placeholder-shown:scale-100 peer-placeholder-shown:text-neutral-500 peer-placeholder-shown:left-3 peer-[:not(:placeholder-shown)]:-translate-y-3 peer-[:not(:placeholder-shown)]:translate-x-[0.15rem] peer-[:not(:placeholder-shown)]:scale-[0.85] motion-reduce:transition-none dark:text-neutral-400 dark:peer-focus:text-primary">
                                        Email
                                    </label>
                                </div>


                            </form>

                            <div class="relative mb-4">
                                <!-- Input Field -->
                                <input type="email"
                                    class="peer block w-full h-[80px] rounded-md border border-gray-200 border-secondary-500 bg-transparent bg-clip-padding px-12 py-4 text-base font-normal leading-tight text-neutral-700 transition duration-200 ease-linear placeholder:text-transparent focus:border-primary focus:pb-[0.625rem] focus:pt-[1.625rem] focus:text-neutral-700 focus:outline-none peer-focus:text-primary dark:border-neutral-400 dark:text-white dark:autofill:shadow-autofill dark:focus:border-primary dark:peer-focus:text-primary [&:not(:placeholder-shown)]:pb-[0.625rem] [&:not(:placeholder-shown)]:pt-[1.625rem]"
                                    id="floatingInput" value="Lorem ipsum dolor sit amet consectetur. Viverra amet in" />

                                <!-- Floating Label -->
                                <label for="floatingInput"
                                    class="pointer-events-none absolute left-12 top-4 text-neutral-500 transition-transform duration-200 ease-linear peer-focus:-translate-y-3 peer-focus:translate-x-[0.15rem] peer-focus:scale-[0.85] peer-focus:text-primary peer-placeholder-shown:top-4 peer-placeholder-shown:scale-100 peer-placeholder-shown:text-neutral-500 peer-placeholder-shown:left-12 peer-[:not(:placeholder-shown)]:-translate-y-3 peer-[:not(:placeholder-shown)]:translate-x-[0.15rem] peer-[:not(:placeholder-shown)]:scale-[0.85] motion-reduce:transition-none dark:text-neutral-400 dark:peer-focus:text-primary">
                                    Delivery Address
                                </label>

                                <!-- Icon and Pen Icon -->
                                <svg class="absolute left-4 top-1/2 transform -translate-y-1/2 text-gray-500 w-6 h-6"
                                    fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M3 17.25V21h3.75L17.812 10.937l-3.75-3.75L3 17.25z"></path>
                                </svg>

                                <svg class="absolute right-4 top-1/2 transform -translate-y-1/2 text-gray-500 w-6 h-6"
                                    fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 13H5v-2h14v2z"></path>
                                </svg>
                            </div>



                        </div>
                        <div class="mt-6">
                            <h3 class="text-lg font-semibold mb-4">Payment Method</h3>
                            <p class="text-gray-600 mb-4">Select the bank for payment of your item</p>
                            <div class="flex items-center mb-4">
                                <div
                                    class="relative flex items-center w-full h-[75px] rounded-md  border-blue-600  border border-gray-300 px-3 py-2  radio-checked">
                                    <input type="radio" checked id="bank_1" name="payment_method"
                                        class="absolute  right-3 top-1/2 transform -translate-y-1/2 cursor-pointer appearance-none checked:border-blue-500 checked:ring-0 focus:outline-none">
                                    <label for="bank_1"
                                        class="relative items-center w-full pl-2 pr-12 border-gray-300 rounded-sm">
                                        <img src="{{ asset('payment/selcome.png') }}" alt="Bank Logo"
                                            class="w-12 h-6 mr-2">
                                        <span class="flex-grow">Available to transfer all banks</span>
                                    </label>
                                </div>
                            </div>

                            <div class="flex items-center">
                                <div
                                    class="relative flex items-center w-full h-[75px] border border-gray-300 px-3 py-2 rounded-md radio-checked">
                                    <input type="radio" id="bank_2" name="payment_method"
                                        class="absolute right-3 top-1/2 transform -translate-y-1/2 cursor-pointer appearance-none checked:border-blue-500 checked:ring-0 focus:outline-none">
                                    <label for="bank_2"
                                        class="relative items-center w-full pl-2 pr-12 border-gray-300 rounded-sm">
                                        <img src="{{ asset('payment/selcom2.png') }}" alt="Bank Logo"
                                            class="w-10 h-6 mr-2">
                                        <span class="flex-grow">Pay On Delivery</span>
                                    </label>
                                </div>
                            </div>



                        </div>
                    </div>
                </div>

                <div class="w-full lg:w-1/3  mt-8     lg:ml-6 mt-6 lg:mt-0">
                    <div class="border mt-10 shadow rounded-lg ">
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
