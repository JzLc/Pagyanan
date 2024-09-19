<div class="text-gray-700 p-4 grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
    <a href="{{ route('listing.show', $listing->id) }}"
        class="block bg-white shadow-lg rounded-lg p-4 sm:p-6 border border-gray-200 cursor-pointer transition-transform transform hover:scale-105">

        <img src="{{ asset('images/no-image.jpg') }}" class="aspect-video w-full object-cover rounded-lg" alt="No image" />
        <p class="mt-3  text-sm ">Posted •
            <time>{{ $listing->created_at->format('g:i A, F j, Y') }}</time>
        </p>
        <h3 class="text-2xl font-bold ">{{ $listing->place_name }}</h3>
        <p class="mt-1 ">{{ Str::limit($listing->place_description, 50) }}</p>
        <p class=" mt-1">
            <span class="font-semibold ">Type:</span>
            {{ ucwords($listing->place_type) }}
        </p>
        <p class="text-gray-700 mt-1">
            <span class="font-semibold ">Located At:</span>
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
            <span class="inline-flex items-center gap-1 rounded-full bg-blue-50 pr-2 py-1 text-xs font-semibold ">
                Room Size: {{ $listing->place_room_size }} sqft</span>
            <span class="inline-flex items-center gap-1 rounded-full bg-orange-50  py-1 text-xs font-semibold ">
                Monthly Rent: {{ $listing->place_monthly_rent }} pesos</span>
        </div>

    </a>
</div>
