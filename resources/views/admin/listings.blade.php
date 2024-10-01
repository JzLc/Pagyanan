@extends('admin.dashboard')

@section('content')
    <h1 class="flex justify-start text-4xl font-bold text-gray-900 p-4">Listings</h1>
    <div class="max-w-full px-4 text-gray-800">
        <div class="saved-listings ">
            @if ($listings->count())
                <div class="overflow-x-auto">
                    <table class="min-w-full  border border-gray-200 rounded-lg">
                        <thead class="">
                            <tr class="bg-gray-100 border-b">
                                <th class="text-blue-100 text-left px-4 py-2 text-sm font-medium bg-blue-950">No.</th>
                                <th class="text-blue-100 text-left px-4 py-2 text-sm font-medium bg-blue-950">Uploader</th>
                                <th class="text-blue-100 text-left px-4 py-2 text-sm font-medium bg-blue-950">Place Name</th>
                                <th class="text-blue-100 text-left px-4 py-2 text-sm font-medium bg-blue-950">Type</th>
                                <th class="text-blue-100 text-left px-4 py-2 text-sm font-medium bg-blue-950">Location</th>
                                <th class="text-blue-100 text-left px-4 py-2 text-sm font-medium bg-blue-950">Room Size</th>
                                <th class="text-blue-100 text-left px-4 py-2 text-sm font-medium bg-blue-950">Fee</th>
                                <th class="text-blue-100 text-left px-4 py-2 text-sm font-medium bg-blue-950">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($listings as $index => $listing)
                                <tr class="border-b hover:bg-gray-100 cursor-pointer">
                                    <td class="px-4 py-2"
                                        onclick="window.location='{{ route('listing.show', $listing->id) }}'">
                                        {{ ($listings->currentPage() - 1) * $listings->perPage() + $loop->iteration }}
                                    </td>

                                    {{-- UPLOADER --}}
                                    <td class="px-4 py-2"
                                        onclick="window.location='{{ route('listing.show', $listing->id) }}'">
                                        {{ $listing->user_name }}
                                    </td>

                                    {{-- PLACE NAME --}}
                                    <td class="px-4 py-2"
                                        onclick="window.location='{{ route('listing.show', $listing->id) }}'">
                                        {{ $listing->place_name }}
                                    </td>

                                    {{-- PLACE TYPE --}}
                                    <td class="px-4 py-2"
                                        onclick="window.location='{{ route('listing.show', $listing->id) }}'">
                                        {{ $listing->place_type }}
                                    </td>

                                    {{-- PLACE LOCATION --}}
                                    <td class="px-4 py-2"
                                        onclick="window.location='{{ route('listing.show', $listing->id) }}'">
                                        {{ $listing->place_brgy_street }}, {{ $listing->place_municipality_town }},
                                        {{ $listing->place_province_city }}
                                    </td>

                                    {{-- ROOM SIZE --}}
                                    <td class="px-4 py-2"
                                        onclick="window.location='{{ route('listing.show', $listing->id) }}'">
                                        {{ $listing->place_room_size }}
                                    </td>

                                    {{-- MONTHLY RENT --}}
                                    <td class="px-4 py-2"
                                        onclick="window.location='{{ route('listing.show', $listing->id) }}'">
                                        {{ $listing->place_monthly_rent }}
                                    </td>

                                    {{-- LISTING ACTIONS --}}
                                    <td class="px-4 py-2 text-center flex flex-wrap">
                                        <a href="{{ route('admin.listing.show', $listing->id) }}"
                                            class="mx-1 bg-green-700 text-white px-3 py-1 rounded hover:bg-green-600">
                                            View
                                        </a>
                                        <a href="{{ route('admin.listing.edit', $listing->id) }}"
                                            class="mx-1 bg-blue-600 text-white px-3 py-1 rounded hover:bg-blue-500">
                                            Edit
                                        </a>
                                        <form action="{{ route('admin.listing.destroy', $listing->id) }}" method="POST"
                                            class="mx-1">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                class="remove-user-btn bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600"
                                                onclick="return confirm('Are you sure to delete this listing?')">
                                                Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="mt-4">
                        {{ $listings->links('vendor.pagination.tailwind') }}
                    </div>
                </div>
            @else
                <p>No listings yet.</p>
                <div class="flex justify-center">
                    <a href="/listing" class="rounded-lg px-3 py-2 bg-blue-800 text-white mt-3 hover:bg-blue-700">Save a
                        list?</a>
                </div>
            @endif
        </div>
    </div>
@endsection
