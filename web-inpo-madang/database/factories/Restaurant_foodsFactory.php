<?php

namespace Database\Factories;

use App\Models\Foods;
use App\Models\FoodIngredient;
use App\Models\Restaurants;
use Illuminate\Database\Eloquent\Factories\Factory;
use LDAP\Result;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Restaurant_foods>
 */
class Restaurant_foodsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        return [
            'restaurant_id' => Restaurants::inRandomOrder()->first()->id, // Create a related Food (ID akan diambil saat create)
            'food_id' => Foods::factory(), // Create a related Ingredient (ID akan diambil saat create)
        ];
    }
}
