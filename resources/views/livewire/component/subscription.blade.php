<div>
    {{-- In work, do what you enjoy. --}}

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
                    <!-- <form method="post" action="{{ route('register-vendor', $package->id ) }}"> -->
                        <!-- @csrf -->
                    <button wire:click="ChoosePlan({{ $package->id }})" class="bg-white text-[#1C70CD] border font-bold px-4 py-2 rounded-md w-full">Choose Plan</button>
                    <!-- </form> -->
                </div>

                @endforeach





    <div class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50" 
    
     @if(!$showPaymentModal) style="display: none;" @endif>
    <div class="bg-white rounded-lg p-8 max-w-md w-full max-h-[90vh] overflow-y-auto relative">
        <button wire:click="$toggle('showPaymentModal')" class="absolute top-4 right-4 text-gray-500 hover:text-gray-700">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>

        <!-- Payment Form -->
        <div @if($processingPayment || $paymentSuccess || $paymentError) style="display: none;" @endif>
            <h3 class="text-2xl font-bold mb-6 text-[#1C70CD]">Complete Your Payment</h3>
            
            @if($packages)

            @foreach($packages as $selectedPackage)
            <div class="mb-6 bg-gray-50 p-4 rounded-lg">
                <p class="font-medium text-gray-700">Selected Plan: <span class="font-bold text-[#1C70CD]">{{ $selectedPackage->name }}</span></p>
                <p class="font-medium text-gray-700 mt-1">Amount: <span class="font-bold text-[#1C70CD]">Tsh {{ number_format($selectedPackage->price,2) }}</span></p>
            </div>

            @endforeach

            @endif 
            
            <form wire:submit.prevent="initiatePayment">
                <div class="mb-6">
                    <label class="block text-gray-700 font-medium mb-3">Select Payment Network</label>
                    <div class="grid grid-cols-2 gap-4">
                        <label class="flex items-center border rounded-lg p-3 cursor-pointer @if($paymentNetwork == 'vodacom') border-[#1C70CD] bg-blue-50 @else border-gray-200 @endif">
                            <input name="paymentMethod" type="radio" wire:model.live="paymentNetwork" value="vodacom" class="mr-2 accent-[#1C70CD]">
                            <div>
                                <span class="font-medium">Vodacom</span>
                                <span class="block text-sm text-gray-500">M-Pesa</span>
                            </div>
                        </label>
                        <label class="flex items-center border rounded-lg p-3 cursor-pointer @if($paymentNetwork == 'tigo') border-[#1C70CD] bg-blue-50 @else border-gray-200 @endif">
                            <input name="paymentMethod"  type="radio" wire:model.live="paymentNetwork" value="tigo" class="mr-2 accent-[#1C70CD]">
                            <div>
                                <span class="font-medium">Tigo</span>
                                <span class="block text-sm text-gray-500">Tigo Pesa</span>
                            </div>
                        </label>


                        <label class="flex items-center border rounded-lg p-3 cursor-pointer @if($paymentNetwork == 'halotel') border-[#1C70CD] bg-blue-50 @else border-gray-200 @endif">
                            <input name="paymentMethod"  type="radio" wire:model.live="paymentNetwork" value="halotel" class="mr-2 accent-[#1C70CD]">
                            <div>
                                <span class="font-medium">Halotel</span>
                                <span class="block text-sm text-gray-500">Halo Pesa</span>
                            </div>
                        </label>


                        <label class="flex items-center border rounded-lg p-3 cursor-pointer @if($paymentNetwork == 'ttcl') border-[#1C70CD] bg-blue-50 @else border-gray-200 @endif">
                            <input name="paymentMethod"  type="radio" wire:model.live="paymentNetwork" value="ttcl" class="mr-2 accent-[#1C70CD]">
                            <div>
                                <span class="font-medium">TTCL </span>
                                <span class="block text-sm text-gray-500">T Pesa</span>
                            </div>
                        </label>


                    </div>
                </div>
                
                <div class="mb-6">
                    <label for="paymentPhone" class="block text-gray-700 font-medium mb-2">Mobile Number</label>
                    <div class="relative">
                        <input type="text" id="paymentPhone" wire:model="paymentPhone" placeholder="e.g. 0755123456" 
                            class="w-full px-4 py-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-[#1C70CD] @error('paymentPhone') border-red-500 @else border-gray-300 @enderror">
                        @if($paymentNetwork == 'vodacom')
                            <div class="absolute right-3 top-1/2 transform -translate-y-1/2">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="12" cy="12" r="12" fill="#E60000"/>
                                    <path d="M12 4C7.58172 4 4 7.58172 4 12C4 16.4183 7.58172 20 12 20C16.4183 20 20 16.4183 20 12C20 7.58172 16.4183 4 12 4Z" fill="#E60000"/>
                                    <path d="M9.5 7.5H14.5C15.3284 7.5 16 8.17157 16 9V15C16 15.8284 15.3284 16.5 14.5 16.5H9.5C8.67157 16.5 8 15.8284 8 15V9C8 8.17157 8.67157 7.5 9.5 7.5Z" fill="white"/>
                                </svg>
                            </div>
                        @elseif($paymentNetwork == 'tigo')
                            <div class="absolute right-3 top-1/2 transform -translate-y-1/2">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="12" cy="12" r="12" fill="#0046AD"/>
                                    <path d="M12 18C15.3137 18 18 15.3137 18 12C18 8.68629 15.3137 6 12 6C8.68629 6 6 8.68629 6 12C6 15.3137 8.68629 18 12 18Z" fill="#0046AD"/>
                                    <path d="M14.5 10.5H9.5C9.22386 10.5 9 10.7239 9 11V13C9 13.2761 9.22386 13.5 9.5 13.5H14.5C14.7761 13.5 15 13.2761 15 13V11C15 10.7239 14.7761 10.5 14.5 10.5Z" fill="white"/>
                                </svg>
                            </div>

                            @elseif($paymentNetwork == 'ttcl')
                            <div class="absolute right-3 top-1/2 transform -translate-y-1/2">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="12" cy="12" r="12" fill="#0046AD"/>
                                    <path d="M12 18C15.3137 18 18 15.3137 18 12C18 8.68629 15.3137 6 12 6C8.68629 6 6 8.68629 6 12C6 15.3137 8.68629 18 12 18Z" fill="#0046AD"/>
                                    <path d="M14.5 10.5H9.5C9.22386 10.5 9 10.7239 9 11V13C9 13.2761 9.22386 13.5 9.5 13.5H14.5C14.7761 13.5 15 13.2761 15 13V11C15 10.7239 14.7761 10.5 14.5 10.5Z" fill="white"/>
                                </svg>
                            </div>


                            @elseif($paymentNetwork == 'halotel')
                            <div class="absolute right-3 top-1/2 transform -translate-y-1/2">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="12" cy="12" r="12" fill="#0046AD"/>
                                    <path d="M12 18C15.3137 18 18 15.3137 18 12C18 8.68629 15.3137 6 12 6C8.68629 6 6 8.68629 6 12C6 15.3137 8.68629 18 12 18Z" fill="#0046AD"/>
                                    <path d="M14.5 10.5H9.5C9.22386 10.5 9 10.7239 9 11V13C9 13.2761 9.22386 13.5 9.5 13.5H14.5C14.7761 13.5 15 13.2761 15 13V11C15 10.7239 14.7761 10.5 14.5 10.5Z" fill="white"/>
                                </svg>
                            </div>


                        @endif
                    </div>
                    @error('paymentPhone') 
                        <span class="text-red-500 text-sm mt-1">{{ $message }}</span> 
                    @enderror
                    <p class="text-sm text-gray-500 mt-1">Enter the number you wish to make payment from</p>
                </div>
                
                <button type="submit" style="background:#1860A0;" class=" bg-[#1860A0] text-white font-bold px-4 py-3 rounded-lg w-full hover:bg-[#1860A0] transition-colors duration-300">
                    Confirm Payment
                </button>
            </form>
        </div>
        
        <!-- Processing State -->
        <div @if(!$processingPayment) style="display: none;" @endif class="text-center py-8">
            <div class="animate-spin rounded-full h-16 w-16 border-b-2 border-[#1C70CD] mx-auto mb-6"></div>
            <p class="text-xl font-medium mb-3">Processing your payment...</p>
            <p class="text-gray-600">Please check your phone for a payment prompt</p>
            <div class="mt-8 p-4 bg-blue-50 border border-blue-100 rounded-lg">
                <p class="text-sm text-gray-600">Don't close this window. We're waiting for confirmation from your mobile money provider.</p>
            </div>
        </div>
        
        <!-- Success State -->
        <div @if(!$paymentSuccess) style="display: none;" @endif class="text-center py-8">
            <div class="rounded-full bg-green-100 h-24 w-24 flex items-center justify-center mx-auto mb-6">
                <svg class="h-12 w-12 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                </svg>
            </div>
            <h3 class="text-2xl font-bold text-green-500 mb-4">Payment Successful!</h3>
            <p class="text-gray-600 mb-8">Your subscription has been activated.</p>
            <button wire:click="continueToDashboard" class="bg-green-500 text-white font-bold px-6 py-3 rounded-lg hover:bg-green-600 transition-colors duration-300">
                Continue to Dashboard
            </button>
        </div>
        
        <!-- Error State -->
        <div @if(!$paymentError) style="display: none;" @endif class="text-center py-8">
            <div class="rounded-full bg-red-100 h-24 w-24 flex items-center justify-center mx-auto mb-6">
                <svg class="h-12 w-12 text-red-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </div>
            <h3 class="text-2xl font-bold text-red-500 mb-4">Payment Failed</h3>
            <p class="text-gray-600 mb-8">{{ $errorMessage }}</p>
            <div class="grid grid-cols-2 gap-4">
                <button wire:click="retryPayment" class="bg-[#1C70CD] text-white font-bold px-4 py-3 rounded-lg hover:bg-[#1860A0] transition-colors duration-300">
                    Try Again
                </button>
                <button wire:click="closePaymentModal" class="bg-white text-gray-700 border border-gray-300 font-bold px-4 py-3 rounded-lg hover:bg-gray-50 transition-colors duration-300">
                    Cancel
                </button>
            </div>
        </div>
    </div>
</div>



</div>
