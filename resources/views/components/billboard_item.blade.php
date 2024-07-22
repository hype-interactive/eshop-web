<div class="hidden duration-700 ease-in-out" data-carousel-item>
    <img src="{{ $image }}"  class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
    <div  class="absolute block w-full z-10 h-full billboard-overlay"></div>
        <div class="absolute top-40 left-32 ">
            <div class="h-fit mx-auto max-w-7xl px-6 lg:px-8 relative z-10">
                <div class="mx-auto max-w-2xl lg:mx-0">
                    <h4 class="font-bold uppercase text-yellow-400">{{ $subtitle }}</h4>
                    <h2 class=" text-6xl font-bold tracking-tight text-white sm:text-6xl">{{ $title }}</h2>
                    <p class="mt-6 text-lg leading-8 text-gray-300">{{ $content }}</p>
                </div>
                <div class="mx-auto mt-10 max-w-2xl lg:mx-0 lg:max-w-none">
                    <div
                        class="grid grid-cols-1 gap-x-8 gap-y-6 text-base font-semibold leading-7 text-white sm:grid-cols-2 md:flex lg:gap-x-10">

                        <a href="{{ route('customer-product-page') }}" type="button"
                            class="text-white block text-center bg-yellow-400 hover:bg-yellow-400 focus:ring-4 focus:ring-yellow-400 font-medium rounded-lg text-sm px-8 py-4 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-yellow-400 focus:outline-none dark:focus:ring-yellow-400">
                            Shop Now </a>
                    </div>
                </div>
            </div>
        </div>
</div>