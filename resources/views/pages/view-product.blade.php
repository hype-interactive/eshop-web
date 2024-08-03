<div>
    @extends('layouts.frontEnd.app')
    @section('front-end-main')

     @foreach ($products as $product)
     <div class=" mx-auto px-4 ">
        <div class="max-w-full mx-auto p-5 bg-white rounded-lg">
            <div class="flex flex-col md:flex-row">
                <div class="w-full md:w-1/2  flex justify-center lg:justify-center  md:justify-end items-center">
                    <img src="{{ asset('images/billboard.png') }}" alt="Product Image" class=" w-4/5 max-h-96 rounded-md object-cover " >
                </div>
                <div class="w-full md:w-1/2 py-10 px-20 mr-4">
                    <h2 class="text-2xl font-bold mb-2"> {{ $product->name }}</h2>
                    <p class="font-semibold mb-2">Status: <span style="color:#F5AD42"> {{ $product->status }}</span></p>
                    <p class="text-2xl text-blue-900 font-bold mb-4">Tsh {{ number_format($product->final_price,2) }}</p>
                    <p class="text-gray-700 mb-4">
                       {{ $product->description }}
                    </p>
                    <form action="{{ route('add-toCart') }}" method="post" >
                        @csrf
                    <div class="flex items-center mb-4">
                        <label for="quantity" class="mr-3">Quantity</label>
                        <div class="flex items-center bg-gray-100 px-2 py-1 mt-2 rounded-md">
                            <div  id="decrease"
                                class="px-4 py-1 border border-gray-300 rounded-md bg-gray-100 text-gray-600 hover:bg-gray-200 focus:outline-none focus:ring-2 shadow-md cursor-pointer   focus:ring-black-500">-</div>
                              <input  type="hidden" name="product_id" value="{{ $product->id }}" />
                                <input name="quantity" type="text" id="quantity" numeber
                                class="w-14 border-none mx-1  bg-gray-100 text-center  text-gray-700"
                                value="00">
                            <div id="increase"
                                class="px-4 py-1 border border-gray-300 rounded-md bg-gray-100   text-gray-600 hover:bg-gray-200 focus:outline-none focus:ring-2 shadow-md cursor-pointer focus:ring-black-500">+</div>
                        </div>
                    </div>

                    <button class="text-white px-6 py-3 w-4/5 mt-5 rounded-md" style="background-color: #1C70CD">
                        <i class="fas fa-shopping-cart mr-2"></i> Add to Cart
                    </button>

                    </form>


                </div>
            </div>
        </div>
    </div>
     @endforeach





        <div class="container mx-auto mb-10">
            <h2 class="text-2xl font-bold mb-6 mt-6"> Related Products </h2>
            <div class="grid grid-cols-1 md:grid-cols-4 lg:grid-cols-5 gap-4">

                {{-- @for ($i = 0; $i < 2; $i++) --}}
                @foreach ($relatedProducts as $data)
                @include('components.product_card', [
                    'id' => $data->id,
                    'name' => $data->name,
                    'price' => number_format($data->final_price,2),
                    'image' => 'images/honey-1.jpg',
                    'quantity'=>1,

                ])
                @endforeach

                {{-- @include('components.product_card', [
                    'id' => 2,
                    'name' => 'Cashew',
                    'price' => '10,000',
                    'image' => 'loginSlider/image1.png',
                ])
                @include('components.product_card', [
                    'id' => 3,
                    'name' => 'Peanuts',
                    'price' => '8,000',
                    'image' => 'loginSlider/image2.png',
                ]) --}}
                {{-- @include('components.product_card', [
                    'id' => 4,
                    'name' => 'Almonds',
                    'price' => '12,000',
                    'image' => 'loginSlider/image3.png',
                ])
                @include('components.product_card', [
                    'id' => 5,
                    'name' => 'Pistachios',
                    'price' => '15,000',
                    'image' => 'loginSlider/image4.png',
                ])
            @endfor --}}


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



        @endsection
    </div>
