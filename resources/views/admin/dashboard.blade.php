@extends('layouts.admin')

@section('content')

<div class="flex-grow p-6">
    <!-- Statistics cards -->
    <div class="grid grid-cols-4 gap-6 mb-6">
        <div class="bg-white p-6 rounded-lg shadow-md">
            <div class="flex items-center justify-between">
                <span class="text-gray-600">Total Views</span>
                <span class="material-icons">visibility</span>
            </div>
            <div class="mt-4 text-2xl font-semibold">$3.456K</div>
            <div class="mt-2 text-sm text-green-500">0.43% ↑</div>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-md">
            <div class="flex items-center justify-between">
                <span class="text-gray-600">Total Profit</span>
                <span class="material-icons">shopping_cart</span>
            </div>
            <div class="mt-4 text-2xl font-semibold">$45,2K</div>
            <div class="mt-2 text-sm text-green-500">4.35% ↑</div>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-md">
            <div class="flex items-center justify-between">
                <span class="text-gray-600">Total Products</span>
                <span class="material-icons">inventory_2</span>
            </div>
            <div class="mt-4 text-2xl font-semibold">2.450</div>
            <div class="mt-2 text-sm text-green-500">2.59% ↑</div>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-md">
            <div class="flex items-center justify-between">
                <span class="text-gray-600">Total Users</span>
                <span class="material-icons">people</span>
            </div>
            <div class="mt-4 text-2xl font-semibold">3.456</div>
            <div class="mt-2 text-sm text-red-500">0.95% ↓</div>
        </div>
    </div>

    <!-- Charts -->
    <div class="grid grid-cols-3 gap-6">
        <div class="col-span-2 bg-white p-6 rounded-lg shadow-md">
            <h3 class="text-lg font-semibold mb-4">Total Revenue and Sales</h3>
            <!-- Placeholder for Chart -->
            <div class="w-full h-64 bg-gray-200 flex items-center justify-center">
                <span>Chart goes here</span>
            </div>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-md">
            <h3 class="text-lg font-semibold mb-4">Profit this week</h3>
            <!-- Placeholder for Bar Chart -->
            <div class="w-full h-64 bg-gray-200 flex items-center justify-center">
                <span>Bar Chart goes here</span>
            </div>
        </div>
    </div>
</div>

@endsection