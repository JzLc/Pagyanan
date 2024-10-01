@extends('admin.dashboard')

@section('content')
    <h1 class="flex justify-start text-4xl font-bold text-gray-900 p-4">Users</h1>
    <div class="max-w-full px-4 text-gray-800">
        <div class="saved-listings ">
            @if ($users->count())
                <div class="overflow-x-auto">
                    <table class="min-w-full  border border-gray-200 rounded-lg">
                        <thead>
                            <tr class="border-b bg-blue-950 opacity-95">
                                <th class="text-blue-100 text-left px-4 py-2 text-sm font-medium">No.</th>
                                <!-- Id Column with Sorting Arrows -->
                                <th class="text-blue-100 text-left px-4 py-2 text-sm font-medium">
                                    <div class="flex items-center">
                                        Id
                                        <div class="flex flex-col ml-1">
                                            <a href="{{ route('admin.users', ['sort' => 'id', 'order' => 'asc']) }}"
                                                class="flex justify-center">
                                                <span
                                                    class="material-icons {{ request('sort') === 'id' && request('order') === 'asc' ? 'text-blue-500' : '' }}"
                                                    style="font-size: 16px;">
                                                    arrow_drop_up
                                                </span>
                                            </a>
                                            <a href="{{ route('admin.users', ['sort' => 'id', 'order' => 'desc']) }}"
                                                class="flex justify-center">
                                                <span
                                                    class="material-icons {{ request('sort') === 'id' && request('order') === 'desc' ? 'text-blue-500' : '' }}"
                                                    style="font-size: 16px;">
                                                    arrow_drop_down
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </th>

                                <!-- Role Column with Sorting Arrows -->
                                <th class="text-blue-100 text-left px-4 py-2 text-sm font-medium">
                                    <div class="flex items-center">
                                        Role
                                        <div class="flex flex-col ml-1">
                                            <a href="{{ route('admin.users', ['sort' => 'role', 'order' => 'asc']) }}"
                                                class="flex justify-center">
                                                <span
                                                    class="material-icons {{ request('sort') === 'role' && request('order') === 'asc' ? 'text-blue-500' : '' }}"
                                                    style="font-size: 16px;">
                                                    arrow_drop_up
                                                </span>
                                            </a>
                                            <a href="{{ route('admin.users', ['sort' => 'role', 'order' => 'desc']) }}"
                                                class="flex justify-center">
                                                <span
                                                    class="material-icons {{ request('sort') === 'role' && request('order') === 'desc' ? 'text-blue-500' : '' }}"
                                                    style="font-size: 16px;">
                                                    arrow_drop_down
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </th>

                                <!-- Name Column with Sorting Arrows -->
                                <th class="text-blue-100 text-left px-4 py-2 text-sm font-medium">
                                    <div class="flex items-center">
                                        Name
                                        <div class="flex flex-col ml-1">
                                            <a href="{{ route('admin.users', ['sort' => 'name', 'order' => 'asc']) }}"
                                                class="flex justify-center">
                                                <span
                                                    class="material-icons {{ request('sort') === 'name' && request('order') === 'asc' ? 'text-blue-500' : '' }}"
                                                    style="font-size: 16px;">
                                                    arrow_drop_up
                                                </span>
                                            </a>
                                            <a href="{{ route('admin.users', ['sort' => 'name', 'order' => 'desc']) }}"
                                                class="flex justify-center">
                                                <span
                                                    class="material-icons {{ request('sort') === 'name' && request('order') === 'desc' ? 'text-blue-500' : '' }}"
                                                    style="font-size: 16px;">
                                                    arrow_drop_down
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </th>

                                <!-- Email Column with Sorting Arrows -->
                                <th class="text-blue-100 text-left px-4 py-2 text-sm font-medium">
                                    <div class="flex items-center">
                                        E-mail
                                        <div class="flex flex-col ml-1">
                                            <a href="{{ route('admin.users', ['sort' => 'email', 'order' => 'asc']) }}"
                                                class="flex justify-center">
                                                <span
                                                    class="material-icons {{ request('sort') === 'email' && request('order') === 'asc' ? 'text-blue-500' : '' }}"
                                                    style="font-size: 16px;">
                                                    arrow_drop_up
                                                </span>
                                            </a>
                                            <a href="{{ route('admin.users', ['sort' => 'email', 'order' => 'desc']) }}"
                                                class="flex justify-center">
                                                <span
                                                    class="material-icons {{ request('sort') === 'email' && request('order') === 'desc' ? 'text-blue-500' : '' }}"
                                                    style="font-size: 16px;">
                                                    arrow_drop_down
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </th>

                                <!-- Verified Column with Sorting Arrows -->
                                <th class="text-blue-100 text-left px-4 py-2 text-sm font-medium">
                                    <div class="flex items-center">
                                        Verified
                                        <div class="flex flex-col ml-1">
                                            <a href="{{ route('admin.users', ['sort' => 'email_verified_at', 'order' => 'asc']) }}"
                                                class="flex justify-center">
                                                <span
                                                    class="material-icons {{ request('sort') === 'email_verified_at' && request('order') === 'asc' ? 'text-blue-500' : '' }}"
                                                    style="font-size: 16px;">
                                                    arrow_drop_up
                                                </span>
                                            </a>
                                            <a href="{{ route('admin.users', ['sort' => 'email_verified_at', 'order' => 'desc']) }}"
                                                class="flex justify-center">
                                                <span
                                                    class="material-icons {{ request('sort') === 'email_verified_at' && request('order') === 'desc' ? 'text-blue-500' : '' }}"
                                                    style="font-size: 16px;">
                                                    arrow_drop_down
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </th>

                                <!-- Account Created Column with Sorting Arrows -->
                                <th class="text-blue-100 text-left px-4 py-2 text-sm font-medium">
                                    <div class="flex items-center">
                                        Verified
                                        <div class="flex flex-col ml-1">
                                            <a href="{{ route('admin.users', ['sort' => 'created_at', 'order' => 'asc']) }}"
                                                class="flex justify-center">
                                                <span
                                                    class="material-icons {{ request('sort') === 'created_at' && request('order') === 'asc' ? 'text-blue-500' : '' }}"
                                                    style="font-size: 16px;">
                                                    arrow_drop_up
                                                </span>
                                            </a>
                                            <a href="{{ route('admin.users', ['sort' => 'created_at', 'order' => 'desc']) }}"
                                                class="flex justify-center">
                                                <span
                                                    class="material-icons {{ request('sort') === 'created_at' && request('order') === 'desc' ? 'text-blue-500' : '' }}"
                                                    style="font-size: 16px;">
                                                    arrow_drop_down
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </th>

                                <th class="text-blue-100 px-4 py-2 text-sm font-medium text-center">Actions</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($users as $index => $user)
                                <tr class="border-b hover:bg-gray-100 cursor-pointer">
                                    <td class="px-4 py-2"
                                        onclick="window.location='{{ route('admin.user.show', $user->id) }}'">
                                        {{ ($users->currentPage() - 1) * $users->perPage() + $loop->iteration }}
                                    </td>
                                    <td class="px-4 py-2"
                                        onclick="window.location='{{ route('admin.user.show', $user->id) }}'">
                                        {{ $user->id }}
                                    </td>
                                    <td class="px-4 py-2"
                                        onclick="window.location='{{ route('admin.user.show', $user->id) }}'">
                                        {{ $user->role }}
                                    </td>
                                    <td class="px-4 py-2"
                                        onclick="window.location='{{ route('admin.user.show', $user->id) }}'">
                                        {{ $user->name }}
                                    </td>
                                    <td class="px-4 py-2"
                                        onclick="window.location='{{ route('admin.user.show', $user->id) }}'">
                                        {{ $user->email }}
                                    </td>
                                    <td class="px-4 py-2"
                                        onclick="window.location='{{ route('admin.user.show', $user->id) }}'">
                                        @if ($user->email_verified_at)
                                            <div class="font-medium flex items-center text-green-600">
                                                YES
                                                <span class="material-symbols-outlined " style="font-size: 16px">
                                                    check_circle
                                                </span>
                                            </div>
                                        @else
                                            <div class="font-medium flex items-center text-red-500">
                                                NO
                                                <span class="material-symbols-outlined " style="font-size: 16px">
                                                    cancel
                                                </span>
                                            </div>
                                        @endif

                                    </td>
                                    <td class="px-4 py-2 text-center"
                                        onclick="window.location='{{ route('admin.user.show', $user->id) }}'">
                                        <time>{{ $user->created_at->format('F j, Y') }}</time>
                                    </td>
                                    <td class="px-4 py-2 text-center flex flex-wrap">
                                        <a href="{{ route('admin.user.show', $user->id) }}"
                                            class="mx-1 bg-green-700 text-white px-3 py-1 rounded hover:bg-green-600">
                                            View
                                        </a>
                                        <a href="{{ route('admin.user.edit', $user->id) }}"
                                            class="mx-1 bg-blue-600 text-white px-3 py-1 rounded hover:bg-blue-500">
                                            Edit
                                        </a>
                                        <form action="{{ route('admin.user.destroy', $user->id) }}" method="POST"
                                            class="mx-1">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                class="remove-user-btn bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600"
                                                onclick="return confirm('Are you sure to delete this user?')">
                                                Delete
                                            </button>
                                        </form>

                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="mt-4">
                        {{ $users->links('vendor.pagination.tailwind') }}
                    </div>
                </div>
            @else
                <p>No users yet.</p>
                <div class="flex justify-center">
                    <a href="/user" class="rounded-lg px-3 py-2 bg-blue-800 text-white mt-3 hover:bg-blue-700">
                        Save a list?
                    </a>
                </div>
            @endif
        </div>
    </div>
    {{-- <livewire:show-user-modal /> --}}

@endsection
