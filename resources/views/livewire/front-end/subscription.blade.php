<div>
    @extends('layouts.frontEnd.app')
    @section('front-end-main')

    <section class="relative bg-cover bg-top h-[100px]" style="background-image: url('/subscription/subscription.png');">
        <div class="absolute inset-0 bg-black opacity-50"></div>
        <div class="relative z-10 flex items-center justify-center h-full text-center text-white">
            <div class=" ">
                <h1 class="text-4xl font-bold mb-4">Join E-Shop as a Vendor</h1>
                <p class="text-lg">Expand your reach and grow your business by listing your products on E-Shop.  <br> Enjoy a seamless experience with our robust platform designed to help local manufacturers succeed.</p>
            </div>
        </div>
    </section>

    <section class="py-12">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-8">Subscription Plans</h2>
            <div class="flex flex-wrap justify-center justify-between ">

                <!-- Basic Plan -->
                <div class="w-full md:w-1/3 bg-white rounded-lg shadow p-6">
                    <h3 class="text-xl font-bold mb-4">Basic</h3>
                    <p class="text-gray-600 mb-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    <p class="text-4xl font-bold mb-4">Tsh 1000 <span class="text-lg font-normal">/mo</span></p>
                    <h4 class="text-lg font-bold mb-2">What's included:</h4>
                    <ul class="mb-6">
                        <li class="flex items-center mb-2"><span class="text-green-500 mr-2">✔</span> List up to 50 products</li>
                        <li class="flex items-center mb-2"><span class="text-green-500 mr-2">✔</span> Advanced Statistic</li>
                        <li class="flex items-center mb-2"><span class="text-green-500 mr-2">✔</span> Basic support</li>
                        <li class="flex items-center mb-2"><span class="text-green-500 mr-2">✔</span> Access to vendor dashboard</li>
                        <li class="flex items-center mb-2 text-gray-400"><span class="mr-2">✘</span> Advanced analytics/reporting</li>
                        <li class="flex items-center mb-2 text-gray-400"><span class="mr-2">✘</span> Featured vendor placement</li>
                    </ul>
                    <button class="bg-blue-500 text-white px-4 py-2 rounded-md w-full">Chose Plan</button>
                </div>

                <!-- Standard Plan -->
                <div class="w-full md:w-1/3 bg-white rounded-lg shadow p-6 border-4 border-blue-500">
                    <h3 class="text-xl font-bold mb-4">Standard</h3>
                    <p class="text-gray-600 mb-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    <p class="text-4xl font-bold mb-4">Tsh 6000 <span class="text-lg font-normal">/mo</span></p>
                    <h4 class="text-lg font-bold mb-2">What's included:</h4>
                    <ul class="mb-6">
                        <li class="flex items-center mb-2"><span class="text-green-500 mr-2">✔</span> List up to 200 products</li>
                        <li class="flex items-center mb-2"><span class="text-green-500 mr-2">✔</span> Advanced Statistic</li>
                        <li class="flex items-center mb-2"><span class="text-green-500 mr-2">✔</span> Priority support</li>
                        <li class="flex items-center mb-2"><span class="text-green-500 mr-2">✔</span> Access to vendor dashboard</li>
                        <li class="flex items-center mb-2 text-gray-400"><span class="mr-2">✘</span> Lorem-ipsum dolor-sit amet</li>
                        <li class="flex items-center mb-2 text-gray-400"><span class="mr-2">✘</span> Lorem-ipsum dolor-sit amet</li>
                    </ul>
                    <button class="bg-blue-500 text-white px-4 py-2 rounded-md w-full">Chose Plan</button>
                </div>

                <!-- Premium Plan -->
                <div class="w-full md:w-1/3 bg-white rounded-lg shadow p-6">
                    <h3 class="text-xl font-bold mb-4">Premium</h3>
                    <p class="text-gray-600 mb-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    <p class="text-4xl font-bold mb-4">Tsh 2100 <span class="text-lg font-normal">/mo</span></p>
                    <h4 class="text-lg font-bold mb-2">What's included:</h4>
                    <ul class="mb-6">
                        <li class="flex items-center mb-2"><span class="text-green-500 mr-2">✔</span> Unlimited product listings</li>
                        <li class="flex items-center mb-2"><span class="text-green-500 mr-2">✔</span> Dedicated account manager</li>
                        <li class="flex items-center mb-2"><span class="text-green-500 mr-2">✔</span> Access to vendor dashboard</li>
                        <li class="flex items-center mb-2"><span class="text-green-500 mr-2">✔</span> Advanced analytics/reporting</li>
                        <li class="flex items-center mb-2"><span class="text-green-500 mr-2">✔</span> Featured vendor placement</li>
                        <li class="flex items-center mb-2"><span class="text-green-500 mr-2">✔</span> Directory Listing</li>
                    </ul>
                    <button class="bg-blue-500 text-white px-4 py-2 rounded-md w-full">Chose Plan</button>
                </div>
            </div>
        </div>
    </section>





@endsection

</div>
