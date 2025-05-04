<div>
    <nav class="bg-white border-b border-gray-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16 md:h-20">
                <!-- Logo -->
                <div class="flex items-center flex-shrink-0">
                    <a href="{{ route('customer-welcome-page') }}" class="flex items-center">
                        <img class="h-10 md:h-16 w-auto" src="{{ asset('loginSlider/icon.png') }}" alt="eShops Logo">
                    </a>
                </div>
                
                <!-- Search - hidden on mobile, shown on md+ -->
                <div class="hidden md:flex md:w-2/3 md:items-center">
                    <form class="flex-grow flex items-center rounded-full border border-gray-300 m-0">
                        <!-- Categories dropdown -->
                        <button id="dropdown-button" data-dropdown-toggle="dropdownw"
                            class="flex-shrink-0 z-10 inline-flex items-center py-2.5 px-4 text-sm font-medium text-gray-900 bg-gray-50 border-none rounded-l-full hover:bg-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100"
                            type="button">
                            All categories
                            <svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="m1 1 4 4 4-4" />
                            </svg>
                        </button>

                        <div id="dropdownw"
                            class="z-50 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44">
                            <ul class="py-2 text-sm text-gray-700" aria-labelledby="dropdown-button">
                                @foreach (DB::table('product_categories')->get() as $category)
                                <li>
                                    <a href="{{ url('customer-product',$category->id) }}" type="button"
                                        class="inline-flex w-full px-4 py-2 hover:bg-gray-100">{{ $category->name }}</a>
                                </li>
                                @endforeach
                            </ul>
                        </div>

                        <!-- Search input -->
                        <div class="relative flex-grow" id="dropdown-container">
                            <input type="search" id="search-dropdown"
                                class="block p-2.5 w-full z-20 text-sm text-gray-900 bg-gray-50 rounded-r-full border-none focus:ring-blue-500 focus:border-blue-500"
                                placeholder="Search ..." oninput="filterDropdown()" required />

                            <!-- Dropdown List -->
                            <div id="dropdown-list"
                                class="absolute w-full mt-2 bg-white rounded-lg shadow-lg max-h-60 overflow-y-auto hidden">
                                <ul class="list-none p-2">
                                    @foreach (DB::table('products')->get() as $product)
                                    <li class="p-2 hover:bg-gray-100 cursor-pointer flex items-center">
                                        <a href="{{ url('customer-product',$product->id) }}">
                                            <img src="path-to-image/product1.jpg" alt="Product 1" class="w-8 h-8 mr-2">
                                            <span>{{ $product->name }}</span>
                                        </a>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </form>
                    
                    <button type="submit" class="p-2.5 ml-2 text-sm font-medium text-white bg-blue-700 rounded-full focus:ring-4 focus:outline-none focus:ring-blue-300">
                        <svg data-slot="icon" fill="none" class="w-5 h-5" stroke-width="1.5" stroke="currentColor"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z"></path>
                        </svg>
                        <span class="sr-only">Search</span>
                    </button>
                </div>

                <!-- Mobile search toggle + Right section -->
                <div class="flex items-center">
                    <!-- Mobile search button -->
                    <button type="button" class="md:hidden p-2 text-gray-500 rounded-lg hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200" 
                            aria-controls="mobile-search" aria-expanded="false" 
                            onclick="document.getElementById('mobile-search').classList.toggle('hidden')">
                        <svg data-slot="icon" fill="none" class="w-6 h-6" stroke-width="1.5" stroke="currentColor"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z"></path>
                        </svg>
                        <span class="sr-only">Search</span>
                    </button>
                    
                    <!-- Cart -->
                    <a href="{{ route('view-cart') }}" class="relative p-2 hover:bg-gray-100 rounded-full">
                        <svg data-slot="icon" class="w-6 h-6" fill="none" stroke-width="1.5" stroke="#2759A8"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15.75 10.5V6a3.75 3.75 0 1 0-7.5 0v4.5m11.356-1.993 1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 0 1-1.12-1.243l1.264-12A1.125 1.125 0 0 1 5.513 7.5h12.974c.576 0 1.059.435 1.119 1.007ZM8.625 10.5a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm7.5 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z">
                            </path>
                        </svg>
                        <span class="absolute top-0 right-0 inline-flex items-center justify-center px-1 py-0.5 text-xs font-bold leading-none text-red-100 bg-red-600 rounded-full">
                            @if(session('user')) {{DB::table('carts')->where('customer_id',session('user')->id)->count() }} @endif
                        </span>
                    </a>
                    
                    <!-- User profile -->
                    <a href="{{ route('customer-profile') }}" class="p-2 hover:bg-gray-100 rounded-full">
                        <svg data-slot="icon" fill="none" class="w-6 h-6" stroke-width="1.5" stroke="#2759A8"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z">
                            </path>
                        </svg>
                    </a>
                    
                    <!-- Menu button - visible on all screens -->
                    <a href="{{ route('customer-product-page') }}" class="flex items-center text-blue-900 bg-gray-50 rounded-lg hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 p-2 ml-2">
                        <svg data-slot="icon" class="w-6 h-6" fill="none" stroke-width="1.5" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 7.125C2.25 6.504 2.754 6 3.375 6h6c.621 0 1.125.504 1.125 1.125v3.75c0 .621-.504 1.125-1.125 1.125h-6a1.125 1.125 0 0 1-1.125-1.125v-3.75ZM14.25 8.625c0-.621.504-1.125 1.125-1.125h5.25c.621 0 1.125.504 1.125 1.125v8.25c0 .621-.504 1.125-1.125 1.125h-5.25a1.125 1.125 0 0 1-1.125-1.125v-8.25ZM3.75 16.125c0-.621.504-1.125 1.125-1.125h5.25c.621 0 1.125.504 1.125 1.125v2.25c0 .621-.504 1.125-1.125 1.125h-5.25a1.125 1.125 0 0 1-1.125-1.125v-2.25Z"></path>
                        </svg>
                        <span class="ml-2 hidden sm:inline">Menu</span>
                    </a>
                    
                    <!-- Vendor button -->
                    <a href="{{ route('subscription') }}" class="hidden sm:inline-flex items-center px-3 py-2 ml-2 text-sm font-medium text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
                        Vendor
                        <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                        </svg>
                    </a>
                </div>
            </div>
            
            <!-- Mobile Search - Hidden by default -->
            <div id="mobile-search" class="md:hidden py-4 hidden">
                <form class="flex items-center">
                    <div class="relative w-full">
                        <input type="text" id="mobile-search-input" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-3 p-2.5" placeholder="Search for products...">
                    </div>
                    <button type="submit" class="p-2.5 ml-2 text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
                        <svg data-slot="icon" fill="none" class="w-5 h-5" stroke-width="1.5" stroke="currentColor"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z"></path>
                        </svg>
                        <span class="sr-only">Search</span>
                    </button>
                </form>
            </div>
        </div>
    </nav>
    
    <script>
        function filterDropdown() {
            const input = document.getElementById('search-dropdown');
            const filter = input.value.toLowerCase();
            const dropdown = document.getElementById('dropdown-list');
            const options = dropdown.getElementsByTagName('li');

            // Only show dropdown if input has value
            if (filter.length > 0) {
                dropdown.classList.remove('hidden');
            } else {
                dropdown.classList.add('hidden');
                return;
            }

            let resultsFound = false;
            for (let i = 0; i < options.length; i++) {
                let txtValue = options[i].textContent || options[i].innerText;
                if (txtValue.toLowerCase().indexOf(filter) > -1) {
                    options[i].style.display = "";
                    resultsFound = true;
                } else {
                    options[i].style.display = "none";
                }
            }

            // If no results found, show message
            if (!resultsFound) {
                const noResults = document.createElement('li');
                noResults.className = 'p-2 text-gray-500';
                noResults.textContent = 'No results found';
                dropdown.querySelector('ul').appendChild(noResults);
            }
        }

        function hideDropdownOnClickOutside(event) {
            const dropdownContainer = document.getElementById('dropdown-container');
            const dropdownList = document.getElementById('dropdown-list');

            if (dropdownContainer && dropdownList && !dropdownContainer.contains(event.target)) {
                dropdownList.classList.add('hidden');
            }
        }

        // Add event listener for clicking outside the dropdown
        document.addEventListener('click', hideDropdownOnClickOutside);
    </script>
</div>