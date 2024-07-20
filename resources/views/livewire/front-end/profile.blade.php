<div>
    @extends('layouts.frontEnd.app')
    @section('front-end-main')
        <div class="max-w-7xl mx-auto bg-white p-6 rounded-lg">
            <h2 class="text-2xl font-bold mb-6">My Profile</h2>
            <div class="container mx-auto flex space-x-24">
                <!-- Sidebar -->
                <div class="w-1/4 bg-white h-fit rounded-lg shadow p-4">
                    <div class="flex flex-col items-center">
                        <img class="w-24 h-24 rounded-full" src="{{ asset('profile/profile.png') }}" alt="Profile Picture">
                        <h2 class="mt-4 text-lg font-bold">John Miller</h2>
                        <p class="text-gray-600">+255 763 678 910</p>
                        <button
                            class="mt-4 w-full text-left bg-blue-50 text-blue-700 py-3 font-bold px-4 rounded-lg flex items-center justify-between">
                            Edit Account
                            <svg class="w-5 h-5 ml-2" fill="none" stroke-width="1.5" stroke="currentColor"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5"></path>
                            </svg>
                        </button>



                        <button class="mt-2 w-full text-left text-gray-700 py-2 px-4 rounded-md">
                            Orders
                        </button>
                    </div>
                </div>
                <!-- Edit Account Form -->
                <div class="w-3/4 bg-white rounded-lg shadow p-8">
                    <div class="flex items-center  justify-between mb-6">
                        <h2 class="text-xl font-bold">Edit Account</h2>

                        <button class=" bg-gray-200 rounded-2xl p-2 hover:text-gray-700 flex items-center">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke-width="1.5" stroke="currentColor"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10">
                                </path>
                            </svg>
                            Edit
                        </button>

                    </div>
                    <div class="flex ">
                        <img class="w-24 h-24 rounded-full mb-4" src="{{ asset('profile/profile.png') }}"
                            alt="Profile Picture">


                        <label for="uploadFile1"
                            class="bg-white w-[250px] mx-4 mt-6 text-gray-500  text-base rounded-lg max-w-md h-12 flex items-center justify-between cursor-pointer border border-gray-200 font-[sans-serif]">

                            <span class="text-gray-200"> Upload Photo (Max 1 Mb) </span>
                            <svg class="w-5 h-5 mr-2" fill="none" stroke-width="1.5" stroke="currentColor"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m6.75 12-3-3m0 0-3 3m3-3v6m-1.5-15H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z">
                                </path>
                            </svg>
                            <input type="file" id="uploadFile1" class="hidden" />
                        </label>


                    </div>
                    <div class="mt-6 space-y-4">
                        <div class="flex space-x-4">
                            <div class="w-1/2">
                                <label class="block text-sm font-medium text-gray-700" for="name">Name</label>
                                <input type="text" id="name" value="John Miller Pharmacy"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                            </div>
                            <div class="w-1/2">
                                <label class="block text-sm font-medium text-gray-700" for="phone">Phone Number</label>
                                <input type="text" id="phone" value="+255 763 123 456"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                            </div>
                        </div>
                        <div class="flex space-x-4">
                            <div class="w-1/2">
                                <label class="block text-sm font-medium text-gray-700" for="email">Email</label>
                                <input type="email" id="email" value="john@gmail.com"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                            </div>
                            <div class="w-1/2">
                                <label class="block text-sm font-medium text-gray-700" for="location">Location</label>
                                <input type="text" id="location" value="Kijitonyama, Dar Es Salaam"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
</div>
