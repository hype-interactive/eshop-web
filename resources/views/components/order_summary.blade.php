<div class="border shadow rounded-lg ">
    <div class=" p-6 rounded-lg">
        <h3 class="text-lg font-semibold mb-4">Order Summary</h3>
        <div class="mb-5 flex gap-2 ">
            <input type="text" id="voucher"
                class="bg-gray-50  border border-gray-300  text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white"
                placeholder="Enter voucher code">
            <button type="button"
                class="py-2.5 px-5 me-2  text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100    ">
                Apply </button>

        </div>
        <div class="flex  justify-between mb-2">
            <p class="text-gray-600 text-sm">Sub Total</p>
            <p>Tsh {{ $sub_total }}</p>
        </div>
        <div class="flex text-gray-200  justify-between mb-4">
            <p class="text-gray-600 text-sm">Discount (10%)</p>
            <p class="text-green-500">Tsh 0</p>
        </div>
        <div class="flex  justify-between text-lg font-semibold mb-4">
            <p>Grand Total</p>
            <p>Tsh {{ $sub_total }}</p>
        </div>

        @if(session('paymentOrder'))

        <button  class="w-full block text-center text-white py-2 mt-5 rounded-lg" style="background-color: #1C70CD">Checkout
            Now
        </button>

        @else

        <a href="{{ route('payments') }}" class="w-full block text-center text-white py-2 mt-5 rounded-lg" style="background-color: #1C70CD">Checkout
            Now
        </a>
        @endif


    </div>
</div>
<div class="mt-6 text-start">
    <p class=" mb-2 font-semibold">Supported Payment Method</p>
    <img src="{{ asset('payment/selcome.png') }}" alt="Payment Method" class="w-16 h-10">
</div>
