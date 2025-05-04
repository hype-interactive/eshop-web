<div>
    @extends('layouts.frontEnd.app')
    @section('front-end-main')

    
    @foreach ($products as $product)
<div class="mx-auto px-4 sm:px-6 lg:px-8">
    <div class="max-w-7xl mx-auto py-4 sm:py-6 lg:py-8 bg-white rounded-lg">
        <div class="flex flex-col lg:flex-row gap-6 lg:gap-8">
            <!-- Product Image -->
            <div class="w-full lg:w-1/2">
                <div class="flex justify-center items-center">
                    <img src="{{ asset('images/billboard.png') }}" 
                         alt="{{ $product->name }}" 
                         class="w-full max-w-lg h-auto max-h-[28rem] rounded-lg object-cover shadow-md">
                </div>
            </div>
            
            <!-- Product Details -->
            <div class="w-full lg:w-1/2 px-4 sm:px-6 lg:px-8 py-6 lg:py-10">
                <h2 class="text-xl sm:text-2xl md:text-3xl font-bold mb-3">{{ $product->name }}</h2>
                <p class="font-semibold mb-3">
                    Status: <span style="color:#F5AD42">{{ $product->status }}</span>
                </p>
                <p class="text-xl sm:text-2xl md:text-3xl text-blue-900 font-bold mb-4 sm:mb-6">
                    Tsh {{ number_format($product->final_price, 2) }}
                </p>
                <p class="text-gray-700 mb-6 text-sm sm:text-base leading-relaxed">
                    {{ $product->description }}
                </p>
                
                <form action="{{ route('add-toCart') }}" method="post">
                    @csrf
                    <!-- Quantity Selector -->
                    <div class="mb-6">
                        <label for="quantity" class="block mb-2 text-sm sm:text-base font-medium">Quantity</label>
                        <div class="flex items-center">
                            <div class="flex items-center bg-gray-100 rounded-md overflow-hidden">
                                <button type="button" id="decrease"
                                    class="px-3 sm:px-4 py-2 text-lg sm:text-xl text-gray-600 hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-blue-500 transition-colors">
                                    -
                                </button>
                                <input type="hidden" name="product_id" value="{{ $product->id }}" />
                                <input name="quantity" type="text" id="quantity"
                                    class="w-12 sm:w-14 text-center bg-gray-100 text-gray-700 text-sm sm:text-base py-2 focus:outline-none"
                                    value="01" readonly>
                                <button type="button" id="increase"
                                    class="px-3 sm:px-4 py-2 text-lg sm:text-xl text-gray-600 hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-blue-500 transition-colors">
                                    +
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Add to Cart Button -->
                    <button type="submit" 
                            class="text-white px-6 py-3 w-full sm:w-4/5 lg:w-3/4 rounded-md text-sm sm:text-base font-medium hover:opacity-90 transition-opacity flex items-center justify-center" 
                            style="background-color: #1C70CD">
                        <i class="fas fa-shopping-cart mr-2"></i> Add to Cart
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
@endforeach

<!-- Related Products Section -->
<div class="container mx-auto mb-10 px-4 sm:px-6 lg:px-8">
    <h2 class="text-xl sm:text-2xl font-bold mb-4 sm:mb-6">Related Products</h2>
    <div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-3 sm:gap-4">
        @foreach ($relatedProducts as $data)
            <!-- Responsive Product Card -->
            <div class="bg-white rounded-lg overflow-hidden shadow-sm hover:shadow-md transition-shadow">
                <a href="{{ url('view-product', $data->id) }}">
                    <img src="{{ asset('images/honey-1.jpg') }}" 
                         alt="{{ $data->name }}" 
                         class="w-full h-32 sm:h-40 md:h-48 object-cover">
                </a>
                
                <div class="p-2 sm:p-3">
                    <h3 class="font-semibold text-sm sm:text-base truncate" title="{{ $data->name }}">
                        {{ $data->name }}
                    </h3>
                    <div class="flex justify-between items-center mt-2">
                        <p class="text-gray-600 text-sm sm:text-base font-medium">
                            Tsh {{ number_format($data->final_price, 2) }}
                        </p>
                        <form method="post" action="{{ route('add-toCart') }}" class="inline-block">
                            @csrf
                            <input type="hidden" value="{{ $data->id }}" name="product_id"/>
                            <input type="hidden" value="1" name="quantity"/>
                            <button type="submit" 
                                    class="text-white px-2 sm:px-3 py-1 sm:py-1.5 rounded text-xs sm:text-sm whitespace-nowrap" 
                                    style="background-color: #1C70CD">
                                Add To Cart
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', () => {
    const decreaseButton = document.getElementById('decrease');
    const increaseButton = document.getElementById('increase');
    const quantityInput = document.getElementById('quantity');

    function updateQuantity(change) {
        let currentValue = parseInt(quantityInput.value, 10);
        if (isNaN(currentValue)) {
            currentValue = 1;
        }
        currentValue += change;
        
        // Ensure the value stays within a range (e.g., 1 to 99)
        if (currentValue < 1) {
            currentValue = 1;
        } else if (currentValue > 99) {
            currentValue = 99;
        }
        
        // Format value with leading zeros
        quantityInput.value = currentValue.toString().padStart(2, '0');
    }

    decreaseButton.addEventListener('click', () => updateQuantity(-1));
    increaseButton.addEventListener('click', () => updateQuantity(1));
    
    // Initialize with 1 instead of 0
    quantityInput.value = '01';
});
</script>

<!-- Add Tailwind configuration if needed -->
<style>
/* Ensure proper responsive behavior */
@media (max-width: 640px) {
    .card {
        margin-left: 0;
        margin-right: 0;
    }
}
</style>


        @endsection
    </div>
