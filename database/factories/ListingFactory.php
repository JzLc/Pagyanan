<?php

namespace Database\Factories;

use App\Models\Listing;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Listing>
 */
class ListingFactory extends Factory
{
    protected $model = Listing::class;

    public function definition(): array
    {

        $user = User::factory()->create();

        return [
            'user_id' =>  $user->id,
            'user_name' =>  $user->name,
            'place_name' => fake()->name(),
            'place_description' => $this->faker->paragraph(5),
            'place_type' => fake()->randomElement(['dorm', 'apartment', 'bedspace']),
            'place_region' => fake()->randomElement(['Region 1', 'Region 2', 'CAR']),
            'place_province_city' => fake()->randomElement(['Ilocos Sur', 'Abra', 'Cagayan']),
            'place_municipality_town' => fake()->randomElement(['Vigan City', 'Bangued', 'Aparri']),
            'place_brgy_street' => fake()->randomElement(['Nagtupacan', 'Laang', 'Pawa']),
            'place_email' => fake()->unique()->safeEmail(),
            'place_contact_num' => fake()->unique()->e164PhoneNumber(),
            'place_room_size' => fake()->randomElement([1, 10]),
            'place_monthly_rent' => fake()->randomElement([800, 5000])
        ];
    }
}
