<div class="py-4 my-14" style="background-color: #FEF8EA">

    <div class="container my-4 mx-auto w-screen">
        <h2 class="text-2xl font-inter font-bold mb-2"> Shop by Category </h2>
        <div class="relative">
            <button id="scrollLeft"
                class="absolute left-0 top-1/2 transform -translate-y-1/2  text-gray-400 w-12 h-12 border-2 rounded-full z-10 -ml-8 shadow-md flex items-center justify-center">❮</button>

            {{-- <button id="scrollLeft" class="absolute left-0 top-1/2 transform -translate-y-1/2 bg-blue-500 text-white py-1 rounded-full z-10  -ml-6 shadow-md">❮</button> --}}

            <div class="font-inter overflow-x-scroll no-scrollbar space-x-5 py-1 mx-5 flex sm:relative sm:overflow-x-auto sm:space-x-0 sm:py-0 sm:mx-0">

                @foreach ($product_category as $category)

                @include('components.category_card', ['id' => $category->id, 'name' => $category->name,'image'=> 'images/billboard.png'])

                @endforeach

            </div>
            <button id="scrollRight"
                class="absolute right-0 top-1/2 transform -translate-y-1/2  text-gray-400 border w-12 h-12 rounded-full z-10 -mr-8 shadow-md flex items-center justify-center">❯</button>

        </div>
    </div>
</div>
