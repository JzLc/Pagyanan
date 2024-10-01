<x-app-layout>
    {{-- @include('partials._searchBar') --}}
    <div class="bg-white shadow-lg rounded-lg p-6 sm:p-8 border border-gray-200 mx-auto my-8 max-w-4xl">
        <!-- Title and Action Buttons -->
        <div class="flex justify-between mb-6">
            <h2 class="text-3xl sm:text-4xl font-extrabold text-navy-900">{{ $listing->place_name }}</h2>
            <div class="flex justify-between items-center">
                <!-- Copy Button -->
                <a href="#" onclick="copyListingDetails(event)"
                    class="mx-1 border border-gray-500 px-4 py-2 rounded-lg text-navy-900 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-400 transition duration-300 ease-in-out">
                    <img src="{{ asset('images/copy.png') }}" alt="Copy img" title="Copy To Clipboard">
                </a>

                @if (auth()->id() === $listing->user_id)
                    <a href="{{ route('listing.edit', $listing->id) }}"
                        class="mx-1  border border-gray-500 px-4 py-2 rounded-lg text-navy-900 hover:bg-blue-200 focus:outline-none focus:ring-2 focus:ring-gray-400 transition duration-300 ease-in-out">
                        <img src="{{ asset('images/edit.png') }}" alt="Edit img" title="Edit Listing">
                    </a>
                    <form action="{{ route('listing.destroy', $listing->id) }}" method="POST" class="inline-block"
                        onsubmit="return confirm('Are you sure you want to delete this listing?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit"
                            class="mx-1  border border-red-300 px-4 py-2 rounded-lg hover:bg-red-200 focus:outline-none focus:ring-2 focus:ring-gray-400 transition duration-300 ease-in-out">
                            <img src="{{ asset('images/delete.png') }}" alt="Delete img" title="Delete Listing">
                        </button>
                    </form>
                @endif
                <button data-listing-id="{{ $listing->id }}"
                    class="save-listing-btn mx-1  border border-gray-500 px-4 py-2 rounded-lg text-navy-900 hover:bg-blue-200 focus:outline-none focus:ring-2 focus:ring-gray-400 transition duration-300 ease-in-out">
                    <img src="{{ asset('images/ribbon.png') }}" alt="Saved img" title="Saved Listing">
                    {{-- <input id="listing_id" name="listing_id" type="text" hidden> --}}
                </button>
            </div>
        </div>

        <!-- Listing Details -->
        <div id="listing-details" class="space-y-4">
            <p class="text-navy-900">
                <span class="font-semibold text-navy-700">Description:</span> {{ $listing->place_description }}
            </p>
            <p class="text-navy-900">
                <span class="font-semibold text-navy-700">Type:</span> {{ $listing->place_type }}
            </p>
            <p class="text-navy-900">
                <span class="font-semibold text-navy-700">Located At:</span> {{ $listing->place_brgy_street }},
                {{ $listing->place_municipality_town }}, {{ $listing->place_province_city }}
            </p>
            <p class="text-navy-900">
                <span class="font-semibold text-navy-700">Contact Number:</span> {{ $listing->place_contact_num }}
                <a id="copyPhoneNumber" name="copyPhoneNumber" onclick="copyPhoneNumber(event)"
                    class="text-white ml-1 px-4 py-1 rounded-lg cursor-pointer bg-blue-500 hover:bg-blue-400">
                    Copy Phone
                </a>
            </p>
            <p class="text-navy-900">
                <span class="font-semibold text-navy-700">E-mail:</span> {{ $listing->place_email }}
                <a id="copyEmail" name="copyEmail" onclick="copyEmail(event)"
                    class="text-white ml-1 px-4 py-1 rounded-lg cursor-pointer bg-green-600 hover:bg-green-500">
                    Copy Email
                </a>
            </p>
            <p class="text-navy-900">
                <span class="font-semibold text-navy-700">Room Size:</span> {{ $listing->place_room_size }} sqft
            </p>
            <p class="text-navy-900">
                <span class="font-semibold text-navy-700">Monthly Rent:</span> ₱{{ $listing->place_monthly_rent }}
            </p>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        // COPY ALL LISTING DETAILS
        function copyListingDetails(event) {
            // JavaScript to Copy Text to Clipboard
            event.preventDefault(); // Prevent the default anchor action

            // Create a string with line breaks for each field using string concatenation
            const listingDetails = 'Name: {{ $listing->place_name }}\n' +
                'Description: {{ $listing->place_description }}\n' +
                'Type: {{ $listing->place_type }}\n' +
                'Located At: {{ $listing->place_brgy_street }}, {{ $listing->place_municipality_town }}, {{ $listing->place_province_city }}\n' +
                'Contact Number: {{ $listing->place_contact_num }}\n' +
                'E-mail: {{ $listing->place_email }}\n' +
                'Room Size: {{ $listing->place_room_size }} sqft\n' +
                'Monthly Rent: {{ $listing->place_monthly_rent }} pesos\n';

            // Copy the formatted string to the clipboard
            navigator.clipboard.writeText(listingDetails).then(function() {
                alert('Listing details copied to clipboard!');
            }).catch(function(error) {
                alert('Failed to copy: ' + error);
            });
        }
        // COPY PHONE NUMBER
        function copyPhoneNumber(event) {
            event.preventDefault();

            var copyNumberText = document.getElementById('copyPhoneNumber');
            copyNumberText.innerHTML = "Copied!";
            setTimeout(function() {
                copyNumberText.innerHTML = "Copy Phone"
            }, 3000);
            const phoneDetails = "{{ $listing->place_contact_num }}";
            navigator.clipboard.writeText(phoneDetails);
        }
        // COPY EMAIL
        function copyEmail(event) {
            event.preventDefault();
            var copyEmailText = document.getElementById('copyEmail');
            copyEmailText.innerHTML = "Copied!";
            setTimeout(function() {
                copyEmailText.innerHTML = "Copy Email"
            }, 3000);
            const emailDetails = "{{ $listing->place_email }}";
            navigator.clipboard.writeText(emailDetails);
        }

        // START OF SAVED LISTING FUNCTION

        $(document).ready(function() {
            $('.save-listing-btn').on('click', function() {
                let listingId = $(this).data('listing-id');

                $.ajax({
                    url: '{{ route('savedlistings.store') }}',
                    type: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}',
                        listing_id: listingId
                    },
                    success: function(response) {
                        alert(response.message);
                    },
                    error: function(xhr) {
                        console.error(xhr.responseText);
                        alert('An error occurred. Please try again.');
                    }
                });
            });
        });
        // END OF SAVED LISTING FUNCTION
    </script>


</x-app-layout>
