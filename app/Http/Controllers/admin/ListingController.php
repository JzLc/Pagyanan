<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Models\Listing;
use Illuminate\Support\Facades\Hash;

class ListingController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $listing = Listing::paginate(10); // Paginate or use ->get() for all listing
        return view('admin.listing.index', compact('listing'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.listings.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            // 'name' => 'required|string|max:255',
            // 'email' => 'required|email|unique:listing,email',
            // 'password' => 'required|min:8|confirmed',
        ]);

        $listing = Listing::create([
            // 'name' => $validated['name'],
            // 'email' => $validated['email'],
            // 'password' => Hash::make($validated['password']),
        ]);

        $page = request()->query('page', 1);

        return redirect()->route('admin.listings', [
            'id' => $listing->id,
            'page' => $page,
            'listing' => $listing
        ])->with('success', 'Listing created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $listing = Listing::findOrFail($id);

        config(['app.name' =>  $listing->place_name]);

        $page = request()->query('page', 1);
        return view('admin.listings.show', [
            'id' => $listing->id,
            'page' => $page,
            'listing' => $listing
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $listing = Listing::findOrFail($id);

        $page = request()->query('page', 1);

        config(['app.name' =>  $listing->place_name]);

        return view('admin.listings.edit', [
            'id' => $listing->id,
            'page' => $page,
            'listing' => $listing
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Validate the incoming request data
        $request->validate([
            'place_name' => 'required|string|max:255',
            'place_type' => 'required|string',
            'place_description' => 'required|string',
            'place_brgy_street' => 'required|string|max:255',
            'place_municipality_town' => 'required|string|max:255',
            'place_province_city' => 'required|string|max:255',
            'place_room_size' => 'required|numeric',
            'place_monthly_rent' => 'required|numeric',
            'user_name' => 'required|string|max:255',
            'place_email' => 'required|email|max:255',
            'place_contact_num' => 'required|string|max:15',
        ]);

        // Find the listing by ID
        $listing = Listing::findOrFail($id);

        // Update the listing with the validated data
        $listing->update([
            'place_name' => $request->input('place_name'),
            'place_type' => $request->input('place_type'),
            'place_description' => $request->input('place_description'),
            'place_brgy_street' => $request->input('place_brgy_street'),
            'place_municipality_town' => $request->input('place_municipality_town'),
            'place_province_city' => $request->input('place_province_city'),
            'place_room_size' => $request->input('place_room_size'),
            'place_monthly_rent' => $request->input('place_monthly_rent'),
            'user_name' => $request->input('user_name'),
            'place_email' => $request->input('place_email'),
            'place_contact_num' => $request->input('place_contact_num'),
        ]);

        // Redirect back with a success message
        return redirect()->route('admin.listing.show', $listing->id)->with('success', 'Listing updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $listing = Listing::findOrFail($id);
        $listing->delete();

        return redirect()->route('admin.listings')->with('success', 'Listing deleted successfully.');
    }
}
