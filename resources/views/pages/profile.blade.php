<div>
    @extends('layouts.frontEnd.app')
    @section('front-end-main')


    <div class="max-w-7xl mx-auto bg-white p-4 sm:p-6 rounded-lg">
    <h2 class="text-2xl sm:text-3xl font-semibold mb-4 sm:mb-6">My Profile</h2>
    <div class="container mx-auto flex flex-col lg:flex-row lg:space-x-8 xl:space-x-24">
        <!-- Sidebar -->
        <div class="w-full lg:w-1/4 bg-white rounded-lg shadow p-4 mb-6 lg:mb-0">
            <div class="flex items-center">
                <img class="w-12 sm:w-14 h-12 sm:h-14 rounded-full" src="{{ asset('/assets/eshopIco.jpg') }}" alt="Profile Picture">
                <div class="ml-3 sm:ml-5">
                    <h2 class="text-base sm:text-lg font-bold">{{ session('user')->full_name }}</h2>
                    <p class="text-sm sm:text-base text-gray-600">{{ session('user')->phone }}</p>
                </div>
            </div>
            <div class="flex flex-col">
                <a href="{{ route('customer-profile') }}"
                    class="mt-4 w-full text-left @if(Route::is('customer-profile')) bg-blue-50 text-blue-700 @endif py-3 font-bold px-4 rounded-lg flex items-center justify-between">
                    <span class="text-sm sm:text-base">Edit Account</span>
                    <svg class="w-4 h-4 sm:w-5 sm:h-5 ml-2" fill="none" stroke-width="1.5" stroke="currentColor"
                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5"></path>
                    </svg>
                </a>

                <a href="{{ route('customer-order') }}" class="mt-2 w-full @if(Route::is('customer-order')) bg-blue-50 text-blue-700 @endif text-left py-2 px-4 rounded-md text-sm sm:text-base">
                    Orders
                </a>

                <a href="{{ route('customer-logout') }}" class="mt-2 w-full text-left py-2 px-4 rounded-md text-sm sm:text-base">
                    Logout
                </a>
            </div>
        </div>

        <!-- Main Content -->
        <div class="w-full lg:w-3/4 bg-white rounded-lg shadow p-4 sm:p-6 lg:p-8">
            @if(Route::is('customer-profile'))
            <form action="{{ route('update-customer-info') }}" method="post">
                @csrf
                <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-6">
                    <h2 class="text-lg sm:text-xl font-semibold mb-4 sm:mb-0">Edit Account</h2>
                    <button class="px-4 bg-gray-200 rounded-md p-2 hover:text-gray-700 flex items-center text-sm sm:text-base">
                        <svg class="w-4 h-4 sm:w-5 sm:h-5 mr-2" fill="none" stroke-width="1.5" stroke="currentColor"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10">
                            </path>
                        </svg>
                        Edit
                    </button>
                </div>
                
                <div class="flex flex-col sm:flex-row items-center mb-6">
                    <img class="w-20 h-20 sm:w-24 sm:h-24 rounded-full mb-4 sm:mb-0" src="{{ asset('/assets/eshopIco.jpg') }}" alt="Profile Picture">
                    <label for="uploadFile1" class="bg-white w-full sm:w-[250px] sm:mx-4 px-4 text-gray-500 text-sm sm:text-base rounded-lg max-w-md h-12 flex items-center justify-between cursor-pointer border border-gray-200 font-[sans-serif]">
                        <span class="text-gray-200">Upload Photo (Max 1 Mb)</span>
                        <svg class="w-4 h-4 sm:w-5 sm:h-5 mr-2" fill="none" stroke-width="1.5" stroke="currentColor"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m6.75 12-3-3m0 0-3 3m3-3v6m-1.5-15H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z">
                            </path>
                        </svg>
                        <input type="file" id="uploadFile1" class="hidden" />
                    </label>
                </div>
                
                <div class="mt-6 space-y-4">
                    <div class="flex flex-col sm:flex-row sm:space-x-4 space-y-4 sm:space-y-0">
                        <div class="w-full sm:w-1/2">
                            <label class="block text-sm font-medium text-gray-700" for="name">Name</label>
                            <input type="text" name="full_name" value="{{ session('user')->full_name }}"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                        </div>
                        <div class="w-full sm:w-1/2">
                            <label class="block text-sm font-medium text-gray-700" for="phone">Phone Number</label>
                            <input readonly type="text" id="phone" value="{{ session('user')->phone }}"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                        </div>
                    </div>
                    <div class="flex flex-col sm:flex-row sm:space-x-4 space-y-4 sm:space-y-0">
                        <div class="w-full sm:w-1/2">
                            <label class="block text-sm font-medium text-gray-700" for="email">Email</label>
                            <input type="email" name="email" id="email" value="{{ session('user')->email }}"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                        </div>
                        <div class="w-full sm:w-1/2">
                            <label class="block text-sm font-medium text-gray-700" for="location">Location</label>
                            <input type="text" name="location" id="location" value="{{ session('user')->location }}"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                        </div>
                    </div>
                </div>
            </form>

            @else
                @if(session('order_list'))
                <div class="flex justify-center p-4 bg-gray-100 rounded-lg">
                    <section class="bg-white rounded-lg w-full max-w-lg mx-auto p-6 overflow-y-auto">
                        <!-- Modal Header -->
                        <div class="flex justify-between">
                            <div class="font-bold flex">
                                <div class="uppercase mr-2">Order Id</div>
                                <div>{{ session('order_id') }}</div>
                            </div>

                            <form action="{{ route('clear-order-list') }}" method="get">
                                @csrf
                                <button class="bg-gray-200 rounded-lg w-6 h-6">
                                    <svg data-slot="icon" fill="none" stroke-width="1.5" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m9.75 9.75 4.5 4.5m0-4.5-4.5 4.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"></path>
                                    </svg>
                                </button>
                            </form>
                        </div>

                        @foreach (session('order_list') as $order)
                        <!-- Modal Content -->
                        <div class="mt-4">
                            <div class="flex flex-col sm:flex-row gap-4">
                                <div class="flex-shrink-0">
                                    <img src="https://pagedone.io/asset/uploads/1705474774.png" alt="Product Image" class="w-32 h-32 object-cover rounded-md">
                                </div>
                                <div class="flex-1">
                                    <h3 class="text-lg sm:text-xl font-semibold">{{ $order->name }}</h3>
                                    <div class="mt-4">
                                        <p><span class="font-semibold">Unit:</span> {{ $order->unit }}</p>
                                        <p><span class="font-semibold">Qty:</span> {{ $order->quantity }}</p>
                                        <p><span class="font-semibold">Price:</span> {{ number_format($order->price, 2) }} TZS</p>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-6 border-t border-gray-300 pt-4">
                                <div class="flex flex-col sm:flex-row justify-between gap-4">
                                    <div>
                                        <p class="font-semibold text-gray-700">Status</p>
                                        <p class="text-green-500">{{ DB::table('orders')->where('order_id',$order->order_id)->value('status') }}</p>
                                    </div>
                                    <div>
                                        <p class="font-semibold text-gray-700">Total Price:</p>
                                        <p class="text-black">{{ number_format(($order->quantity * $order->price), 2) }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </section>
                </div>
                @else
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    <div class="flex w-full uppercase mb-4 underline font-bold text-blue-900 text-center items-center justify-center">Customer Orders</div>

                    <div class="flex flex-col sm:flex-row flex-wrap space-y-4 sm:space-y-0 items-center justify-between pb-4">
                        <div>
                            <button id="dropdownRadioButton" data-dropdown-toggle="dropdownRadio" class="inline-flex items-center text-gray-500 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 font-medium rounded-lg text-sm px-3 py-1.5" type="button">
                                <svg class="w-3 h-3 text-gray-500 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M10 0a10 10 0 1 0 10 10A10.011 10.011 0 0 0 10 0Zm3.982 13.982a1 1 0 0 1-1.414 0l-3.274-3.274A1.012 1.012 0 0 1 9 10V6a1 1 0 0 1 2 0v3.586l2.982 2.982a1 1 0 0 1 0 1.414Z"/>
                                </svg>
                                Last 30 days
                                <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                                </svg>
                            </button>
                        </div>
                        <label for="table-search" class="sr-only">Search</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 flex items-center ps-3 pointer-events-none">
                                <svg class="w-5 h-5 text-gray-500" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <input type="text" id="table-search" class="block p-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-full sm:w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500" placeholder="Search for items">
                        </div>
                    </div>

                    <div class="overflow-x-auto">
                        <table class="w-full text-sm text-left text-gray-500">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                                <tr>
                                    <th scope="col" class="px-6 py-3">Order Id</th>
                                    <th scope="col" class="px-6 py-3">Date</th>
                                    <th scope="col" class="px-6 py-3">Total Amount</th>
                                    <th scope="col" class="px-6 py-3">Status</th>
                                    <th scope="col" class="px-6 py-3">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($orders as $order)
                                <tr class="bg-white border-b hover:bg-gray-50">
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                        {{ $order->order_id }}
                                    </th>
                                    <td class="px-6 py-4">{{ $order->created_at }}</td>
                                    <td class="px-6 py-4">{{ number_format($order->total, 2) }} TZS</td>
                                    <td class="px-6 py-4">{{ $order->status }}</td>
                                    <td class="px-6 py-4">
                                        <form action="{{ route('customer-order-list') }}" method="post">
                                            @csrf
                                            <input type="hidden" value="{{ $order->order_id }}" name="order_id">
                                            <button>
                                                <div class="w-6 h-6">
                                                    <svg data-slot="icon" fill="none" stroke-width="1.5" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z"></path>
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"></path>
                                                    </svg>
                                                </div>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    {{ $orders->links() }}
                </div>
            @endif
            @endif
        </div>
    </div>
</div>



    @endsection

</div>
