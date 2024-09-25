<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function users()
    {
        return view('admin.users');
    }

    public function listings()
    {
        // Fetch data for listings
        $listings = [
            ['owner' => 'John Doe', 'place_name' => 'Apartment 1', 'type' => 'Apartment', 'location' => 'NYC', 'monthly_rent' => 1200],
            ['owner' => 'Jane Smith', 'place_name' => 'House 2', 'type' => 'House', 'location' => 'LA', 'monthly_rent' => 2500],
        ];

        return view('admin.listings', compact('listings'));
    }

    
}
