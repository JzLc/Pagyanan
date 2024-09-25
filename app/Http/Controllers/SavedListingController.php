<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use App\Models\SavedListing;

class SavedListingController extends Controller
{
    // Save a listing for the logged-in user
    public function save(Request $request)
    {
        $listingId = $request->input('listing_id');

        // CHECK IS LIST IS ALREADY SAVED
        $existing = SavedListing::where('user_id', Auth::id())
            ->where('listing_id', $listingId)
            ->first();

        if (!$existing) {
            SavedListing::create([
                'user_id' => Auth::id(),
                'listing_id' => $listingId,
            ]);
            return response()->json(['status' => 'success', 'message' => 'Listing saved!']);
        }

        return response()->json(['status' => 'error', 'message' => 'Listing already saved']);
    }

    // Remove a saved listing for the logged-in user
    public function destroy(Request $request, $ListingId)
    {
        SavedListing::where('user_id', Auth::id())
            ->where('listing_id', $ListingId)
            ->delete();
        
        return redirect()->route('listings.saved')->with('success', 'List Unsaved');
    }

    // Fetch all saved listings for the logged-in user
    public function index()
    {
        $savedListings = SavedListing::with('listing')
            ->where('user_id', Auth::id())
            ->paginate(10);
        // dd($savedListings);
        return view('user.saved-listing', compact('savedListings'));
    }
}
