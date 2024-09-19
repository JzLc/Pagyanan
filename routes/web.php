<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\ListingController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ContactController;
use App\Mail\ContactFormMail;

// GUEST
Route::get('/', function () {
    return redirect('/dashboard');
})->name('dashboard');

Route::get('/dashboard', function () {
    return view('welcome');
})->name('dashboard');

route::get('/guest/listing', [ListingController::class, 'guestIndex']);
Route::get('/guest/listing/{listing}', [ListingController::class, 'guestShow'])->name('guestListing');


Route::get('/login', function () {
    return view('welcome');
})->middleware(['auth', 'verified']);


Route::get('/contact', [ContactController::class, 'showForm'])->name('contact.form');
Route::post('/contact/send', [ContactController::class, 'sendEmail'])->name('contact.send');

Route::get('/jastin', function () {
    return view('portfolio');
});


Route::middleware('auth')->group(function () {
    // ALL LISTINGS
    route::get('/listing', [ListingController::class, 'index'])->name('listing.index');

    Route::get('/listing/create', [ListingController::class, 'create'])->name('listing.create');
    Route::post('/listing', [ListingController::class, 'store'])->name('listing.store');
    Route::get('/listing/{listing}', [ListingController::class, 'show'])->name('listing.show');
    Route::get('/listing/{listing}/edit', [ListingController::class, 'edit'])->name('listing.edit');
    route::put('/listing/{listing}', [ListingController::class, 'update'])->name('listing.update');
    route::delete('/listing/{id}', [ListingController::class, 'destroy'])->name('listing.destroy');

    route::get('/user/{user_id}/listing', [ListingController::class, 'userListings'])->name('listings.user');

    //FILTER PRICES
    route::get('/listing/filter', [ListingController::class, 'filterRent'])->name('listing.filter');

    // USER PROFILES
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
