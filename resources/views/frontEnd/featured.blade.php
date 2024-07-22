<div class="container mx-auto">
    <h2 class="text-2xl font-bold mb-6 mt-6"> Featured Products</h2>
    <div class="grid grid-cols-1 md:grid-cols-4 lg:grid-cols-5 gap-x-2 gap-y-10">
        @for ($i = 0; $i < 3; $i++)
            @include('components.product_card', [
                'id' => 1,
                'name' => 'Bee Honey',
                'price' => '14,000',
                'image' => 'images/honey-1.jpg',
            ])
            @include('components.product_card', [
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
            ])
            @include('components.product_card', [
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
        @endfor

    </div>

    <!-- Pagination -->
    <div class="flex justify-center mt-20 mb-10">
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
