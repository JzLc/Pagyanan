<x-app-layout class="">
    <h1 class="flex justify-center text-4xl font-bold text-gray-900 shadow-md py-4 ">Create Listing</h1>
    <div class="max-w-7xl py-2 mx-auto flex justify-center text-gray-800 my-8 ">
        <!-- Form to Create New Listing -->
        <form action="{{ route('listing.store') }}" method="POST" class="py-4 border border-solid-gray-900 shadow-xl">
            @csrf
            <!-- Place Name -->
            <div class="mb-6 flex justify-center">
                <div class="w-3/4">
                    <label for="place_name" class="block text-lg font-semibold text-navy-700">Place Name</label>
                    <input type="text" id="place_name" name="place_name" value="{{ old('place_name') }}"
                        class="w-full mt-1 px-3 py-2 border rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-400">
                </div>
            </div>

            <!-- Description -->
            <div class="mb-6 flex justify-center">
                <div class="w-3/4">
                    <label for="place_description" class="block text-lg font-semibold text-navy-700">Description</label>
                    <textarea id="place_description" name="place_description"
                        class="w-full mt-1 px-3 py-2 border rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-400"
                        rows="4">{{ old('place_description') }}</textarea>
                </div>
            </div>

            <!-- Type -->
            <div class="mb-6 flex justify-center">
                <div class="w-3/4">
                    <label for="place_type" class="block text-lg font-semibold text-navy-700">Type</label>
                    <select id="place_type" name="place_type"
                        class="w-full mt-1 px-3 py-2 border rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-400">
                        <option value="" disabled selected>Select a type</option>
                        <option value="dorm" {{ old('place_type') === 'dorm' ? 'selected' : '' }}>Dorm</option>
                        <option value="apartment" {{ old('place_type') === 'apartment' ? 'selected' : '' }}>Apartment
                        </option>
                        <option value="bedspace" {{ old('place_type') === 'Bedspace' ? 'selected' : '' }}>Bedspace
                        </option>
                    </select>
                </div>
            </div>

            <!-- Located At -->
            <div class="mb-6 flex justify-center">
                <div class="w-3/4">
                    <label for="place_brgy_street" class="block text-lg font-semibold text-navy-700">Located At</label>
                    <input type="text" id="place_region" name="place_region" value="{{ old('place_region') }}"
                        class="w-full mt-1 px-3 py-2 border rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-400"
                        placeholder="Region">
                    <input type="text" id="place_brgy_street" name="place_brgy_street"
                        value="{{ old('place_brgy_street') }}"
                        class="w-full mt-1 px-3 py-2 border rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-400"
                        placeholder="Street">
                    <input type="text" id="place_municipality_town" name="place_municipality_town"
                        value="{{ old('place_municipality_town') }}"
                        class="w-full mt-1 px-3 py-2 border rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-400"
                        placeholder="Town">
                    <input type="text" id="place_province_city" name="place_province_city"
                        value="{{ old('place_province_city') }}"
                        class="w-full mt-1 px-3 py-2 border rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-400"
                        placeholder="City/Province">
                </div>
            </div>

            <!-- Contact Number -->
            <div class="mb-6 flex justify-center">
                <div class="w-3/4">
                    <label for="place_contact_num" class="block text-lg font-semibold text-navy-700">Contact
                        Number</label>
                    <input type="text" id="place_contact_num" name="place_contact_num"
                        value="{{ old('place_contact_num') }}"
                        class="w-full mt-1 px-3 py-2 border rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-400">
                </div>
            </div>

            <!-- E-mail -->
            <div class="mb-6 flex justify-center">
                <div class="w-3/4">
                    <label for="place_email" class="block text-lg font-semibold text-navy-700">E-mail</label>
                    <input type="email" id="place_email" name="place_email" value="{{ old('place_email') }}"
                        class="w-full mt-1 px-3 py-2 border rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-400">
                </div>
            </div>

            <!-- Room Size -->
            <div class="mb-6 flex justify-center">
                <div class="w-3/4">
                    <label for="place_room_size" class="block text-lg font-semibold text-navy-700">Room Size
                        (sqft)</label>
                    <input type="number" id="place_room_size" name="place_room_size"
                        value="{{ old('place_room_size') }}"
                        class="w-full mt-1 px-3 py-2 border rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-400">
                </div>
            </div>

            <!-- Monthly Rent -->
            <div class="mb-6 flex justify-center">
                <div class="w-3/4">
                    <label for="place_monthly_rent" class="block text-lg font-semibold text-navy-700">Monthly Rent
                        (pesos)</label>
                    <input type="number" id="place_monthly_rent" name="place_monthly_rent"
                        value="{{ old('place_monthly_rent') }}"
                        class="w-full mt-1 px-3 py-2 border rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-400">
                </div>
            </div>

            <!-- Submit Button -->
            <div class="mb-6 flex justify-center">
                <div class="w-3/4">
                    <button type="submit"
                        class="w-full bg-blue-500 text-white py-2 px-4 rounded-lg shadow-sm hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-400">
                        Create Listing
                    </button>
                </div>
            </div>


        </form>
    </div>
</x-app-layout>
