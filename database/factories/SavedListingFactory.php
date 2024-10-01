<?php

namespace Database\Factories;

use App\Models\SavedListing;
use App\Models\User;
use App\Models\Listing;
use Illuminate\Database\Eloquent\Factories\Factory;

class SavedListingFactory extends Factory
{
    protected $model = SavedListing::class;

    public function definition()
    {
        // Create a user and a listing
        $user = User::factory()->create();
        $listing = Listing::factory()->create(['user_id' => $user->id]);

        return [
            'user_id' => $user->id,
            'listing_id' => $listing->id,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
