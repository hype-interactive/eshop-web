<div>
    @extends('layouts.frontEnd.app')
    @section('front-end-main')


    <section class="relative bg-cover bg-top h-[72vh]" style="background-image: url('/subscription/subscription.png');">
        <div class="absolute inset-0 bg-black opacity-50"></div>
        <div class="relative z-10 flex items-center justify-center h-full text-center text-white">
            <div>
                <h1 class="text-4xl font-bold mb-4">Join E-Shop as a Vendor</h1>
                <p class="text-lg">Expand your reach and grow your business by listing your products on E-Shop. <br>
                    Enjoy a seamless experience with our robust platform designed to help local manufacturers succeed.
                </p>
            </div>
        </div>
    </section>

    <section class="py-12">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-8">Subscription Plans</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Basic Plan -->
                <div class="bg-white rounded-3xl border shadow p-6">
                    <h3 class="text-xl font-bold mb-4">Basic</h3>
                    <p class="text-gray-600 mb-4">Lorem Ipsum is simply dummy text of the printing and typesetting
                        industry.</p>
                    <p class="text-4xl font-bold mb-4">Tsh 1000 <span class="text-lg font-normal">/mo</span></p>
                    <h4 class="text-lg font-bold mb-2">What's included:</h4>
                    <ul class="mb-6">
                        <li class="flex items-center mb-2">
                            <svg data-slot="icon" fill="#189009" class="w-6 h-6 text-[#F5AD42]" stroke-width="1.5" stroke="white" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"></path>
                            </svg> List up to 50 products
                        </li>
                        <li class="flex items-center mb-2">
                            <svg data-slot="icon" fill="#189009" class="w-6 h-6 text-[#F5AD42]" stroke-width="1.5" stroke="white" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"></path>
                            </svg> Advanced Statistic
                        </li>
                        <li class="flex items-center mb-2">
                            <svg data-slot="icon" fill="#189009" class="w-6 h-6 text-[#F5AD42]" stroke-width="1.5" stroke="white" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"></path>
                            </svg> Basic support
                        </li>
                        <li class="flex items-center mb-2">
                            <svg data-slot="icon" fill="#189009" class="w-6 h-6 text-[#F5AD42]" stroke-width="1.5" stroke="white" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"></path>
                            </svg> Access to vendor dashboard
                        </li>
                        <li class="flex items-center mb-2 text-gray-400">
                            <svg data-slot="icon" fill="#189009" class="w-6 h-6 text-[#F5AD42]" stroke-width="1.5" stroke="white" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"></path>
                            </svg> Advanced analytics/reporting
                        </li>
                        <li class="flex items-center mb-2 text-gray-400">
                            <svg data-slot="icon" fill="#189009" class="w-6 h-6 text-[#F5AD42]" stroke-width="1.5" stroke="white" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"></path>
                            </svg> Featured vendor placement
                        </li>
                    </ul>
                    <button class="bg-white text-[#1C70CD] border font-bold px-4 py-2 rounded-md w-full">Choose Plan</button>
                </div>

                <!-- Standard Plan -->
                <div class="bg-[#1C70CD] -mt-6 mb-6 rounded-3xl shadow p-6 border-2 border-[#F5AD42]">
                    <h3 class="text-xl text-white font-bold mb-4">Standard</h3>
                    <p class="text-gray-600 text-white mb-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    <p class="text-4xl text-white font-bold mb-4">Tsh 6000 <span class="text-lg font-normal">/mo</span></p>
                    <h4 class="text-lg text-white font-bold mb-2">What's included:</h4>
                    <ul class="mb-6">
                        <li class="flex items-center text-white mb-2">
                            <svg data-slot="icon" fill="#189009" class="w-6 h-6 text-[#F5AD42]" stroke-width="1.5" stroke="white" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"></path>
                            </svg> List up to 200 products
                        </li>
                        <li class="flex items-center text-white mb-2">
                            <svg data-slot="icon" fill="#189009" class="w-6 h-6 text-[#F5AD42]" stroke-width="1.5" stroke="white" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"></path>
                            </svg> Advanced Statistic
                        </li>
                        <li class="flex items-center text-white mb-2">
                            <svg data-slot="icon" fill="#189009" class="w-6 h-6 text-[#F5AD42]" stroke-width="1.5" stroke="white" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"></path>
                            </svg> Priority support
                        </li>
                        <li class="flex items-center text-white mb-2">
                            <svg data-slot="icon" fill="#189009" class="w-6 h-6 text-[#F5AD42]" stroke-width="1.5" stroke="white" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"></path>
                            </svg> Access to vendor dashboard
                        </li>
                        <li class="flex items-center mb-2 text-gray-400">
                            <svg data-slot="icon" fill="#189009" class="w-6 h-6 text-[#F5AD42]" stroke-width="1.5" stroke="white" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"></path>
                            </svg> Advanced analytics/reporting
                        </li>
                        <li class="flex items-center mb-2 text-gray-400">
                            <svg data-slot="icon" fill="#189009" class="w-6 h-6 text-[#F5AD42]" stroke-width="1.5" stroke="white" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"></path>
                            </svg> Featured vendor placement
                        </li>
                    </ul>
                    <button class="bg-[#1C70CD] text-white border font-bold px-4 py-2 rounded-md w-full">Choose Plan</button>
                </div>

                <!-- Premium Plan -->
                <div class="bg-white rounded-3xl border shadow p-6">
                    <h3 class="text-xl font-bold mb-4">Premium</h3>
                    <p class="text-gray-600 mb-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    <p class="text-4xl font-bold mb-4">Tsh 12000 <span class="text-lg font-normal">/mo</span></p>
                    <h4 class="text-lg font-bold mb-2">What's included:</h4>
                    <ul class="mb-6">
                        <li class="flex items-center mb-2">
                            <svg data-slot="icon" fill="#189009" class="w-6 h-6 text-[#F5AD42]" stroke-width="1.5" stroke="white" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"></path>
                            </svg> List up to 500 products
                        </li>
                        <li class="flex items-center mb-2">
                            <svg data-slot="icon" fill="#189009" class="w-6 h-6 text-[#F5AD42]" stroke-width="1.5" stroke="white" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"></path>
                            </svg> Advanced Statistic
                        </li>
                        <li class="flex items-center mb-2">
                            <svg data-slot="icon" fill="#189009" class="w-6 h-6 text-[#F5AD42]" stroke-width="1.5" stroke="white" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"></path>
                            </svg> Premium support
                        </li>
                        <li class="flex items-center mb-2">
                            <svg data-slot="icon" fill="#189009" class="w-6 h-6 text-[#F5AD42]" stroke-width="1.5" stroke="white" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"></path>
                            </svg> Access to vendor dashboard
                        </li>
                        <li class="flex items-center mb-2 text-gray-400">
                            <svg data-slot="icon" fill="#189009" class="w-6 h-6 text-[#F5AD42]" stroke-width="1.5" stroke="white" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"></path>
                            </svg> Advanced analytics/reporting
                        </li>
                        <li class="flex items-center mb-2 text-gray-400">
                            <svg data-slot="icon" fill="#189009" class="w-6 h-6 text-[#F5AD42]" stroke-width="1.5" stroke="white" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"></path>
                            </svg> Featured vendor placement
                        </li>
                    </ul>
                    <button class="bg-white text-[#1C70CD] border font-bold px-4 py-2 rounded-md w-full">Choose Plan</button>
                </div>


                @foreach ($packages as $package)


                      <div class="bg-white rounded-3xl border shadow p-6">
                    <h3 class="text-xl font-bold mb-4"> {{ $package->name }}</h3>
                    <p class="text-gray-600 mb-4"> {{ $package->description }}</p>
                    <p class="text-4xl font-bold mb-4">Tsh {{ number_format($package->price,2) }} <span class="text-lg font-normal">/mo</span></p>
                    <h4 class="text-lg font-bold mb-2">What's included:</h4>
                    <ul class="mb-6">

                        @foreach (DB::table('services')->whereIn('id',DB::table('package_has_services')->where('package_id',$package->id)->pluck('service_id')->toArray())->get() as  $service)


                        <li class="flex items-center mb-2">
                            <svg data-slot="icon" fill="#189009" class="w-6 h-6 text-[#F5AD42]" stroke-width="1.5" stroke="white" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"></path>
                            </svg> {{ $service->name }}
                        </li>

                        @endforeach

                        @foreach (DB::table('services')->whereNotIn('id',DB::table('package_has_services')->where('package_id',$package->id)->pluck('service_id')->toArray())->get() as  $not_included_service)

                        <li class="flex items-center mb-2 text-gray-400">
                            <svg data-slot="icon" fill="#636360" class="w-6 h-6 text-[#F5AD42]" stroke-width="1.5" stroke="white" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"></path>
                            </svg> {{ $not_included_service->name }}
                        </li>

                          @endforeach
                    </ul>
                    <form method="post" action="{{ route('register-vendor', $package->id ) }}">
                        @csrf
                    <button class="bg-white text-[#1C70CD] border font-bold px-4 py-2 rounded-md w-full">Choose Plan</button>
                    </form>
                </div>

                @endforeach



            </div>
        </div>
    </section>




    @endsection

</div>
