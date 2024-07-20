<div>
    @extends('layouts.frontEnd.app')
    @section('front-end-main')
        <div class=" mx-auto px-4">
            <div class="max-w-full mx-auto p-5 bg-white rounded-lg">
                <div class="flex flex-col md:flex-row">
                    <div class="w-full md:w-1/2 p-8 flex justify-center md:justify-end items-center">
                        <img src="{{ asset('loginSlider/image1.png') }}" alt="Product Image" class="w-full rounded-md"
                            style="height: 350px; width:350px;">
                    </div>
                    <div class="w-full md:w-1/2 p-5 mr-4">
                        <h2 class="text-2xl font-bold mb-2">Spice Jiko</h2>
                        <p class="font-semibold mb-2">Status: <span style="color:#F5AD42">In stock</span></p>
                        <p class="text-2xl text-blue-900 font-bold mb-4">Tsh 2,300,000.00</p>
                        <p class="text-gray-700 mb-4">Lorem ipsum dolor sit amet consectetur. Amet vitae nec facilisis leo
                            pellentesque eget impredidet amet. Elementbum leo nunc velit arcu fringilla est ac condimenitum
                            urus. Pellentesque dis vitae velit at viverra arcu enim aing. Lacus platea tortor pellentesque.
                        </p>
                        <div class="flex items-center mb-4">
                            <label for="quantity" class="mr-3">Quantity</label>
                            <div class="flex items-center bg-gray-100 p-2 rounded-md">
                                <button id="decrease"
                                    class="px-4 py-2 border border-gray-100 bg-gray-100 text-gray-600 hover:bg-gray-200 focus:outline-none focus:ring-2 shadow-md  focus:ring-black-500">-</button>
                                <input type="text" id="quantity" numeber
                                    class="w-14 text-center bg-gray-100 border border-gray-300 text-gray-700"
                                    value="00">
                                <button id="increase"
                                    class="px-4 py-2 border-blue-900 border-gray-100 bg-gray-100   text-gray-600 hover:bg-gray-200 focus:outline-none focus:ring-2 shadow-md focus:ring-black-500">+</button>
                            </div>
                        </div>

                        <button class="text-white px-6 py-3 w-full rounded-md" style="background-color: #1C70CD">
                            <i class="fas fa-shopping-cart mr-2"></i> Add to Cart
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <script>
            document.addEventListener('DOMContentLoaded', () => {
                const decreaseButton = document.getElementById('decrease');
                const increaseButton = document.getElementById('increase');
                const quantityInput = document.getElementById('quantity');

                // Function to update the quantity
                function updateQuantity(change) {
                    let currentValue = parseInt(quantityInput.value, 10);
                    if (isNaN(currentValue)) {
                        currentValue = 0;
                    }
                    currentValue += change;
                    // Ensure the value stays within a range (e.g., 00 to 99)
                    if (currentValue < 0) {
                        currentValue = 0;
                    } else if (currentValue > 99) {
                        currentValue = 99;
                    }
                    // Format value with leading zeros
                    quantityInput.value = currentValue.toString().padStart(2, '0');
                }

                // Event listeners for buttons
                decreaseButton.addEventListener('click', () => updateQuantity(-1));
                increaseButton.addEventListener('click', () => updateQuantity(1));
            });
        </script>




        <div class="container mx-auto">
            <h2 class="text-2xl font-bold mb-6 mt-6"> Related Products </h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-4">
                <div class="card bg-white rounded-lg overflow-hidden w-full h-80">
                    <img src="{{ asset('loginSlider/billboard.png') }}" alt="Bee Honey" class="w-full h-48 object-cover">
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
                    <img src="{{ asset('loginSlider/image1.png') }}" alt="Bee Honey" class="w-full h-48 object-cover">
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
                    <img src="{{ asset('loginSlider/image3.png') }}" alt="Bee Honey" class="w-full h-48 object-cover">
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
                    <img src="{{ asset('loginSlider/image3.png') }}" alt="Bee Honey" class="w-full h-48 object-cover">
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
                    <img src="{{ asset('loginSlider/image3.png') }}" alt="Bee Honey" class="w-full h-48 object-cover">
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
                    <img src="{{ asset('loginSlider/image3.png') }}" alt="Bee Honey" class="w-full h-48 object-cover">
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
                    <img src="{{ asset('loginSlider/image2.png') }}" alt="Bee Honey" class="w-full h-48 object-cover">
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
                    <img src="{{ asset('loginSlider/image3.png') }}" alt="Bee Honey" class="w-full h-48 object-cover">
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
                    <img src="{{ asset('loginSlider/image3.png') }}" alt="Bee Honey" class="w-full h-48 object-cover">
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
                    <img src="{{ asset('loginSlider/image4.png') }}" alt="Bee Honey" class="w-full h-48 object-cover">
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
                    <img src="{{ asset('loginSlider/image3.png') }}" alt="Bee Honey" class="w-full h-48 object-cover">
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
                    <img src="{{ asset('loginSlider/image3.png') }}" alt="Bee Honey" class="w-full h-48 object-cover">
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

        @endsection
    </div>
