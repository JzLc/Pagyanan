@extends('layouts.admin')

@section('content')
    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <h1 class="flex justify-start text-4xl font-bold text-gray-900 p-4">Archives</h1>
    <div class="max-w-full px-4 text-gray-800">
        <div class="saved-listings ">
            @if ($archivedListings->count())
                <div class="overflow-x-auto">
                    <table class="min-w-full  border border-gray-200 rounded-lg">
                        <thead>
                            <tr class="bg-gray-100 border-b">
                                <th class="text-blue-100 text-left px-4 py-2 text-sm font-medium bg-slate-900">No.</th>
                                <th class="text-blue-100 text-left px-4 py-2 text-sm font-medium bg-slate-900">Id</th>
                                <th class="text-blue-100 text-left px-4 py-2 text-sm font-medium bg-slate-900">Name</th>
                                <th class="text-blue-100 text-left px-4 py-2 text-sm font-medium bg-slate-900">Archived At
                                </th>
                                <th class="text-blue-100 text-left px-4 py-2 text-sm font-medium bg-slate-900">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($archivedListings as $archivedListing)
                                <tr>
                                    <td class="px-4 py-2"
                                        onclick="window.location='{{ route('admin.listing.archived', $archivedListing->id) }}'">
                                        {{-- {{ ($archivedListing->currentPage() - 1) * $archivedListing->perPage() + $loop->iteration }} --}}
                                    </td>
                                    <td class="px-4 py-2"
                                        onclick="window.location='{{ route('admin.listing.archived', $archivedListing->id) }}'">
                                        {{ $archivedListing->id }}
                                    </td>
                                    <td class="px-4 py-2"
                                        onclick="window.location='{{ route('admin.listing.archived', $archivedListing->id) }}'">
                                        {{ $archivedListing->name }}
                                    </td>
                                    <td class="px-4 py-2"
                                        onclick="window.location='{{ route('admin.listing.archived', $archivedListing->id) }}'">
                                        <time>{{ $archivedListing->deleted_at->format('F j, Y') }}</time>
                                    </td>
                                    <td class="px-4 py-2">
                                        <form action="{{ route('admin.listing.restore', $archivedListing->id) }}" method="POST"
                                            style="display: inline;">
                                            @csrf
                                            <button type="submit" class="btn btn-success">Restore</button>
                                        </form>
                                        <form action="{{ route('listing.archive', $archivedListing->id) }}" method="POST"
                                            style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Permanently Delete</button>
                                        </form>

                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="mt-4">
                        {{ $archivedListings->links('vendor.pagination.tailwind') }}
                    </div>
                </div>
            @else
                <h4 class="mt-2 mb-2">No Archives yet.</h4>
                <div class="max-w-fit p-2 border rounded-lg shadow-md bg-white">
                    <a href="{{ route('admin.listings') }}"
                        class="block  rounded-lg px-3 py-2 bg-blue-600 text-white mt-2 hover:bg-blue-500">
                        Archive a list?
                    </a>
                    <a href="{{ route('admin.users') }}"
                        class="block  rounded-lg px-3 py-2 bg-slate-500 text-white mt-2 hover:bg-slate-400">
                        Archive a user?
                    </a>
                </div>
            @endif
        </div>
    </div>
@endsection
