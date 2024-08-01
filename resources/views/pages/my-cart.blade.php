<div>
    @extends('layouts.frontEnd.app')
    @section('front-end-main')
        <div class="max-w-7xl mx-auto bg-white p-6 rounded-lg">

            <h2 class="text-2xl font-semibold mb-6">My Cart</h2>
            <div class="flex flex-col lg:flex-row ">
                <div class="flex-grow">
                    <!-- Cart Items -->

                    @foreach ($carts as $cart )

                    @include('components.cart_item', [
                        'name' => $cart->name,
                        'units' => $cart->quantity.' '. $cart->unit,
                        'price' => number_format($cart->price,2),
                        'image' => 'loginSlider/image1.png',
                        'quantity'=>$cart->quantity,
                         'id'=>$cart->id
                    ])

                    @endforeach

                    {{-- @include('components.cart_item', [
                        'name' => 'Spice',
                        'units' => '45g',
                        'price' => '23,000',
                        'image' => 'loginSlider/image2.png',
                    ])
                    @include('components.cart_item', [
                        'name' => 'Spice',
                        'units' => '45g',
                        'price' => '23,000',
                        'image' => 'loginSlider/image3.png',
                    ]) --}}

                </div>

                <!-- Order Summary -->
                <div class=" w-1/3 lg:w-1/3 lg:ml-6 mt-6 lg:mt-0">
                    @include('components.order_summary',[
                        'sub_total'=>number_format($total_amount) ,

                    ])
                </div>
            </div>
        </div>
    @endsection
</div>
