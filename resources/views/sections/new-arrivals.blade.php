<div class="container mx-auto">
    <h2 class="text-2xl font-bold mb-6 mt-6">New Arrivals</h2>
    <div class="relative">
        <button id="scrollLeft"
            class="absolute left-0 top-1/2 -mt-4 transform -translate-y-1/2 text-gray-400 w-12 h-12 border-2 rounded-full z-10 -ml-10 shadow-md flex items-center justify-center">❮</button>
        <div class="scroll-container flex items-center gap-x-5  mx-5">

            @foreach ($products as $product)
               @include('components.product_card', ['id' => $product->id, 'name' => $product->name, 'price' => number_format($product->final_price,2), 'image' => 'images/honey-1.jpg'])

            @endforeach
            {{-- @include('components.product_card', ['id' => 2, 'name' => 'Cashew', 'price' => '10,000', 'image' => 'loginSlider/image1.png'])
            @include('components.product_card', ['id' => 3, 'name' => 'Peanuts', 'price' => '8,000', 'image' => 'loginSlider/image2.png'])
            @include('components.product_card', ['id' => 4, 'name' => 'Almonds', 'price' => '12,000', 'image' => 'loginSlider/image3.png'])
            @include('components.product_card', ['id' => 5, 'name' => 'Pistachios', 'price' => '15,000', 'image' => 'loginSlider/image4.png'])
            @include('components.product_card', ['id' => 6, 'name' => 'Walnuts', 'price' => '18,000', 'image' => 'loginSlider/image4.png']) --}}

        </div>
        <button id="scrollRight" class="absolute right-0 top-1/2 -mt-4  transform -translate-y-1/2 text-gray-400 border w-12 h-12 rounded-full z-10 -mr-10 shadow-md flex items-center justify-center">❯</button>
    </div>
</div>
