<!-- Carousel Section -->
<div x-data="{ activeSlide: 1 }" class="relative">
    <div class="relative overflow-hidden rounded-lg">
        <!-- Images -->
        <template x-for="(slide, index) in [1, 2, 3]" :key="index">
            <div x-show="activeSlide === index + 1" class="w-full h-64 md:h-96">
                <img :src="'/images/carousel-' + (index + 1) + '.jpg'" class="w-full h-full object-cover" alt="Carousel Image" />
            </div>
        </template>

        <!-- Slide Control Buttons -->
        <button @click="activeSlide = activeSlide === 1 ? 3 : activeSlide - 1" class="absolute left-0 top-1/2 transform -translate-y-1/2 bg-white p-2 rounded-full shadow hover:bg-gray-200 transition">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6 text-gray-800">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
            </svg>
        </button>
        <button @click="activeSlide = activeSlide === 3 ? 1 : activeSlide + 1" class="absolute right-0 top-1/2 transform -translate-y-1/2 bg-white p-2 rounded-full shadow hover:bg-gray-200 transition">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6 text-gray-800">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
            </svg>
        </button>
    </div>

    <!-- Dots Indicator -->
    <div class="flex justify-center space-x-2 mt-4">
        <template x-for="(dot, index) in [1, 2, 3]" :key="index">
            <button @click="activeSlide = index + 1" :class="{ 'bg-blue-600': activeSlide === index + 1 }" class="w-3 h-3 rounded-full bg-gray-400"></button>
        </template>
    </div>
</div>

