@extends('layouts.admin')

@section('content')
    <x-breadcrumb :links="[
        ['label' => 'Listings', 'url' => route('admin.listings')],
        ['label' => 'View', 'url' => route('admin.listing.show', $listing->id)],
        ['label' => 'Edit', 'url' => route('admin.listing.show', $listing->id)],
        ['label' => $listing->place_name, 'url' => ''],
    ]" />
    <h1 class="text-4xl font-bold text-gray-900 px-4 border-t-2 border-gray-200">Update User Information</h1>

    <div class="max-w-full px-6 bg-white rounded-lg mt-4">

        <div class="max-w-full px-6 bg-white rounded-lg mt-4">
            <form action="{{ route('admin.listing.update', $listing->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="my-4 p-4 grid grid-cols-1 gap-8 border-b-2 border-gray-200 md:grid-cols-2 lg:grid-cols-3">
                    <!-- Column 1 -->
                    <div class="space-y-6">
                        <div>
                            <label for="place_name" class="block text-sm font-medium text-gray-700 mb-2">Name:</label>
                            <input type="text" id="place_name" name="place_name"
                                value="{{ old('place_name', ucfirst($listing->place_name)) }}"
                                class="block w-full px-3 py-2 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                        </div>
                        <div class="relative inline-block w-64">
                            <label for="place_type" class="block text-sm font-medium text-gray-700 mb-2">Select Type</label>
                            <select id="place_type" name="place_type"
                                class="block w-full px-3 py-2 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                                <option value="apartment" {{ $listing->place_type === 'apartment' ? 'selected' : '' }}>
                                    Apartment</option>
                                <option value="bedspace" {{ $listing->place_type === 'bedspace' ? 'selected' : '' }}>
                                    Bedspace</option>
                                <option value="dorm" {{ $listing->place_type === 'dorm' ? 'selected' : '' }}>Dormitory
                                </option>
                            </select>
                        </div>
                        <div>
                            <label for="place_description"
                                class="block text-sm font-medium text-gray-700 mb-2">Description:</label>
                            <textarea id="place_description" name="place_description" rows="4"
                                class="block w-full px-3 py-2 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">{{ old('place_description', ucfirst($listing->place_description)) }}</textarea>
                        </div>
                    </div>

                    <!-- Column 2 -->
                    <div class="space-y-6">
                        <div>
                            <label for="place_brgy_street" class="block text-sm font-medium text-gray-700 mb-2">Location
                                (Street & Barangay):</label>
                            <input type="text" id="place_brgy_street" name="place_brgy_street"
                                value="{{ old('place_brgy_street', ucfirst($listing->place_brgy_street)) }}"
                                class="block w-full px-3 py-2 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                        </div>
                        <div>
                            <label for="place_municipality_town"
                                class="block text-sm font-medium text-gray-700 mb-2">Municipality/Town:</label>
                            <input type="text" id="place_municipality_town" name="place_municipality_town"
                                value="{{ old('place_municipality_town', ucfirst($listing->place_municipality_town)) }}"
                                class="block w-full px-3 py-2 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                        </div>
                        <div>
                            <label for="place_province_city"
                                class="block text-sm font-medium text-gray-700 mb-2">Province/City:</label>
                            <input type="text" id="place_province_city" name="place_province_city"
                                value="{{ old('place_province_city', ucfirst($listing->place_province_city)) }}"
                                class="block w-full px-3 py-2 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                        </div>
                        <div>
                            <label for="place_room_size" class="block text-sm font-medium text-gray-700 mb-2">Room Size (sq
                                ft):</label>
                            <input type="number" id="place_room_size" name="place_room_size"
                                value="{{ old('place_room_size', $listing->place_room_size) }}"
                                class="block w-full px-3 py-2 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                        </div>
                        <div>
                            <label for="place_monthly_rent" class="block text-sm font-medium text-gray-700 mb-2">Rent
                                (₱):</label>
                            <input type="number" id="place_monthly_rent" name="place_monthly_rent"
                                value="{{ old('place_monthly_rent', $listing->place_monthly_rent) }}"
                                class="block w-full px-3 py-2 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                        </div>
                    </div>

                    <!-- Column 3 -->
                    <div class="space-y-6">
                        <div>
                            <label for="user_name" class="block text-sm font-medium text-gray-700 mb-2">Uploader:</label>
                            <input type="text" id="user_name" name="user_name"
                                value="{{ old('user_name', $listing->user_name) }}"
                                class="block w-full px-3 py-2 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                        </div>
                        <div>
                            <label for="place_email" class="block text-sm font-medium text-gray-700 mb-2">E-mail:</label>
                            <input type="email" id="place_email" name="place_email"
                                value="{{ old('place_email', $listing->place_email) }}"
                                class="block w-full px-3 py-2 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                        </div>
                        <div>
                            <label for="place_contact_num" class="block text-sm font-medium text-gray-700 mb-2">Contact
                                No.:</label>
                            <input type="text" id="place_contact_num" name="place_contact_num"
                                value="{{ old('place_contact_num', $listing->place_contact_num) }}"
                                class="block w-full px-3 py-2 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                        </div>
                        <div>
                            <label for="posted_on" class="block text-sm font-medium text-gray-700 mb-2">Posted on:</label>
                            <input type="text" id="posted_on" name="posted_on"
                                value="{{ $listing->created_at->format('F j, Y') }}" readonly
                                class="block w-full px-3 py-2 bg-gray-100 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                        </div>
                    </div>
                </div>

                <div>
                    <div class="w-32 flex space-x-2 mt-4">
                        <button type="submit"
                            class="bg-green-500 text-white px-3 py-2 rounded hover:bg-green-600">Update</button>
                        <a href="{{ route('admin.listing.show', $listing->id) }}"
                            class="bg-gray-400 text-white px-3 py-2 rounded hover:bg-gray-500">Cancel</a>
                    </div>
                </div>
            </form>

        </div>
    </div>
@endsection
