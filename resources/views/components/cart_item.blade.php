

<div class="mb-4 flex items-center border-b pb-4">
    <img src="{{ $image }}" alt="{{ $name }}"
        class="w-32 h-32 rounded-md border right-3 border-gray-150 object-cover mr-4"> <!-- Adjusted image size -->
    <div class="flex-grow">
        <h3 class=" font-semibold mb-2">{{ $name }}</h3>
        <p class="text-gray-400 mb-2">Unit : {{ $units }}</p>
        <form method="post" action="{{ route('remove-cart-item') }}">
            <input type="hidden" name="id" value="{{ $id }}" />
            @csrf

            <button class="text-red-500 flex hover:text-red-700 ">
            <svg data-slot="icon" class="w-5 mr-2" fill="none" stroke-width="1.5"
                stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0">
                </path>
            </svg>

            <span> Remove </span>

        </button>
        </form>

    </div>
    <div class="flex flex-col ">
        <p class="text-left text-sm mb-2">Quantity </p>
        <form action ="{{ route('change-product-quantity') }} " method="post">
            @csrf
            <input type="hidden" name="id" value="{{ $id }}" />

        <div class="flex items-center bg-gray-100 px-2 py-1 mt-2 rounded-md">

            <button id="decrease"
                class="px-4 py-1 border border-gray-300 rounded-md bg-gray-100 text-gray-600 hover:bg-gray-200 focus:outline-none focus:ring-2 shadow-md  focus:ring-black-500">-</button>
            <input  name="quantity" type="text" id="quantity" numeber
                class="w-14 border-none  mx-1  bg-gray-100 text-center  text-gray-700"
                value="{{ $quantity }}">
            <button id="increase"
                class="px-4 py-1 border border-gray-300 rounded-md bg-gray-100   text-gray-600 hover:bg-gray-200 focus:outline-none focus:ring-2 shadow-md focus:ring-black-500">+</button>


        </div>
    </form>
        <p class="mt-2 font-semibold">Tsh {{ $price }}</p>
    </div>


    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const decreaseButton = document.getElementById('decrease');
            const increaseButton = document.getElementById('increase');
            const quantityInput = document.getElementById('quantity');

            // Function to update the quantity
            function updateQuantity(change) {
                let currentValue = parseInt(quantityInput.value, 10);
                if (isNaN(currentValue)) {
                    currentValue = 0;
                }
                currentValue += change;
                // Ensure the value stays within a range (e.g., 00 to 99)
                if (currentValue < 0) {
                    currentValue = 0;
                } else if (currentValue > 99) {
                    currentValue = 99;
                }
                // Format value with leading zeros
                quantityInput.value = currentValue.toString().padStart(2, '0');
            }

            // Event listeners for buttons
            decreaseButton.addEventListener('click', () => updateQuantity(-1));
            increaseButton.addEventListener('click', () => updateQuantity(1));
        });
    </script>



</div>
