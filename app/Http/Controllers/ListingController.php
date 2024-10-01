<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $listings = Listing::latest()
            ->filter(request(['search', 'tag']))
            ->get();
        // ->where('archived', false)
        return view('lists.listings')->with('listings', $listings);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('lists.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the input
        $validatedData = $request->validate([
            'place_name' => 'required|string|max:255',
            'place_description' => 'nullable|string',
            'place_type' => 'required|string|max:255',
            'place_region' => 'required|string|max:255',
            'place_province_city' => 'required|string|max:255',
            'place_municipality_town' => 'required|string|max:255',
            'place_brgy_street' => 'required|string|max:255',
            'place_contact_num' => 'required|string|max:12',
            'place_email' => 'required|email|max:255',
            'place_room_size' => 'required|numeric|min:0',
            'place_monthly_rent' => 'required|numeric|min:0',
        ]);
        // Create a new listing with validated data
        $validatedData['user_id'] = auth()->id();
        $validatedData['user_name'] = auth()->user()->name;

        Listing::create($validatedData);
        // Redirect to the listings index or another route with a success message
        return redirect()->route('listings.user', auth()->id()) // Assuming 'listings.index' is the route name for the index
            ->with('success', 'Listing created successfully!');
        // return view('lists.listings')->with('listings', $listings);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {

        // Find listing or fail with 404
        $listing = Listing::find($id);
        if (!$listing) {
            return redirect()->back()->with('error', 'Listing not found');
        }
        return view('lists.show')->with('listing', $listing);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $listings = Listing::find($id)->where('user_id', auth()->id())->get();
        return view('lists.edit', compact('listings'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Listing $listing)
    {

        // Validate the input
        $validatedData = $request->validate([
            'place_name' => 'required|string|max:255',
            'place_description' => 'nullable|string',
            'place_type' => 'required|string|max:255',
            'place_region' => 'required|string|max:255',
            'place_province_city' => 'required|string|max:255',
            'place_municipality_town' => 'required|string|max:255',
            'place_brgy_street' => 'required|string|max:255',
            'place_contact_num' => 'required|string|max:20',
            'place_email' => 'required|email|max:255',
            'place_room_size' => 'required|numeric|min:0',
            'place_monthly_rent' => 'required|numeric|min:0',
        ]);

        $validatedData['user_id'] = auth()->id();
        $validatedData['user_name'] = auth()->user()->name;

        // Update the listing with validated data
        $listing->update($validatedData);

        // Redirect to the listings index or another route with a success message
        return redirect()->route('listings.user', auth()->id()) // Assuming 'listings.index' is the route name for the index
            ->with('success', 'Listing updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $listing = Listing::findOrFail($id);

        // Check if the authenticated user is the owner of the listing
        if (auth()->id() !== $listing->user_id) {
            return redirect()->route('listings.user')->with('error', 'Unauthorized action.');
        }

        // Delete the listing
        $listing->delete();

        return redirect()->route('listings.user', auth()->id())->with('success', 'Listing deleted successfully.');
    }


    public function filterRent(Request $request)
    {
        // dd($request);
        // Validate the request parameters (optional)
        $request->validate([
            'min_rent_input' => 'nullable|numeric',
            'max_rent_input' => 'nullable|numeric',
        ]);

        // Initialize the query
        $query = Listing::query();

        // Get min and max rent from request
        $minRent = $request->input('min_rent_input');
        $maxRent = $request->input('max_rent_input');

        // Apply filters if input is provided
        if (!empty($minRent)) {
            $query->where('place_monthly_rent', '>=', $minRent);
        }

        if (!empty($maxRent)) {
            $query->where('place_monthly_rent', '<=', $maxRent);
        }

        // Execute the query
        $listings = $query->get();
        dd($listings);
        // Return the filtered listings to the view
        return view('lists.listings', compact('listings'));
    }

    public function userListings()
    {
        $listings = Listing::where('user_id', auth()->id())->get();
        return view('user.listings', compact('listings'));
    }

    public function guestIndex()
    {
        $listings = Listing::latest()
            ->filter(request(['search', 'tag']))
            ->get();
        // ->where('archived', false)
        return view('guest.listings')->with('listings', $listings);
    }

    public function guestShow($id)
    {

        // Find listing or fail with 404
        $listing = Listing::find($id);
        if (!$listing) {
            return redirect()->back()->with('error', 'Listing not found');
        }
        return view('guest.show')->with('listing', $listing);
    }

    // VIEW ARCHIVES
    public function archived()
    {
        $archivedListings = Listing::onlyTrashed()->get();
        return view('admin.archives')->with($archivedListings, 'archivedListings');
    }

    // ARCHIVE lISTING
    public function archive($id)
    {
        $listings = Listing::findOrFail($id);
        $listings->delete();

        return redirect()->route('listings.index')->with('success', 'Listing archived successfully.');
    }

    // RESTORE ARCHIVED
    public function restore($id)
    {
        $listings = Listing::withTrashed()->findOrFail($id);
        $listings->restore();

        return redirect()->route('listings.archived')->with('success', 'Listing restored successfully.');
    }
}
