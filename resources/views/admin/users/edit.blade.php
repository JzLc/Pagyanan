@extends('layouts.admin')

@section('content')
    <x-breadcrumb :links="[
        ['label' => 'Users', 'url' => route('admin.users')],
        ['label' => 'View', 'url' => route('admin.user.show', $user->id)],
        ['label' => 'Edit', 'url' => route('admin.user.edit', $user->id)],
        ['label' => $user->name, 'url' => ''],
    ]" />
    <h1 class="text-4xl font-bold text-gray-900 px-4 border-t-2 border-gray-200">Update User Information</h1>


    <div class="max-w-full px-6 bg-white rounded-lg mt-4">
        <div class="my-2 py-2 grid grid-cols-1 gap-6 border-b-2 border-gray-200">
            <form action="{{ route('admin.user.update', $user->id) }}" method="POST">
                @csrf
                @method('PUT')

                <!-- Name -->
                <div>
                    <label for="name" class="text-sm font-semibold text-gray-500">Name:</label>
                    <input type="text" id="name" name="name" value="{{ old('name', ucfirst($user->name)) }}"
                        class="block w-1/4 px-3 py-2 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                </div>

                <!-- Role -->
                <div>
                    <label for="role" class="text-sm font-semibold text-gray-500">Role:</label>
                    <select id="role" name="role"
                        class="block w-32 px-3 py-2 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                        <option value="user" {{ $user->role === 'user' ? 'selected' : '' }}>User</option>
                        <option value="admin" {{ $user->role === 'admin' ? 'selected' : '' }}>Admin</option>
                        <option value="super_admin" {{ $user->role === 'super_admin' ? 'selected' : '' }}>Super Admin
                        </option>
                    </select>
                </div>

                <!-- Email -->
                <div>
                    <label for="email" class="text-sm font-semibold text-gray-500">E-mail:</label>
                    <input type="email" id="email" name="email" value="{{ old('email', $user->email) }}"
                        class="block w-1/4 px-3 py-2 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                </div>

                <!-- Email Verified -->
                <div>
                    <p class="text-sm font-semibold text-gray-500">E-mail Verified:</p>
                    <div class="flex items-center">
                        <input type="radio" id="email_verified_yes" name="email_verified_at" value="1"
                            {{ $user->email_verified_at ? 'checked' : '' }}>
                        <label for="email_verified_yes" class="ml-2">Yes</label>

                        <input type="radio" id="email_verified_no" name="email_verified_at" value="0"
                            {{ !$user->email_verified_at ? 'checked' : '' }} class="ml-4">
                        <label for="email_verified_no" class="ml-2">No</label>
                    </div>
                </div>

                <!-- Created At (readonly) -->
                <div>
                    <label for="created_at" class="text-sm font-semibold text-gray-500">Created At:</label>
                    <input type="text" id="created_at" value="{{ $user->created_at->format('F j, Y') }}" readonly
                        class="block w-full px-3 py-2 bg-gray-100 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                </div>
        </div>

        <!-- Submit and Cancel Buttons -->
        <div class="w-32 flex space-x-2 mt-4">
            <button type="submit" class="bg-green-500 text-white px-3 py-2 rounded hover:bg-green-600">
                Update
            </button>
            <a href="{{ route('admin.user.show', $user->id) }}"
                class="bg-gray-400 text-white px-3 py-2 rounded hover:bg-gray-500">
                Cancel
            </a>
            </form>
        </div>
    </div>

    <!-- Delete Button -->
    <form action="{{ route('admin.user.destroy', $user->id) }}" method="POST" class="mt-4">
        @csrf
        @method('DELETE')
        <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-400 transition duration-300"
            onclick="return confirm('Are you sure to delete this user?')">
            Delete
        </button>
    </form>
@endsection
