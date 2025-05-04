<div class="py-8 my-14 bg-[#FEF8EA]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-2xl font-inter font-bold mb-4">Shop by Category</h2>

        <div class="relative">
            <!-- Left Scroll Button -->
            <button id="scrollLeft"
                class="absolute left-2 top-1/2 transform -translate-y-1/2 bg-white text-gray-600 border w-10 h-10 rounded-full z-10 shadow-md flex items-center justify-center hover:bg-gray-100 transition">
                ❮
            </button>

            <!-- Scroll Container -->
            <div id="scrollContainer"
                class="flex overflow-x-auto scroll-smooth no-scrollbar gap-4 py-2 px-4 snap-x">
                @foreach ($product_category as $category)
                    <div class="flex-shrink-0 snap-start w-48 sm:w-52 md:w-56">
                        @include('components.category_card', [
                            'id' => $category->id,
                            'name' => $category->name,
                            'image' => 'images/billboard.png'
                        ])
                    </div>
                @endforeach
            </div>

            <!-- Right Scroll Button -->
            <button id="scrollRight"
                class="absolute right-2 top-1/2 transform -translate-y-1/2 bg-white text-gray-600 border w-10 h-10 rounded-full z-10 shadow-md flex items-center justify-center hover:bg-gray-100 transition">
                ❯
            </button>
        </div>
    </div>
</div>