<div class="container mx-auto px-4 sm:px-6 lg:px-8">
    <h2 class="text-2xl font-bold mb-6 mt-6">New Arrivals</h2>

    <div class="relative">
        <!-- Left Scroll Button -->
        <button id="scrollLeft"
            class="absolute left-2 top-1/2 -translate-y-1/2 z-10 bg-white/80 text-gray-600 border rounded-full w-10 h-10 shadow-md flex items-center justify-center hover:bg-gray-100 transition">
            ❮
        </button>

        <!-- Scroll Container -->
        <div id="scrollContainer"
            class="flex overflow-x-auto no-scrollbar gap-4 py-2 px-6 snap-x scroll-smooth">
            @foreach ($products as $product)
                <!-- Product Card -->
                <div class="flex-shrink-0 w-64 sm:w-72 md:w-80 lg:w-96 snap-start">
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
            class="absolute right-2 top-1/2 -translate-y-1/2 z-10 bg-white/80 text-gray-600 border rounded-full w-10 h-10 shadow-md flex items-center justify-center hover:bg-gray-100 transition">
            ❯
        </button>
    </div>
</div>