<div class="card bg-white rounded-lg overflow-hidden w-full sm:max-w-52 min-h-64 h-full">
    <a href="{{ url('view-product',$id) }}">
        <img src="{{ $image }}" alt="{{ $name }}" class="w-full h-40 sm:h-60 object-cover rounded-t-lg">
    </a>

    <div class="py-2 px-2">
        <h3 class="font-semibold text-sm">{{ $name }}</h3>
        <div class="flex justify-between items-center mt-2">
            <p class="text-gray-600 text-sm font-medium">Tsh {{ $price }}</p>
            <form method="post" action="{{ route('add-toCart') }}" class="inline-block">
                @csrf
                <input type="hidden" value="{{ $id }}" name="product_id"/>
                <input type="hidden" value="1" name="quantity"/>

                <button type="submit" 
                        class="text-white px-3 py-1.5 rounded text-sm whitespace-nowrap" 
                        style="background-color: #1C70CD">
                    Add To Cart
                </button>
            </form>
        </div>
    </div>
</div>