<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Cuisines;
use App\Models\Restaurants;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class RestaurantsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->company(),
            'location' => fake()->address(),
            'phone' => fake()->phoneNumber(),
            'website_url' => fake()->url(),
            'opening_hours' => fake()->sentence(),
            'cuisine_id' => Cuisines::inRandomOrder()->first()->id,
            'rating' => fake()->randomFloat(2, 1, 5),
            'image_url' => fake()->imageUrl(640, 480, 'restaurant', true),
        ];
    }
}
