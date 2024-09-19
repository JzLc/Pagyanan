<x-app-layout>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        @include('partials._searchBar')
        @if (is_countable($listings) && count($listings) > 0)
            <h2 class="flex justify-center items-center font-bold italic">{{ count($listings) }} results</h2>
            {{-- @if ($listing->archived === true)
        this is archived
        <x-archived-list></x-archived-list>
        @else --}}
            <div class="p-4 grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
                @foreach ($listings as $listing)
                    <a href="{{ route('listing.show', $listing->id) }}"
                        class="block bg-white shadow-lg rounded-lg p-4 sm:p-6 border border-gray-200 cursor-pointer transition-transform transform hover:scale-105">

                        <img src="{{ asset('images/no-image.jpg') }}" class="aspect-video w-full object-cover rounded-lg"
                            alt="No image" />
                        <div class="my-4">
                            <p class="mt-3  text-sm text-gray-500">Posted •
                                <time>{{ $listing->created_at->format('g:i A, F j, Y') }}</time>
                            </p>
                            <h3 class="text-2xl font-bold text-gray-900">{{ $listing->place_name }}</h3>
                            <p class="mt-1 text-gray-500">{{ Str::limit($listing->place_description, 50) }}</p>
                            <p class="text-gray-700 mt-1">
                                <span class="font-semibold text-navy-700">Type:</span>
                                {{ ucwords($listing->place_type) }}
                            </p>
                            <p class="text-gray-700 mt-1">
                                <span class="font-semibold text-navy-700">Located At:</span>
                                {{ ucwords($listing->place_brgy_street) }},
                                {{ ucwords($listing->place_municipality_town) }},
                                {{ ucwords($listing->place_province_city) }}
                            </p>
                            {{-- <p class="text-gray-700 mb-4">
                            <span class="font-semibold text-navy-700">Contact Number:</span>
                            {{ $listing->place_contact_num }}
                        </p>
                        <p class="text-gray-700 mb-4">
                            <span class="font-semibold text-navy-700">E-mail:</span> {{ $listing->place_email }}
                        </p> --}}
                            <div class="mt-4 flex gap-2">
                                <span
                                    class="inline-flex items-center gap-1 rounded-full bg-blue-50 pr-2 py-1 text-xs font-semibold text-blue-600">
                                    Room Size: {{ $listing->place_room_size }} sqft</span>
                                <span
                                    class="inline-flex items-center gap-1 rounded-full bg-orange-50  py-1 text-xs font-semibold text-green-600">
                                    Monthly Rent: {{ $listing->place_monthly_rent }} pesos</span>
                            </div>

                        </div>

                    </a>
                @endforeach
            </div>
            {{-- @endif --}}
        @else
    </div>
    <div class="flex items-center justify-center min-h-[80vh] p-4">
        <div class="bg-white shadow-lg rounded-lg p-6 sm:p-8 max-w-md mx-auto text-center">
            <!-- Meme GIF -->
            <img src="{{ asset('images/no-image.jpg') }}" alt="Crying Meme" class="w-32 h-32 mx-auto mb-4">

            <!-- Text -->
            <p class="text-gray-800 text-4xl sm:text-lg my-4">You have no listing yet</p>
            <a href="{{ route('listing.create') }}"
                class="mt-4 px-4 py-2 rounded-md bg-blue-800 text-blue-100 hover:bg-blue-700">
                Create Post
            </a>
        </div>
    </div>
    @endif
    </div>

</x-app-layout>
