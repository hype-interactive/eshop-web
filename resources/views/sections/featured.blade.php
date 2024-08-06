<div class="container mx-auto">
    <h2 class="text-2xl font-bold mb-6 mt-6"> Featured Products</h2>
    <div class="grid grid-cols-1 md:grid-cols-4 lg:grid-cols-5 gap-x-2 gap-y-10">


            @foreach ($featured_products as $featured_product )

          @include('components.product_card', [
                'id' => $featured_product->id,
                'name' => $featured_product->name,
                'price' => number_format($featured_product->final_price,2),
                'image' => 'images/honey-1.jpg',
            ])

            @endforeach

            {{-- @include('components.product_card', [
                'id' => 2,
                'name' => 'Cashew',
                'price' => '10,000',
                'image' => 'loginSlider/image1.png',
            ]) --}}
            {{-- @include('components.product_card', [
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
            ]) --}}
            {{-- @include('components.product_card', [
                'id' => 5,
                'name' => 'Pistachios',
                'price' => '15,000',
                'image' => 'loginSlider/image4.png',
            ]) --}}

    </div>

    <!-- Pagination -->

    {{ $featured_products->links() }}
<div class="mt-4 mb-4 ">  </div>

</div>
