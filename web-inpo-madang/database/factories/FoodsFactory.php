<?php

namespace Database\Factories;

use App\Models\Foods;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Foods>
 */
class FoodsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $categories = ['Indonesia', 'Italia', 'Jepang', 'Korea', 'Western', 'Dessert', 'Minuman', 'Camilan'];
        $ingredients = [
            ['nasi', 'telur', 'ayam', 'kecap'],
            ['tepung', 'saus tomat', 'keju', 'pepperoni'],
            ['nasi', 'rumput laut', 'ikan', 'soy sauce'],
            ['daging', 'sayuran pedas', 'nasi'],
            ['roti', 'daging', 'keju', 'sayuran'],
            ['cokelat', 'gula', 'susu'],
            ['air', 'gula', 'es'],
            ['keripik', 'garam', 'bumbu'],
        ];
        return [
            'name' => fake()->unique()->sentence(3),
            'description' => fake()->paragraph(2),
            'ingredients' => json_encode(fake()->randomElement($ingredients)),
            'category' => fake()->randomElement($categories),
            'image_url' => fake()->imageUrl(640, 480, 'food', true),
        ];
    }
}
