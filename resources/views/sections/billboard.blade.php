<!-- Optimized Carousel Section -->
<div id="default-carousel" class="relative w-full" data-carousel="slide">
    <!-- Carousel wrapper -->
    <div class="relative overflow-hidden h-64 sm:h-80 md:h-96 lg:h-[500px] xl:h-[600px]">
        <!-- Carousel items -->
        @foreach ($billboard as $index => $value)
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{ asset('images/coffee.jpg') }}" 
                     class="absolute block w-full h-full object-cover" 
                     alt="{{ $value->name }}">
                <!-- Black gradient from left to center -->
                <div class="absolute inset-0 bg-gradient-to-r from-black to-transparent" style="background: linear-gradient(to right, black, rgba(0,0,0,0.6) 40%, transparent 70%);"></div>
                
                <!-- Content positioned away from scroll buttons -->
                <div class="absolute top-1/2 left-12 sm:left-16 md:left-24 lg:left-32 xl:left-40 transform -translate-y-1/2 z-20 max-w-lg sm:max-w-xl md:max-w-2xl lg:max-w-3xl">
                    <h4 class="font-bold uppercase text-yellow-400 text-sm sm:text-base md:text-lg drop-shadow-xl">
                        UP TO 30% OFF TODAY
                    </h4>
                    <h2 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl xl:text-7xl font-bold tracking-tight text-white mt-2 drop-shadow-xl">
                        {{ $value->name }}
                    </h2>
                    <p class="mt-4 sm:mt-6 text-base sm:text-lg md:text-xl lg:text-2xl leading-relaxed text-gray-100 drop-shadow-xl pr-12">
                        {{ $value->description }}
                    </p>
                    <div class="mt-8 sm:mt-10">
                        <a href="{{ route('customer-product-page') }}" 
                           class="inline-block text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-400 font-medium rounded-lg text-base sm:text-lg px-8 sm:px-10 py-4 transition-colors duration-300 drop-shadow-lg">
                            Shop Now
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <!-- Slider indicators -->
    <div class="absolute z-30 flex -translate-x-1/2 bottom-2 sm:bottom-3 md:bottom-5 left-1/2 space-x-1 sm:space-x-2 md:space-x-3">
        @foreach ($billboard as $index => $value)
            <button type="button" 
                    class="w-1.5 h-1.5 sm:w-2 sm:h-2 md:w-3 md:h-3 rounded-full bg-gray-400 hover:bg-yellow-400 {{ $index === 0 ? 'bg-yellow-400' : '' }}" 
                    aria-current="{{ $index === 0 ? 'true' : 'false' }}" 
                    aria-label="Slide {{ $index + 1 }}" 
                    data-carousel-slide-to="{{ $index }}">
            </button>
        @endforeach
    </div>

    <!-- Slider controls -->
    <button type="button" 
            class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-1 sm:px-2 md:px-4 cursor-pointer group focus:outline-none" 
            data-carousel-prev>
        <span class="inline-flex items-center justify-center w-6 h-6 sm:w-8 sm:h-8 md:w-10 md:h-10 rounded-full bg-white/20 hover:bg-white/30 group-focus:ring-2 sm:group-focus:ring-4 group-focus:ring-white/50 group-focus:outline-none transition-all duration-300">
            <svg class="w-2 h-2 sm:w-3 sm:h-3 md:w-4 md:h-4 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4" />
            </svg>
            <span class="sr-only">Previous</span>
        </span>
    </button>

    <button type="button" 
            class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-1 sm:px-2 md:px-4 cursor-pointer group focus:outline-none" 
            data-carousel-next>
        <span class="inline-flex items-center justify-center w-6 h-6 sm:w-8 sm:h-8 md:w-10 md:h-10 rounded-full bg-white/20 hover:bg-white/30 group-focus:ring-2 sm:group-focus:ring-4 group-focus:ring-white/50 group-focus:outline-none transition-all duration-300">
            <svg class="w-2 h-2 sm:w-3 sm:h-3 md:w-4 md:h-4 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
            </svg>
            <span class="sr-only">Next</span>
        </span>
    </button>
</div>

<!-- Auto-slide JavaScript -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const carousel = document.getElementById('default-carousel');
    let autoSlideInterval;
    let currentIndex = 0;
    const items = carousel.querySelectorAll('[data-carousel-item]');
    const indicators = carousel.querySelectorAll('[data-carousel-slide-to]');
    
    // Function to update indicators
    function updateIndicators(index) {
        indicators.forEach((indicator, i) => {
            if (i === index) {
                indicator.classList.add('bg-yellow-400');
                indicator.classList.remove('bg-gray-400');
                indicator.setAttribute('aria-current', 'true');
            } else {
                indicator.classList.remove('bg-yellow-400');
                indicator.classList.add('bg-gray-400');
                indicator.setAttribute('aria-current', 'false');
            }
        });
    }
    
    // Function to show specific slide
    function showSlide(index) {
        // Hide all slides
        items.forEach(item => {
            item.classList.add('hidden');
        });
        
        // Show target slide
        if (items[index]) {
            items[index].classList.remove('hidden');
            currentIndex = index;
            updateIndicators(index);
        }
    }
    
    // Show first slide initially
    showSlide(0);
    
    // Function to start auto-sliding
    function startAutoSlide() {
        stopAutoSlide(); // Clear any existing interval
        autoSlideInterval = setInterval(() => {
            let nextIndex = (currentIndex + 1) % items.length;
            showSlide(nextIndex);
        }, 5000); // Slide every 5 seconds
    }
    
    // Function to stop auto-sliding
    function stopAutoSlide() {
        if (autoSlideInterval) {
            clearInterval(autoSlideInterval);
        }
    }
    
    // Start auto-sliding when page loads
    startAutoSlide();
    
    // Pause auto-sliding when user hovers over carousel
    carousel.addEventListener('mouseenter', stopAutoSlide);
    carousel.addEventListener('mouseleave', startAutoSlide);
    
    // Handle click on indicators
    indicators.forEach((indicator, index) => {
        indicator.addEventListener('click', () => {
            showSlide(index);
            stopAutoSlide();
            setTimeout(startAutoSlide, 5000); // Resume after 5 seconds
        });
    });
    
    // Handle next/prev buttons
    const prevButton = carousel.querySelector('[data-carousel-prev]');
    const nextButton = carousel.querySelector('[data-carousel-next]');
    
    if (prevButton) {
        prevButton.addEventListener('click', () => {
            let prevIndex = (currentIndex - 1 + items.length) % items.length;
            showSlide(prevIndex);
            stopAutoSlide();
            setTimeout(startAutoSlide, 5000);
        });
    }
    
    if (nextButton) {
        nextButton.addEventListener('click', () => {
            let nextIndex = (currentIndex + 1) % items.length;
            showSlide(nextIndex);
            stopAutoSlide();
            setTimeout(startAutoSlide, 5000);
        });
    }
    
    // Clean up on page unload
    window.addEventListener('beforeunload', stopAutoSlide);
});
</script>