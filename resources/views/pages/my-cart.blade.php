<div>
    @extends('layouts.frontEnd.app')
    @section('front-end-main')
       
    <div class="max-w-7xl mx-auto bg-white p-4 sm:p-6 rounded-lg">
    <h2 class="text-xl sm:text-2xl font-semibold mb-4 sm:mb-6">My Cart</h2>
    <div class="flex flex-col lg:flex-row gap-6 lg:gap-8">
        <!-- Cart Items Section -->
        <div class="w-full lg:w-2/3">
            <!-- Cart Items -->
            @foreach ($carts as $cart)
                @include('components.cart_item', [
                    'name' => $cart->name,
                    'units' => $cart->quantity . ' ' . $cart->unit,
                    'price' => number_format($cart->price * $cart->quantity, 2),
                    'image' => 'loginSlider/image1.png',
                    'quantity' => $cart->quantity,
                    'id' => $cart->id
                ])
            @endforeach
        </div>

        <!-- Order Summary Section -->
        <div class="w-full lg:w-1/3">
            @include('components.order_summary', [
                'sub_total' => number_format($total_amount)
            ])
        </div>
    </div>
</div>




    @endsection
</div>
