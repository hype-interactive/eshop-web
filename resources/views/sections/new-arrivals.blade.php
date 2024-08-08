<div class="container mx-auto px-4 sm:px-6 lg:px-8">
    <h2 class="text-2xl font-bold mb-6 mt-6">New Arrivals</h2>
    <div class="relative">
        <!-- Left Scroll Button -->
        <button id="scrollLeft"
            class="absolute left-0 top-1/2 -mt-4 transform -translate-y-1/2 text-gray-400 w-12 h-12 border-2 rounded-full z-10 -ml-10 shadow-md flex items-center justify-center">
            ❮
        </button>

        <!-- Scroll Container -->
        <div class="scroll-container flex overflow-x-auto no-scrollbar mx-2 space-x-2 md:space-x-2">
            @foreach ($products as $product)
                <!-- Product Card -->
                <div class="flex-shrink-0 w-full max-w-xs md:max-w-sm lg:max-w-md">
                    @include('components.product_card', [
                        'id' => $product->id,
                        'name' => $product->name,
                        'price' => number_format($product->final_price, 2),
                        'image' => 'images/honey-1.jpg'
                    ])
                </div>
            @endforeach
        </div>

        <!-- Right Scroll Button -->
        <button id="scrollRight"
            class="absolute right-0 top-1/2 -mt-4 transform -translate-y-1/2 text-gray-400 border w-12 h-12 rounded-full z-10 -mr-10 shadow-md flex items-center justify-center">
            ❯
        </button>
    </div>
</div>
