<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function index()
    {
        config(['app.name' => 'Dashboard']);
        return view('admin.dashboard');
    }

    public function users(Request $request)
    {
        config(['app.name' => 'Users']);

        $sort = $request->input('sort', 'id');
        $order = $request->input('order', 'asc');

        $users = User::orderBy($sort, $order)
            ->paginate(15);

        return view('admin.users')->with('users', $users);
    }

    public function listings()
    {
        config(['app.name' => 'Listings']);
        $listings = Listing::paginate(15);
        return view('admin.listings')->with('listings', $listings);
    }

    public function archives()
    {
        config(['app.name' => 'Archives']);
        $archivedListings = Listing::onlyTrashed()->get();
        // dd($archivedListings);
        return view('admin.archives')->with('archivedListings', $archivedListings);
    }

    // public function archived()
    // {
    //     $archivedListings = Listing::onlyTrashed()->get();
    //     return view('admin.archives')->with($archivedListings, 'archivedListings');
    // }


}
