<x-app-layout>

    <!-- Hero Section -->
    <header class="bg-gradient-blue text-white text-center py-56">
        <div class="container mx-auto px-6">
            <h1 class="text-4xl sm:text-5xl font-bold mb-4">Welcome to Pagyanan</h1>
            <p class="text-lg sm:text-xl mb-8">Your one-stop solution for finding the perfect space, room, or dormitory.
            </p>
            <a href="/listing"
                class="bg-blue-200 text-blue-950 font-semibold py-3 px-6 rounded-lg hover:bg-blue-100 transition">Find
                Your
                Space</a>
        </div>
    </header>

    <!-- Features Section -->
    <section class="py-16">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-center mb-12">Why Choose Pagyanan?</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-12">
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <h3 class="text-xl font-semibold mb-4">Wide Range of Options</h3>
                    <p class="text-gray-700">From cozy rooms to spacious dormitories, find the perfect rental space that
                        fits your needs.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <h3 class="text-xl font-semibold mb-4">Easy Booking Process</h3>
                    <p class="text-gray-700">Our user-friendly platform makes it easy to browse, book, and secure your
                        next rental space.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <h3 class="text-xl font-semibold mb-4">Verified Listings</h3>
                    <p class="text-gray-700">All our listings are verified to ensure you get accurate information and a
                        hassle-free experience.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="bg-gray-100 py-16">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-center mb-12">What Our Users Say</h2>
            <div class="flex flex-wrap justify-center gap-12">
                <div class="bg-white p-6 rounded-lg shadow-lg max-w-md">
                    <p class="text-gray-700 mb-4">“Pagyanan made finding my new room a breeze. The platform is intuitive
                        and the listings are spot-on!”</p>
                    <p class="font-semibold">Alex Rivera</p>
                    <p class="text-gray-500">Student</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-lg max-w-md">
                    <p class="text-gray-700 mb-4">“I found a great dormitory through Pagyanan. The process was smooth
                        and the customer service was excellent!”</p>
                    <p class="font-semibold">Maria Lopez</p>
                    <p class="text-gray-500">Young Professional</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section id="cta" class="bg-primary text-gray-900 text-center py-16 shadow-sm">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl sm:text-4xl font-bold mb-4">Ready to Find Your Next Space?</h2>
            <p class="text-lg sm:text-xl mb-8">Join Pagyanan today and start exploring available spaces tailored to your
                needs.</p>
            <a href="/listing"
                class="bg-blue-900 text-blue-50 font-semibold py-3 px-6 rounded-lg hover:bg-blue-950 transition">Get
                Started</a>
        </div>
    </section>

    {{-- FAQ SECTION --}}
    <x-faq></x-faq>

    {{-- CONTACT US SECTION --}}
    <!-- Contact Section -->
    <x-contact-us></x-contact-us>
</x-app-layout>
