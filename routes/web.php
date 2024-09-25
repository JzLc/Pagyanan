<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListingController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\SavedListingController;

// GUEST ROUTES
Route::get('/', function () {
    return view('welcome');
})->name('dashboard');

Route::get('/guest/listing', [ListingController::class, 'guestIndex']);
Route::get('/guest/listing/{listing}', [ListingController::class, 'guestShow'])->name('guestListing');

Route::get('/login', function () {
    return view('welcome');
})->name('login');

// Contact routes
Route::get('/contact', [ContactController::class, 'showForm'])->name('contact.form');
Route::post('/contact/send', [ContactController::class, 'sendEmail'])->name('contact.send');

// Example route
Route::get('/jastin', function () {
    return view('portfolio');
});

// AUTHENTICATED ROUTES (use middleware 'auth' to protect them)
Route::middleware('auth')->group(function () {
    // LISTINGS
    Route::get('/listing', [ListingController::class, 'index'])->name('listing.index');
    Route::get('/listing/create', [ListingController::class, 'create'])->name('listing.create');
    Route::post('/listing', [ListingController::class, 'store'])->name('listing.store');
    Route::get('/listing/{listing}', [ListingController::class, 'show'])->name('listing.show');
    Route::get('/listing/{listing}/edit', [ListingController::class, 'edit'])->name('listing.edit');
    Route::put('/listing/{listing}', [ListingController::class, 'update'])->name('listing.update');
    Route::delete('/listing/{listing}', [ListingController::class, 'destroy'])->name('listing.destroy');

    // GET USER'S LISTINGS
    Route::get('/user/{user_id}/listing', [ListingController::class, 'userListings'])->name('listings.user');

    // SAVED LISTINGS
    Route::get('/saved-listings', [SavedListingController::class, 'index'])->name('listings.saved');
    Route::post('/saved-listings', [SavedListingController::class, 'save'])->name('save.listing');
    Route::delete('/saved-listings/{id}', [SavedListingController::class, 'destroy'])->name('remove.listing');


    // FILTER LISTINGS BY PRICE
    Route::get('/listing/filter', [ListingController::class, 'filterRent'])->name('listing.filter');

    // USER PROFILES
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::prefix('admin')->group(function () {
    Route::get('/users', [AdminController::class, 'users'])->name('admin.users');
    Route::get('/listings', [AdminController::class, 'listings'])->name('admin.listings');
});

// Authentication routes
require __DIR__ . '/auth.php';
