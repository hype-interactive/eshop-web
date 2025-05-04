<div>
    @extends('layouts.frontEnd.app')
    @section('front-end-main')
    {{-- Do your work, then step back. --}}
  
    <div class="max-w-7xl mx-auto px-4 py-8">
    <div class="flex flex-col lg:flex-row gap-6">
        <!-- Sidebar (Categories + Price Filter) -->
        <aside class="w-full lg:max-w-[250px] flex-shrink-0 space-y-6">
            <!-- Categories -->
            <div class="bg-white border rounded-md">
                <h2 class="border-b font-semibold px-4 py-2">Categories</h2>
                <ul class="space-y-2 max-h-52 overflow-y-auto px-4 py-2 text-sm">
                    <li>
                        <a href="{{ route('customer-product-page') }}" class="text-blue-600 hover:text-blue-800">All</a>
                    </li>
                    @foreach ($categories as $category)
                        <li>
                            <a href="{{ url('customer-product', $category->id) }}" class="text-blue-600 hover:text-blue-800">{{ $category->name }}</a>
                        </li>
                    @endforeach
                </ul>
            </div>

            <!-- Price Filter -->
            <div class="bg-white border rounded-md">
                <h2 class="border-b font-semibold px-4 py-2">Price</h2>
                <form method="GET" action="{{ route('customer-product-page') }}" class="p-4 space-y-4">
                    <input type="number" name="min_price" placeholder="Lowest price" class="w-full py-2 px-3 rounded-full bg-gray-100 border border-gray-200">
                    <input type="number" name="max_price" placeholder="Highest price" class="w-full py-2 px-3 rounded-full bg-gray-100 border border-gray-200">
                    <button class="w-full text-white py-2 rounded-lg hover:bg-blue-700" style="background-color: #1C70CD">Apply</button>
                </form>
            </div>
        </aside>

        <!-- Main Content -->
        <main class="flex-1">
            <!-- Header and Sorting -->
            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-6 gap-4">
                <h1 class="text-2xl font-semibold">Products</h1>
                <form id="sortForm" method="GET" action="{{ route('customer-product-page') }}">
                    <select id="sortSelect" name="sortBy" class="py-2 px-4 rounded-lg bg-gray-100 border text-sm text-gray-700 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                        <option value="" disabled selected>Sort By</option>
                        <option value="date">By Date</option>
                        <option value="price">By Price</option>
                    </select>
                </form>
                <script>
                    document.getElementById('sortSelect').addEventListener('change', function () {
                        document.getElementById('sortForm').submit();
                    });
                </script>
            </div>

            <!-- Product Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 xl:grid-cols-4 gap-6">
                @foreach ($products as $data)
                    @include('components.product_card', [
                        'id' => $data->id,
                        'name' => $data->name,
                        'price' => number_format($data->final_price, 2),
                        'image' => 'images/honey-1.jpg',
                    ])
                @endforeach
            </div>

            <!-- Pagination -->
            <div class="mt-8">
                {{ $products->links() }}
            </div>
        </main>
    </div>
</div>






    @endsection
</div>
