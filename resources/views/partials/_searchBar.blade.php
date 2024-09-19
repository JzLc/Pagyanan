<div class="container mx-auto px-4 py-6">
    <div class="flex items-center space-x-6">
        @if (url()->current() == url('/user/' . auth()->id() . '/listing'))
            <h1 class="text-2xl font-extrabold text-gray-800 uppercase tracking-wide">Your Listing</h1>
        @else
            <h1 class="text-2xl font-extrabold text-gray-800 uppercase tracking-wide">Latest Listings</h1>
        @endif

        @if (url()->current() == url('/user/' . auth()->id() . '/listing'))
            <form action="/user/' . auth()->id() . '/listing" class="flex-1">
                <input type="text" name="search" placeholder="Search to your listings" value="{{ request('search') }}"
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-gray-400 placeholder-gray-500 text-gray-900 transition duration-300 ease-in-out">
            </form>
        @else
            <!-- Search Bar -->
            <form action="/listing" class="flex-1">
                <input type="text" name="search" placeholder="Search..." value="{{ request('search') }}"
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-gray-400 placeholder-gray-500 text-gray-900 transition duration-300 ease-in-out">
            </form>
        @endif



        <!-- Filter Funnel -->
        <div class="relative z-40">
            <!-- Toggle Button -->
            <button id="filter-button" onclick="toggleDropdown()"
                class="px-4 py-2 rounded-lg shadow-sm hover:bg-blue-100 focus:outline-none focus:ring-2 focus:ring-blue-400 transition duration-300 ease-in-out">
                <img src="{{ asset('images/filter.png') }}" alt="Filter" title="Filter Listings">
            </button>

            <!-- Filter Dropdown -->
            <div id="filter-dropdown"
                class="absolute right-0 mt-2 w-64 bg-white shadow-lg rounded-lg border border-gray-300 hidden">
                <div class="p-4">
                    <h3 class="text-lg font-semibold text-gray-800 mb-4">Filters</h3>

                    {{-- <!-- Price Filter --> --}}
                    {{-- <form
                        action="{{ route('listing.filter') }}" method="GET">
                        <label for="rent_range" class="block text-sm font-medium text-gray-700">
                            Monthly Rent Range
                        </label>
                        <input type="text" id="min_rent_input" name="min_rent_input" placeholder="₱ MIN" value="{{ request('min_rent') }}"
                            class="w-full mt-1 px-3 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-gray-400 placeholder-gray-500 text-gray-900 transition duration-300 ease-in-out">
                        <input type="text" id="max_rent" name="max_rent_input" placeholder="₱ MAX" value="{{ request('max_rent') }}"
                            class="w-full mt-1 px-3 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-gray-400 placeholder-gray-500 text-gray-900 transition duration-300 ease-in-out">
                        <input class="text-white bg-orange-800 px-4 py-2 rounded cursor-pointer hover:bg-orange-700"
                            type="submit" value="Apply">
                    </form> --}}
                    {{-- <form action="{{ route('listing.filter') }}" method="GET">
                        <input type="number" id="min_rent_input" name="min_rent_input" placeholder="Min Rent">
                        <input type="number" id="max_rent_input" name="max_rent_input" placeholder="Max Rent">
                        <button type="submit">Filter</button>
                    </form> --}}



                    <!-- Type Filter -->
                    <div>
                        <label for="type" class="block text-sm font-medium text-gray-700">Type</label>
                        <select id="type"
                            class="w-full mt-1 px-3 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-gray-400 bg-white text-gray-900 transition duration-300 ease-in-out"
                            onchange="handleFilterChange()">
                            <option value="">Renting Type</option>
                            <option value="all">All</option>
                            <option value="dorm">Dorm</option>
                            <option value="apartment">Apartment</option>
                            <option value="bedspace">Bedspace</option>
                        </select>
                    </div>

                </div>
            </div>

            {{-- @if (auth()->check()) --}}
            {{-- @endif --}}
            <a href="/listing/create"
                class="inline-flex items-center justify-center w-10 h-10 text-xl font-bold  rounded-full shadow-sm hover:bg-blue-100 focus:outline-none focus:ring-2 focus:ring-blue-400 transition duration-300 ease-in-out">
                <img src="{{ asset('images/add.png') }}" alt="Add Listings" title="Add Listings">
            </a>
        </div>
    </div>
</div>
