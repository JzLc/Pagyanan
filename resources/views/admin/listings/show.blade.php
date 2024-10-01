@extends('layouts.admin')

@section('content')
    {{-- BREADCRUMB STYLE --}}
    <x-breadcrumb :links="[
        ['label' => 'Listings', 'url' => route('admin.listings')],
        ['label' => 'View', 'url' => route('admin.listing.show', $listing->id)],
        ['label' => $listing->place_name, 'url' => ''],
    ]" />


    <h1 class="text-4xl font-bold text-gray-900 px-4 border-t-2 border-gray-200">Listing Information</h1>

    <div class="max-w-full px-6 bg-white rounded-lg mt-4">
        <div class="my-4 p-4 grid grid-cols-1 gap-8 border-b-2 border-gray-200 md:grid-cols-2 lg:grid-cols-3">
            <!-- Column 1 -->
            <div class="space-y-6">
                <div>
                    <p class="text-sm font-semibold text-gray-500">Name:</p>
                    <h2 class="text-lg  text-gray-800">{{ ucfirst($listing->place_name) }}</h2>
                </div>
                <div>
                    <p class="text-sm font-semibold text-gray-500">Type:</p>
                    <p class="text-lg  text-gray-800">{{ ucfirst($listing->place_type) }}</p>
                </div>
                <div>
                    <p class="text-sm font-semibold text-gray-500">Description:</p>
                    <p class="text-lg  text-gray-800">{{ ucfirst($listing->place_description) }}</p>
                </div>
            </div>

            <!-- Column 2 -->
            <div class="space-y-6">
                <div>
                    <p class="text-sm font-semibold text-gray-500">Location:</p>
                    <p class="text-lg  text-gray-800">
                        {{ ucfirst($listing->place_brgy_street) . ', ' . ucfirst($listing->place_municipality_town . ', ' . ucfirst($listing->place_province_city)) }}
                    </p>
                </div>
                <div>
                    <p class="text-sm font-semibold text-gray-500">Room:</p>
                    <p class="text-lg  text-gray-800">{{ ucfirst($listing->place_room_size) }} sq ft</p>
                </div>
                <div>
                    <p class="text-sm font-semibold text-gray-500">Rent:</p>
                    <p class="text-lg  text-gray-800">₱{{ ucfirst($listing->place_monthly_rent) }}</p>
                </div>

            </div>

            {{-- COLUMN # --}}
            <div class="space-y-6">
                <div>
                    <p class="text-sm font-semibold text-gray-500">Uploader:</p>
                    <p class="text-lg  text-gray-800">
                        {{ $listing->user_name }}
                    </p>
                </div>
                <div>
                    <p class="text-sm font-semibold text-gray-500">E-mail:</p>
                    <p class="text-lg  text-gray-800">{{ ucfirst($listing->place_email) }}</p>
                </div>
                <div>
                    <p class="text-sm font-semibold text-gray-500">Contact No.:</p>
                    <p class="text-lg  text-gray-800">{{ ucfirst($listing->place_contact_num) }}</p>
                </div>
                <div>
                    <p class="text-sm font-semibold text-gray-500">Posted on:</p>
                    <p class="text-lg  text-gray-800">{{ $listing->created_at->format('F j, Y') }}</p>
                </div>
            </div>
        </div>

        <div class="w-32 flex space-x-2 mt-4">
            <a href="{{ route('admin.listing.edit', ['listing' => $listing->id, 'page' => request()->get('page', 1)]) }}"
                class="flex items-center w-full border bg-blue-500 text-gray-50 px-4 py-2 rounded-lg hover:bg-blue-400 transition duration-300">
                <span class="material-symbols-outlined">
                    edit
                </span>
            </a>
            <form action="{{ route('admin.listing.destroy', $listing->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="flex items-center w-full border bg-red-500 text-gray-50 px-4 py-2 rounded-lg hover:bg-red-400 transition duration-300"
                    onclick="return confirm('Are you sure to delete this listing?')">
                    <span class="material-symbols-outlined">
                        delete
                    </span>
                </button>
            </form>
        </div>

    </div>
@endsection
