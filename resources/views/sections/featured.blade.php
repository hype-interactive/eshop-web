<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <h2 class="text-2xl font-bold mb-6 mt-6">Featured Products</h2>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-6">
        @foreach ($featured_products as $featured_product)
            @include('components.product_card', [
                'id' => $featured_product->id,
                'name' => $featured_product->name,
                'price' => number_format($featured_product->final_price, 2),
                'image' => 'images/honey-1.jpg',
            ])
        @endforeach
    </div>

    <!-- Pagination -->
    <div class="mt-10 flex justify-center">
        {{ $featured_products->links() }}
    </div>
</div>
