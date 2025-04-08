<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Panganan;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Panganan>
 */
class PangananFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $categories = ['Indonesia', 'Italia', 'Jepang', 'Korea', 'Western'];
        $ingredients = [
            ['nasi', 'telur', 'ayam', 'kecap'],
            ['tepung', 'saus tomat', 'keju', 'pepperoni'],
            ['nasi', 'rumput laut', 'ikan', 'soy sauce'],
            ['nasi', 'daging', 'sayuran pedas'],
            ['roti', 'daging', 'keju', 'sayuran'],
        ];
        return [
            'name' => $this->faker->unique()->sentence(3),
            'description' => $this->faker->paragraph(2),
            'category' => json_encode($this->faker->randomElement($categories)),
            'ingredients' => json_encode($this->faker->randomElement($ingredients)),
            'image_url' => $this->faker->imageUrl(640, 480, 'food', true),
        ];
    }
}
