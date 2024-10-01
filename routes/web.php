<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListingController as UserListingController;
use App\Http\Controllers\Admin\ListingController as AdminListingController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\SavedListingController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::middleware(['auth', 'admin', 'user'])->group(function () {
    Route::get('/', function () {
        return redirect()->route('dashboard');
    });

    Route::get('/dashboard', function () {
        return view('welcome');
    })->name('dashboard');
});



// GUEST REGISTER
Route::get('/register', [RegisteredUserController::class, 'create'])->name('register');
Route::post('/register', [RegisteredUserController::class, 'store']);

// LOGIN REGISTER
Route::get('/login', [AuthenticatedSessionController::class, 'create'])->name('login');
Route::post('/login', [AuthenticatedSessionController::class, 'store']);


// LOGOUT ROUTE
Route::middleware('auth')->post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');

// Contact routes
Route::get('/contact', [ContactController::class, 'showForm'])->name('contact.form');
Route::post('/contact/send', [ContactController::class, 'sendEmail'])->name('contact.send');

// Example route
Route::get('/jastin', function () {
    return view('portfolio');
});

// FOR USERS ONLY
Route::namespace('user')->middleware(['user'])->group(function () {
    Route::namespace('Listing')->group(function () {
        Route::get('/listing', [UserListingController::class, 'index'])->name('listing.index');
        Route::get('/listing/create', [UserListingController::class, 'create'])->name('listing.create');
        Route::post('/listing', [UserListingController::class, 'store'])->name('listing.store');
        Route::get('/listing/{listing}', [UserListingController::class, 'show'])->name('listing.show');
        Route::get('/listing/{listing}/edit', [UserListingController::class, 'edit'])->name('listing.edit');
        Route::put('/listing/{listing}', [UserListingController::class, 'update'])->name('listing.update');
        Route::delete('/listing/{listing}', [UserListingController::class, 'destroy'])->name('listing.destroy');
    });

    // GET USER'S LISTINGS
    Route::get('/user/{user_id}/listing', [UserListingController::class, 'userListings'])->name('listings.user');

    Route::namespace('SavedListings')->group(function () {
        Route::get('/saved-listings', [SavedListingController::class, 'index'])->name('savedlistings.index');
        Route::post('/saved-listings', [SavedListingController::class, 'store'])->name('savedlistings.store');
        Route::delete('/saved-listings/{id}', [SavedListingController::class, 'destroy'])->name('savedlistings.destroy');
    });

    // USER PROFILES
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// FOR ADMINS ONLY
Route::namespace('admin')->prefix('admin')->middleware(['admin'])->group(function () {
    Route::get('/', function () {
        return redirect()->route('admin.dashboard');
    });

    Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('/users', [AdminController::class, 'users'])->name('admin.users');
    Route::get('/listings', [AdminController::class, 'listings'])->name('admin.listings');
    Route::get('/archives', [AdminController::class, 'archives'])->name('admin.archives');

    // FOR ADMINS ACCESSING LISTING
    Route::namespace('Listing')->group(function () {
        Route::get('/listing/create', [AdminListingController::class, 'create'])->name('admin.listing.create');
        Route::post('/listing', [AdminListingController::class, 'store'])->name('admin.listing.store');
        Route::get('/listing/{listing}', [AdminListingController::class, 'show'])->name('admin.listing.show');
        Route::get('/listing/{listing}/edit', [AdminListingController::class, 'edit'])->name('admin.listing.edit');
        Route::put('/listing/{listing}', [AdminListingController::class, 'update'])->name('admin.listing.update');
        Route::delete('/listing/{listing}', [AdminListingController::class, 'destroy'])->name('admin.listing.destroy');
        // ARCHIVE LISTING
        Route::get('listing/archived', [AdminListingController::class, 'archived'])->name('admin.listing.archived');
        Route::post('listing/{id}/restore', [AdminListingController::class, 'restore'])->name('admin.listing.restore');
        Route::delete('listing/{id}/archive', [AdminListingController::class, 'archive'])->name('admin.listing.archive');
    });

    // FOR ADMINS ACCESSING LISTING
    // no action yet for admins accessing users
    Route::namespace('user')->group(function () {
        Route::get('/user/create', [UserController::class, 'create'])->name('admin.user.create');
        Route::post('/user', [UserController::class, 'store'])->name('admin.user.store');
        Route::get('/user/{user}', [UserController::class, 'show'])->name('admin.user.show');
        Route::get('/user/{user}/edit', [UserController::class, 'edit'])->name('admin.user.edit');
        Route::put('/user/{user}', [UserController::class, 'update'])->name('admin.user.update');
        Route::delete('/user/{user}', [UserController::class, 'destroy'])->name('admin.user.destroy');
    });
});

// FOR GUESTS ONLY
Route::namespace('guest')->middleware(['guest'])->group(function () {
    Route::get('/guest/listing', [ListingController::class, 'index']);
    Route::get('/guest/listing/{listing}', [ListingController::class, 'guestShow'])->name('listing');
});

// Authentication routes
require __DIR__ . '/auth.php';
