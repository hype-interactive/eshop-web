<div>
    @extends('layouts.frontEnd.app')

    @section('front-end-main')
        <div class="bilboard ">
            <div class="relative isolate overflow-hidden bg-gray-900 py-24 sm:py-32 image-height transparent-0">
                <div class="absolute left-0 top-0 h-full w-full bg-gradient-to-r from-black via-transparent to-transparent">
                </div>

                <img src="{{ asset('/loginSlider/billboard.png') }}" alt=""
                    class="absolute inset-0 -z-10 h-full w-full object-cover object-right md:object-center">
                <div class="mx-auto max-w-7xl px-6 lg:px-8 relative z-10">
                    <div class="mx-auto max-w-2xl lg:mx-0">
                        <h4 class="font-bold uppercase text-yellow-400">UP TO 30% OFF TODAY</h4>
                        <h2 class="text-4xl font-bold tracking-tight text-white sm:text-6xl"> Spice Nyanya</h2>
                        <p class="mt-6 text-lg leading-8 text-gray-300">Anim aute id magna aliqua ad ad non deserunt sunt.
                            Qui irure qui lorem cupidatat commodo. Elit sunt amet fugiat veniam occaecat fugiat aliqua.</p>
                    </div>
                    <div class="mx-auto mt-10 max-w-2xl lg:mx-0 lg:max-w-none">
                        <div
                            class="grid grid-cols-1 gap-x-8 gap-y-6 text-base font-semibold leading-7 text-white sm:grid-cols-2 md:flex lg:gap-x-10">
                            <button type="button"
                                class="text-white bg-yellow-400 hover:bg-yellow-400 focus:ring-4 focus:ring-yellow-400 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-yellow-400 focus:outline-none dark:focus:ring-yellow-400">
                                Shop Now </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container mx-auto">
                <h2 class="text-2xl font-bold mb-6 mt-6">New Arrivals</h2>
                <div class="relative">
                    <button id="scrollLeft"
                        class="absolute left-0 top-1/2 -mt-4 transform -translate-y-1/2 text-gray-400 w-12 h-12 border-2 rounded-full z-10 -ml-10 shadow-md flex items-center justify-center">❮</button>
                    <div class="scroll-container flex items-center space-x-4">

                        <div class="card bg-white  rounded-lg overflow-hidden  w-64 h-80">
                            <img src="{{ asset('loginSlider/billboard.png') }}" alt="Bee Honey"
                                class="w-full h-48 object-cover">
                            <div class="p-4">
                                <h3 class="font-semibold text-lg">Bee Honey</h3>
                                <div class="flex justify-between items-center">
                                    <p class="text-gray-600 mt-3">Tsh 14,000</p>
                                    <button class="mt-2 text-white px-4 p-1 rounded" style="background-color: #1C70CD">Add
                                        To Cart</button>
                                </div>
                            </div>
                        </div>

                        <div class="card bg-white  rounded-lg overflow-hidden  w-64 h-80">
                            <img src="{{ asset('loginSlider/image1.png') }}" alt="Bee Honey"
                                class="w-full h-48 object-cover">
                            <div class="p-4">
                                <h3 class="font-semibold text-lg">Bee Honey</h3>
                                <div class="flex justify-between items-center">
                                    <p class="text-gray-600 mt-3">Tsh 14,000</p>
                                    <button class="mt-2 text-white px-4 p-1 rounded" style="background-color: #1C70CD">Add
                                        To Cart</button>
                                </div>
                            </div>
                        </div>

                        <div class="card bg-white  rounded-lg overflow-hidden  w-64 h-80">
                            <img src="{{ asset('loginSlider/image2.png') }}" alt="Bee Honey"
                                class="w-full h-48 object-cover">
                            <div class="p-4">
                                <h3 class="font-semibold text-lg">Bee Honey</h3>
                                <div class="flex justify-between items-center">
                                    <p class="text-gray-600 mt-3">Tsh 14,000</p>
                                    <button class="mt-2 text-white px-4 p-1 rounded" style="background-color: #1C70CD">Add
                                        To Cart</button>
                                </div>
                            </div>
                        </div>

                        <div class="card bg-white  rounded-lg overflow-hidden  w-64 h-80">
                            <img src="{{ asset('loginSlider/image3.png') }}" alt="Bee Honey"
                                class="w-full h-48 object-cover">
                            <div class="p-4">
                                <h3 class="font-semibold text-lg">Bee Honey</h3>
                                <div class="flex justify-between items-center">
                                    <p class="text-gray-600 mt-3">Tsh 14,000</p>
                                    <button class="mt-2 text-white px-4 p-1 rounded" style="background-color: #1C70CD">Add
                                        To Cart</button>
                                </div>
                            </div>
                        </div>

                        <div class="card bg-white  rounded-lg overflow-hidden  w-64 h-80">
                            <img src="{{ asset('loginSlider/image4.png') }}" alt="Bee Honey"
                                class="w-full h-48 object-cover">
                            <div class="p-4">
                                <h3 class="font-semibold text-lg">Bee Honey</h3>
                                <div class="flex justify-between items-center">
                                    <p class="text-gray-600 mt-3">Tsh 14,000</p>
                                    <button class="mt-2 text-white px-4 p-1 rounded" style="background-color: #1C70CD">Add
                                        To Cart</button>
                                </div>
                            </div>
                        </div>

                        <div class="card bg-white  rounded-lg overflow-hidden  w-64 h-80">
                            <img src="{{ asset('loginSlider/image4.png') }}" alt="Bee Honey"
                                class="w-full h-48 object-cover">
                            <div class="p-4">
                                <h3 class="font-semibold text-lg">Bee Honey</h3>
                                <div class="flex justify-between items-center">
                                    <p class="text-gray-600 mt-3">Tsh 14,000</p>
                                    <button class="mt-2 text-white px-4 p-1 rounded" style="background-color: #1C70CD">Add
                                        To Cart</button>
                                </div>
                            </div>
                        </div>

                    </div>
                    <button id="scrollRight"
                        class="absolute right-0 top-1/2 -mt-4  transform -translate-y-1/2 text-gray-400 border w-12 h-12 rounded-full z-10 -mr-10 shadow-md flex items-center justify-center">❯</button>
                </div>
            </div>

            <div class=" mt-4 mb-4 " style="background-color: #FEF8EA">

                <div class="container mb-12 mt-4 mx-auto w-screen">
                    <h2 class="text-2xl font-inter font-bold mb-6 mt-12"> Shop by Category </h2>
                    <div class="relative">
                        <button id="scrollLeft"
                            class="absolute left-0 top-1/2 transform -translate-y-1/2  text-gray-400 w-12 h-12 border-2 rounded-full z-10 -ml-8 shadow-md flex items-center justify-center">❮</button>

                        {{-- <button id="scrollLeft" class="absolute left-0 top-1/2 transform -translate-y-1/2 bg-blue-500 text-white p-4 rounded-full z-10  -ml-6 shadow-md">❮</button> --}}

                        <div
                            class=" font-inter  scroll-container   flex items-center overflow-x-scroll no-scrollbar space-x-4 p-4">
                            <div class="card2 rounded-lg overflow-hidden ">
                                <img src="http://127.0.0.1:8000/loginSlider/billboard.png" alt="Bee Honey"
                                    class="w-40 h-40 object-cover rounded-lg">
                                <div class="flex items-center justify-center mt-2">
                                    <h3 class="font-semibold text-lg">Bee Honey</h3>
                                </div>
                            </div>
                            <div class="card2 rounded-lg overflow-hidden ">
                                <img src="http://127.0.0.1:8000/loginSlider/image1.png" alt="Bee Honey"
                                    class="w-40 h-40 object-cover rounded-lg">
                                <div class="flex items-center justify-center mt-2">
                                    <h3 class="font-semibold text-lg">Bee Honey</h3>
                                </div>
                            </div>
                            <div class="card2 rounded-lg overflow-hidden ">
                                <img src="http://127.0.0.1:8000/loginSlider/image2.png" alt="Bee Honey"
                                    class="w-40 h-40 object-cover rounded-lg">
                                <div class="flex items-center justify-center mt-2">
                                    <h3 class="font-semibold text-lg">Bee Honey</h3>
                                </div>
                            </div>
                            <div class="card2 rounded-lg overflow-hidden ">
                                <img src="http://127.0.0.1:8000/loginSlider/image2.png" alt="Bee Honey"
                                    class="w-40 h-40 object-cover rounded-lg">
                                <div class="flex items-center justify-center mt-2">
                                    <h3 class="font-semibold text-lg">Bee Honey</h3>
                                </div>
                            </div>
                            <div class="card2 rounded-lg overflow-hidden  ">
                                <img src="http://127.0.0.1:8000/loginSlider/image2.png" alt="Bee Honey"
                                    class="w-40 h-40 object-cover rounded-lg">
                                <div class="flex items-center justify-center mt-2">
                                    <h3 class="font-semibold text-lg">Bee Honey</h3>
                                </div>
                            </div>
                            <div class="card2 rounded-lg overflow-hidden ">
                                <img src="http://127.0.0.1:8000/loginSlider/image2.png" alt="Bee Honey"
                                    class="w-40 h-40 object-cover rounded-lg">
                                <div class="flex items-center justify-center mt-2">
                                    <h3 class="font-semibold text-lg">Bee Honey</h3>
                                </div>
                            </div>
                            <div class="card2 rounded-lg overflow-hidden ">
                                <img src="http://127.0.0.1:8000/loginSlider/image3.png" alt="Bee Honey"
                                    class="w-40 h-40 object-cover rounded-lg">
                                <div class="flex items-center justify-center mt-2">
                                    <h3 class="font-semibold text-lg">Bee Honey</h3>
                                </div>
                            </div>
                            <div class=" rounded-lg overflow-hidden ">
                                <img src="http://127.0.0.1:8000/loginSlider/image4.png" alt="Bee Honey"
                                    class="w-40 h-40 object-cover rounded-lg">
                                <div class="flex items-center justify-center mt-2">
                                    <h3 class="font-semibold text-lg">Bee Honey</h3>
                                </div>
                            </div>
                        </div>
                        <button id="scrollRight"
                            class="absolute right-0 top-1/2 transform -translate-y-1/2  text-gray-400 border w-12 h-12 rounded-full z-10 -mr-8 shadow-md flex items-center justify-center">❯</button>

                    </div>
                </div>
            </div>


            <div class="container mx-auto">
                <h2 class="text-2xl font-bold mb-6 mt-6"> Featured Products</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-4">
                    <div class="card bg-white rounded-lg overflow-hidden w-full h-80">
                        <img src="{{ asset('loginSlider/billboard.png') }}" alt="Bee Honey"
                            class="w-full h-48 object-cover">
                        <div class="p-4">
                            <h3 class="font-semibold text-lg">Bee Honey</h3>
                            <div class="flex justify-between items-center">
                                <p class="text-gray-600 mt-3">Tsh 14,000</p>
                                <button class="mt-2 text-white px-4 p-1 rounded" style="background-color: #1C70CD">Add To
                                    Cart</button>
                            </div>
                        </div>
                    </div>

                    <div class="card bg-white rounded-lg overflow-hidden w-full h-80">
                        <img src="{{ asset('loginSlider/image1.png') }}" alt="Bee Honey"
                            class="w-full h-48 object-cover">
                        <div class="p-4">
                            <h3 class="font-semibold text-lg">Bee Honey</h3>
                            <div class="flex justify-between items-center">
                                <p class="text-gray-600 mt-3">Tsh 14,000</p>
                                <button class="mt-2 text-white px-4 p-1 rounded" style="background-color: #1C70CD">Add To
                                    Cart</button>
                            </div>
                        </div>
                    </div>

                    <div class="card bg-white rounded-lg overflow-hidden w-full h-80">
                        <img src="{{ asset('loginSlider/image3.png') }}" alt="Bee Honey"
                            class="w-full h-48 object-cover">
                        <div class="p-4">
                            <h3 class="font-semibold text-lg">Bee Honey</h3>
                            <div class="flex justify-between items-center">
                                <p class="text-gray-600 mt-3">Tsh 14,000</p>
                                <button class="mt-2 text-white px-4 p-1 rounded" style="background-color: #1C70CD">Add To
                                    Cart</button>
                            </div>
                        </div>
                    </div>


                    <div class="card bg-white rounded-lg overflow-hidden w-full h-80">
                        <img src="{{ asset('loginSlider/image3.png') }}" alt="Bee Honey"
                            class="w-full h-48 object-cover">
                        <div class="p-4">
                            <h3 class="font-semibold text-lg">Bee Honey</h3>
                            <div class="flex justify-between items-center">
                                <p class="text-gray-600 mt-3">Tsh 14,000</p>
                                <button class="mt-2 text-white px-4 p-1 rounded" style="background-color: #1C70CD">Add To
                                    Cart</button>
                            </div>
                        </div>
                    </div>

                    <div class="card bg-white rounded-lg overflow-hidden w-full h-80">
                        <img src="{{ asset('loginSlider/image3.png') }}" alt="Bee Honey"
                            class="w-full h-48 object-cover">
                        <div class="p-4">
                            <h3 class="font-semibold text-lg">Bee Honey</h3>
                            <div class="flex justify-between items-center">
                                <p class="text-gray-600 mt-3">Tsh 14,000</p>
                                <button class="mt-2 text-white px-4 p-1 rounded" style="background-color: #1C70CD">Add To
                                    Cart</button>
                            </div>
                        </div>
                    </div>


                    <div class="card bg-white rounded-lg overflow-hidden w-full h-80">
                        <img src="{{ asset('loginSlider/image3.png') }}" alt="Bee Honey"
                            class="w-full h-48 object-cover">
                        <div class="p-4">
                            <h3 class="font-semibold text-lg">Bee Honey</h3>
                            <div class="flex justify-between items-center">
                                <p class="text-gray-600 mt-3">Tsh 14,000</p>
                                <button class="mt-2 text-white px-4 p-1 rounded" style="background-color: #1C70CD">Add To
                                    Cart</button>
                            </div>
                        </div>
                    </div>

                    <div class="card bg-white rounded-lg overflow-hidden w-full h-80">
                        <img src="{{ asset('loginSlider/image2.png') }}" alt="Bee Honey"
                            class="w-full h-48 object-cover">
                        <div class="p-4">
                            <h3 class="font-semibold text-lg">Bee Honey</h3>
                            <div class="flex justify-between items-center">
                                <p class="text-gray-600 mt-3">Tsh 14,000</p>
                                <button class="mt-2 text-white px-4 p-1 rounded" style="background-color: #1C70CD">Add To
                                    Cart</button>
                            </div>
                        </div>
                    </div>

                    <div class="card bg-white rounded-lg overflow-hidden w-full h-80">
                        <img src="{{ asset('loginSlider/image3.png') }}" alt="Bee Honey"
                            class="w-full h-48 object-cover">
                        <div class="p-4">
                            <h3 class="font-semibold text-lg">Bee Honey</h3>
                            <div class="flex justify-between items-center">
                                <p class="text-gray-600 mt-3">Tsh 14,000</p>
                                <button class="mt-2 text-white px-4 p-1 rounded" style="background-color: #1C70CD">Add To
                                    Cart</button>
                            </div>
                        </div>
                    </div>

                    <div class="card bg-white rounded-lg overflow-hidden w-full h-80">
                        <img src="{{ asset('loginSlider/image3.png') }}" alt="Bee Honey"
                            class="w-full h-48 object-cover">
                        <div class="p-4">
                            <h3 class="font-semibold text-lg">Bee Honey</h3>
                            <div class="flex justify-between items-center">
                                <p class="text-gray-600 mt-3">Tsh 14,000</p>
                                <button class="mt-2 text-white px-4 p-1 rounded" style="background-color: #1C70CD">Add To
                                    Cart</button>
                            </div>
                        </div>
                    </div>
                    <div class="card bg-white rounded-lg overflow-hidden w-full h-80">
                        <img src="{{ asset('loginSlider/image4.png') }}" alt="Bee Honey"
                            class="w-full h-48 object-cover">
                        <div class="p-4">
                            <h3 class="font-semibold text-lg">Bee Honey</h3>
                            <div class="flex justify-between items-center">
                                <p class="text-gray-600 mt-3">Tsh 14,000</p>
                                <button class="mt-2 text-white px-4 p-1 rounded" style="background-color: #1C70CD">Add To
                                    Cart</button>
                            </div>
                        </div>
                    </div>

                    <div class="card bg-white rounded-lg overflow-hidden w-full h-80">
                        <img src="{{ asset('loginSlider/image3.png') }}" alt="Bee Honey"
                            class="w-full h-48 object-cover">
                        <div class="p-4">
                            <h3 class="font-semibold text-lg">Bee Honey</h3>
                            <div class="flex justify-between items-center">
                                <p class="text-gray-600 mt-3">Tsh 14,000</p>
                                <button class="mt-2 text-white px-4 p-1 rounded" style="background-color: #1C70CD">Add To
                                    Cart</button>
                            </div>
                        </div>
                    </div>


                    <div class="card bg-white rounded-lg overflow-hidden w-full h-80">
                        <img src="{{ asset('loginSlider/image3.png') }}" alt="Bee Honey"
                            class="w-full h-48 object-cover">
                        <div class="p-4">
                            <h3 class="font-semibold text-lg">Bee Honey</h3>
                            <div class="flex justify-between items-center">
                                <p class="text-gray-600 mt-3">Tsh 14,000</p>
                                <button class="mt-2 text-white px-4 p-1 rounded" style="background-color: #1C70CD">Add To
                                    Cart</button>
                            </div>
                        </div>
                    </div>

                </div>


                <!-- Pagination -->
                <div class="flex justify-center mt-2 mb-4">
                    <nav aria-label="Page navigation">
                        <ul class="inline-flex items-center -space-x-px">
                            <li>
                                <a href="#"
                                    class="px-3 py-2 ml-0 leading-tight text-gray-500 bg-white border border-gray-300 rounded-l-lg hover:bg-gray-100 hover:text-gray-700">Previous</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700">1</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700">2</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700">3</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 rounded-r-lg hover:bg-gray-100 hover:text-gray-700">Next</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        @endsection

    </div>
