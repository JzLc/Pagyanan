@extends('layouts.admin')

@section('content')
    {{-- BREADCRUMB STYLE --}}
    <x-breadcrumb :links="[
        ['label' => 'Users', 'url' => route('admin.users')],
        ['label' => 'View', 'url' => route('admin.user.show', $user->id)],
        ['label' => $user->name, 'url' => ''],
    ]" />


    <h1 class="text-4xl font-bold text-gray-900 px-4 border-t-2 border-gray-200">User Information</h1>

    <div class="max-w-full px-6 bg-white rounded-lg mt-4">

        <div class="my-2 py-2 grid grid-cols-1 gap-6 border-b-2 border-gray-200">
            <div>
                <p class="text-sm font-semibold text-gray-500">Name:</p>
                <h2 class="text-lg text-gray-800">{{ ucfirst($user->name) }}</h2>
            </div>
            <div>
                <p class="text-sm font-semibold text-gray-500">Role:</p>
                <p class="text-lg text-gray-800">{{ ucfirst($user->role) }}</p>
            </div>

            <div>
                <p class="text-sm font-semibold text-gray-500">E-mail:</p>
                <p class="text-lg text-gray-800">{{ $user->email }}</p>
            </div>

            <div>
                <p class="text-sm font-semibold text-gray-500">E-mail Verified:</p>
                <p class="text-lg text-gray-800">
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
                </p>
            </div>
            <div>
                <p class="text-sm font-semibold text-gray-500">Created At:</p>
                <p class="text-lg text-gray-800">{{ $user->created_at->format('F j, Y') }}</p>
            </div>

            {{-- <div>
                <p class="text-sm font-semibold text-gray-500">Updated At:</p>
                <p class="text-lg text-gray-800">{{ $user->updated_at->format('F j, Y') }}</p>
            </div> --}}
        </div>
        <div class="w-32 flex space-x-2 mt-4">
            <a href="{{ route('admin.user.edit', ['user' => $user->id, 'page' => request()->get('page', 1)]) }}"
                class="flex items-center w-full border bg-blue-500 text-gray-50 px-4 py-2 rounded-lg hover:bg-blue-400 transition duration-300">
                <span class="material-symbols-outlined">
                    edit
                </span>
            </a>
            <form action="{{ route('admin.user.destroy', $user->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="flex items-center w-full border bg-red-500 text-gray-50 px-4 py-2 rounded-lg hover:bg-red-400 transition duration-300"
                    onclick="return confirm('Are you sure to delete this user?')">
                    <span class="material-symbols-outlined">
                        delete
                    </span>
                </button>
            </form>
        </div>

    </div>
@endsection
