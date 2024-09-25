<x-app-layout>
    <h1 class="flex justify-center text-2xl font-bold text-gray-900 shadow-md py-4">Your Saved Listing</h1>
    <div class="max-w-7xl py-2 mx-auto flex justify-center text-gray-800 my-8">
        <div class="saved-listings">
            @if ($savedListings->count())
                <div class="overflow-x-auto">
                    <table class="min-w-full bg-white border border-gray-200 rounded-lg">
                        <thead>
                            <tr class="bg-gray-100 border-b">
                                <th class="text-left px-4 py-2 text-sm font-medium text-gray-600">Owner</th>
                                <th class="text-left px-4 py-2 text-sm font-medium text-gray-600">Name
                                </th>
                                <th class="text-left px-4 py-2 text-sm font-medium text-gray-600">Type</th>
                                <th class="text-left px-4 py-2 text-sm font-medium text-gray-600">Location</th>
                                <th class="text-left px-4 py-2 text-sm font-medium text-gray-600">Fee</th>
                                <th class="text-left px-4 py-2 text-sm font-medium text-gray-600">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($savedListings as $savedListing)
                                <tr class="border-b hover:bg-gray-100 cursor-pointer">
                                    <td class="px-4 py-2"
                                        onclick="window.location='{{ route('listing.show', $savedListing->id) }}'">
                                        @if ($savedListing->listing->user_id === auth()->user()->id)
                                            You
                                        @else
                                            {{ $savedListing->listing->user_name }}
                                        @endif
                                    </td>
                                    <td class="px-4 py-2"
                                        onclick="window.location='{{ route('listing.show', $savedListing->id) }}'">
                                        {{ $savedListing->listing->place_name }}
                                    </td>
                                    <td class="px-4 py-2"
                                        onclick="window.location='{{ route('listing.show', $savedListing->id) }}'">
                                        {{ $savedListing->listing->place_type }}
                                    </td>
                                    <td class="px-4 py-2"
                                        onclick="window.location='{{ route('listing.show', $savedListing->id) }}'">
                                        {{ $savedListing->listing->place_province_city }}
                                    </td>
                                    <td class="px-4 py-2"
                                        onclick="window.location='{{ route('listing.show', $savedListing->id) }}'">
                                        {{ $savedListing->listing->place_monthly_rent }}
                                    </td>
                                    <td class="px-4 py-2">

                                        <form action="{{ route('remove.listing', $savedListing->listing->id) }}"
                                            method="POST" class="inline-block">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                class="remove-listing-btn bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600">
                                                Delete
                                            </button>
                                        </form>

                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="mt-4">
                        {{ $savedListings->links() }}
                    </div>
                </div>
            @else
                <p>You have no saved listings.</p>
                <div class="flex justify-center">
                    <a href="/listing" class="rounded-lg px-3 py-2 bg-blue-800 text-white mt-3 hover:bg-blue-700">Save a list?</a>
                </div>
            @endif
        </div>

    </div>

    {{-- <script>
        $(document).ready(function() {
            $('.remove-listing-btn').on('click', function(e) {
                e.preventDefault(); // Prevent the default form submission

                let listingId = $(this).data('listing-id');

                $.ajax({
                    url: '/saved-listings/' + listingId, // Ensure this route is correct
                    type: 'DELETE', // Change POST to DELETE
                    data: {
                        _token: '{{ csrf_token() }}',
                        listing_id: listingId
                    },
                    success: function(response) {
                        if (response.status === 'success') {
                            alert(response.message);
                            location.reload(); // Reload the page if successful
                        } else {
                            alert(response.message);
                        }
                    },
                    error: function() {
                        alert('An error occurred. Please try again.');
                    }
                });
            });
        });
    </script> --}}

</x-app-layout>
