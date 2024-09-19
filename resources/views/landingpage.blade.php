<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome to Pagyanan</title>
    <link rel="icon" href="{{ asset('images/Pagyanan-logo.svg') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="antialiased">

    <!-- Navigation Bar -->
    <nav class="bg-white text-black">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <a href="{{ route('dashboard') }}">
                    <img src="{{ asset('images/Pagyanan-logo.svg') }}" class="h-8 w-8" alt="Pagyanan Logo">
                </a>
                <div class="hidden md:flex space-x-4">
                    <a href="#" class="hover:text-gray-800">Home</a>
                    <a href="#about" class="hover:text-gray-800">About</a>
                    <a href="#contact" class="hover:text-gray-800">Contact</a>
                </div>
                <!-- Mobile Menu Toggle Button -->
                <div class="md:hidden">
                    <button id="mobile-menu-toggle" class="focus:outline-none">
                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16m-7 6h7" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden md:hidden">
            <div class="px-2 pt-2 pb-3 space-y-1">
                <a href="#" class="block text-black hover:text-gray-800">Home</a>
                <a href="#about" class="block text-black hover:text-gray-800">About</a>
                <a href="#contact" class="block text-black hover:text-gray-800">Contact</a>
            </div>
        </div>
    </nav>

    <!-- Main Section -->
    <section class="bg-gray-100 py-16">
        <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
            <div class="px-4 md:px-0">
                <h1 class="text-4xl font-bold text-gray-900 leading-tight">Discover Your Perfect Rental with Ease</h1>
                <p class="mt-4 text-gray-600">Pagyanan simplifies your search for rental properties. Enjoy a seamless
                    experience with our user-friendly platform.</p>
                <div class="mx-auto grid grid-cols-1 md:grid-cols-2 space-y-4 md:space-y-0 md:space-x-4 mt-6">
                    <div class="flex items-center space-x-3">
                        <span class="bg-black text-white rounded-full p-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7" />
                            </svg>
                        </span>
                        <div>
                            <h3 class="text-lg font-bold">Easy Listings</h3>
                            <p class="text-gray-500">List your property quickly and efficiently to reach potential
                                tenants.</p>
                        </div>
                    </div>
                    <div class="flex items-center space-x-3">
                        <span class="bg-black text-white rounded-full p-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 3l18 18M5.2 10.4L19 4m-1.2 6.4L5 20" />
                            </svg>
                        </span>
                        <div>
                            <h3 class="text-lg font-bold">Vast Selection</h3>
                            <p class="text-gray-500">Choose from a wide range of rental options tailored to your needs.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="mt-6">
                    <a href="#" class="bg-indigo-500 text-white py-2 px-6 rounded-lg mr-4">Learn More</a>
                    <a href="#" class="text-indigo-500 underline">Sign Up</a>
                </div>
            </div>
            <div class="px-4 md:px-0">
                <img src="https://via.placeholder.com/400x300" alt="Placeholder image"
                    class="rounded-lg shadow-lg w-full">
            </div>
        </div>
    </section>

    <!-- 2nd Section -->
    <section class="bg-white py-16">
        <div class="max-w-7xl mx-auto text-center px-4">
            <h2 class="text-4xl font-bold text-gray-900 leading-tight">Discover Your Ideal Rental with Ease</h2>
            <p class="mt-4 text-gray-600">Pagyanan connects tenants with property owners seamlessly. Experience a
                hassle-free search for your next home.</p>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 mt-8">
                <div class="p-6 bg-gray-100 rounded-lg shadow-lg">
                    <img src="https://via.placeholder.com/150" alt="Placeholder image" class="mx-auto mb-4">
                    <h3 class="text-xl font-bold">List Your Property with Us Today</h3>
                    <p class="mt-2 text-gray-500">Showcase your rental property to a wider audience.</p>
                </div>
                <div class="p-6 bg-gray-100 rounded-lg shadow-lg">
                    <img src="https://via.placeholder.com/150" alt="Placeholder image" class="mx-auto mb-4">
                    <h3 class="text-xl font-bold">Find Your Perfect Rental in Minutes</h3>
                    <p class="mt-2 text-gray-500">Browse through diverse listings tailored to your needs.</p>
                </div>
                <div class="p-6 bg-gray-100 rounded-lg shadow-lg">
                    <img src="https://via.placeholder.com/150" alt="Placeholder image" class="mx-auto mb-4">
                    <h3 class="text-xl font-bold">Enjoy Secure Transactions Every Time</h3>
                    <p class="mt-2 text-gray-500">Rest assured with our safe payment options.</p>
                </div>
            </div>
            <div class="mt-8">
                <a href="#" class="bg-indigo-500 text-white py-2 px-6 rounded-lg">Explore</a>
            </div>
        </div>
    </section>

    <!-- Hero Section -->
    <section class="bg-gray-100 py-16">
        <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
            <div class="px-4 md:px-0">
                <img src="{{asset('images/no-image.jpg')}}" alt="Placeholder image"
                    class="rounded-lg shadow-lg w-full">
            </div>
            <div class="px-4 md:px-0">
                <h1 class="text-4xl font-bold text-gray-900 leading-tight">Discover the Benefits of Pagyanan Today</h1>
                <p class="mt-4 text-gray-600">Pagyanan simplifies the rental process, helping property owners and
                    tenants connect easily. Whether listing or finding a rental, our platform makes everything seamless.
                </p>
                <div class="mt-6">
                    <a href="#" class="bg-indigo-500 text-white py-2 px-6 rounded-lg mr-4">Learn More</a>
                    <a href="#" class="text-indigo-500 underline">Sign Up</a>
                </div>
            </div>

        </div>
    </section>

    <!-- Highlighted Section -->
    <section class="bg-gray-800 text-white py-16">
        <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
            <div class="px-4 md:px-0">
                <h1 class="text-4xl font-bold leading-tight">Find Your Perfect Rental Today</h1>
                <p class="mt-4 text-gray-300">Browse our community and click listings to quickly find the perfect
                    rental for your needs.</p>
                <div class="mt-6">
                    <a href="#" class="bg-indigo-500 text-white py-2 px-6 rounded-lg mr-4">Browse Now</a>
                    <a href="#" class="bg-white text-gray-800 py-2 px-6 rounded-lg">Learn More</a>
                </div>
            </div>
            <div class="px-4 md:px-0">
                <img src="https://via.placeholder.com/400x300" alt="Placeholder image"
                    class="rounded-lg shadow-lg w-full">
            </div>
        </div>
    </section>

    {{-- FAQ SECTION --}}
    <x-faq></x-faq>

    {{-- CONTACT US SECTION --}}
    <!-- Contact Section -->
    <x-contact-us></x-contact-us>

    {{-- FOOTER --}}
    <x-footer></x-footer>

    <!-- Toggle Mobile Menu Script -->
    <script>
        const menuToggle = document.getElementById('mobile-menu-toggle');
        const mobileMenu = document.getElementById('mobile-menu');

        menuToggle.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
    </script>

</body>

</html>
