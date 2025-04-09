<?php

namespace Database\Factories;

use App\Models\Ingredients;
use App\Models\Foods;
use App\Models\Food_ingredients;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Food_ingredients>
 */
class Food_ingredientsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'food_id' => Foods::inRandomOrder()->first()->id, // Create a related Food (ID akan diambil saat create)
            'ingredient_id' => Ingredients::factory(), // Create a related Ingredient (ID akan diambil saat create)
        ];
    }
}
