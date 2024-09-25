@extends('admin.dashboard')

@section('content')
    <h2 class="text-2xl font-bold mb-4">Listings</h2>
    <table class="min-w-full bg-white">
        <thead>
            <tr>
                <th class="py-2 px-4 border-b-2"><a href="?sort=owner" class="text-blue-600">Owner</a></th>
                <th class="py-2 px-4 border-b-2"><a href="?sort=place_name" class="text-blue-600">Place Name</a></th>
                <th class="py-2 px-4 border-b-2"><a href="?sort=type" class="text-blue-600">Type</a></th>
                <th class="py-2 px-4 border-b-2"><a href="?sort=location" class="text-blue-600">Location</a></th>
                <th class="py-2 px-4 border-b-2"><a href="?sort=monthly_rent" class="text-blue-600">Monthly Rent</a></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($listings as $listing)
                <tr>
                    <td class="py-2 px-4 border-b">{{ $listing['owner'] }}</td>
                    <td class="py-2 px-4 border-b">{{ $listing['place_name'] }}</td>
                    <td class="py-2 px-4 border-b">{{ $listing['type'] }}</td>
                    <td class="py-2 px-4 border-b">{{ $listing['location'] }}</td>
                    <td class="py-2 px-4 border-b">{{ $listing['monthly_rent'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
