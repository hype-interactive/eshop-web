<div class="card2 mx-2 rounded-lg max-w-40  overflow-hidden {{ $id }}">
    <a href="{{ route('customer-product-page') }}">
        <img src="{{ $image }}" alt="{{ $name }}"
        class="w-full h-52 object-cover rounded-lg shadow ring-2 ring-gray-300">
    </a>
    <div class="flex items-center justify-center mt-2">
        <h3 class="font-semibold text-md">{{ $name }}</h3>
    </div>
</div>