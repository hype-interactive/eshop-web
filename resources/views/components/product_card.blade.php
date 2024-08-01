<div class="card bg-white  rounded-lg overflow-hidden max-w-52 min-h-64 h-full">
    <a href="{{ url('view-product',$id) }}">
        <img src="{{ $image }}" alt="{{ $name }}" class="w-full h-60 object-cover rounded-lg">
    </a>



    <div class="py-2">
        <h3 class="font-semibold text-sm">{{ $name }}</h3>
        <div class="flex justify-between items-end mt-2">
            <p class="text-gray-600 ">Tsh {{ $price }}</p>
            <form method="post" action="{{ route('add-toCart') }}">
                @csrf
                <input type="hidden" value="{{ $id }}" name="product_id"/>
                <input type="hidden" value="1" name="quantity"/>

                @csrf
                       <button  class=" text-white px-2 py-2 rounded text-sm" style="background-color: #1C70CD">Add
                To Cart</button>

                {{-- onclick="{{ $id }}" --}}
            </form>
        </div>
    </div>
</div>
