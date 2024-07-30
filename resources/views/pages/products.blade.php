<div>
    @extends('layouts.frontEnd.app')
    @section('front-end-main')
    {{-- Do your work, then step back. --}}
    <div class="container mx-auto px-4 py-8">
        <div class="flex  flex-row">
            <!-- Sidebar -->
            <div class="w-1/5 pr-4 mb-8 lg:mb-0 lg:h-screen lg:sticky lg:top-0 overflow-y-auto mr-6">
                <div class="bg-white border mb-8 rounded-md">
                    <h2 class=" border-b  font-semibold mb-4 px-4 py-2">Categories</h2>
                    <ul class="space-y-2 overflow-y-auto h-[200px] overflow-x-auto px-4">

                        <li><a href="{{ route('customer-product-page') }}" class="block text-blue-600 text-sm hover:text-blue-800">All</a></li>

                        @foreach ($categories as $category )
                        <li><a href="{{ url('customer-product',$category->id) }}" class="block text-blue-600 text-sm hover:text-blue-800"> {{ $category->name }}</a></li>

                        @endforeach

                    </ul>
                </div>
                <div class="bg-white border mb-8 rounded-md">
                    <h2 class=" border-b  font-semibold mb-4 px-4 py-2">Price</h2>
                    <div class="space-y-4 p-4">
                        <input type="number" placeholder="Lowest price" class="w-full py-3 px-4 border rounded-full border-gray-200 bg-gray-100  ">
                        <input type="number" placeholder="Highest price" class="w-full py-3 px-4 border border-gray-200  bg-gray-100 rounded-full ">
                        <button class="w-full  text-white py-2 rounded-lg hover:bg-blue-700" style="background-color: #1C70CD" >Apply</button>
                    </div>
                </div>
            </div>
            <!-- Main Content -->
            <div class="w-4/5">
                <div class="flex justify-between items-center mb-8">
                    <h1 class="text-2xl font-semibold">Products</h1>
                    <div class="relative">
                        <button class=" border text-gray-700 py-2 px-4 rounded-lg bg-gray-100 flex items-center text-sm">
                            Sort By
                            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <!-- Sort options would go here -->
                    </div>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                    {{-- @for ($i = 0; $i < 3; $i++) --}}
         @foreach ($products as $data )


             @include('components.product_card', [
                'id' => $data->id,
                'name' => $data->name,
                'price' => $data->final_price,
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
            ]) --}}
            {{-- @include('components.product_card', [
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
        {{-- @endfor --}}
                </div>

                {{ $products->links() }}
            </div>
        </div>
    </div>



    @endsection
</div>
