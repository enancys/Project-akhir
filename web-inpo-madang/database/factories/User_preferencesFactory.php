<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User_preferences;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User_preferences>
 */
class User_preferencesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $categories = ['Indonesia', 'Italia', 'Jepang', 'Korea', 'Western'];
        $ingredients = ['ayam', 'sapi', 'seafood', 'sayuran', 'keju', 'pedas', 'manis'];
        $restrictions = ['vegetarian', 'vegan', 'gluten-free', 'halal'];
        $cuisines = ['Padang', 'Bali', 'Tuscany', 'Tokyo', 'Seoul', 'New York'];

        return [
            'user_id' => User::inRandomOrder()->first()->id,
            'favorite_categories' => fake()->randomElements($categories, fake()->numberBetween(0, 3)),
            'disliked_ingredients' => fake()->randomElements($ingredients, fake()->numberBetween(0, 3)),
            'dietary_restrictions' => fake()->randomElements($restrictions, fake()->numberBetween(0, 2)),
            'favorite_cuisines' => fake()->randomElement($cuisines),
        ];
    }
}
