<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Listing>
 */
class ListingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'place_name' => fake()->name(),
            'place_description' => fake()->sentence(),
            'place_type' => 'dorm',
            'place_region' => 'CAR',
            'place_province_city' => 'abra',
            'place_municipality_town' => 'lagangilang',
            'place_brgy_street' => 'pawa',
            'place_email' => fake()->unique()->safeEmail(),
            'place_contact_num' => '09123456789',
            'place_room_size' => '10',
            'place_monthly_rent' => '5000'
        ];
    }
}
