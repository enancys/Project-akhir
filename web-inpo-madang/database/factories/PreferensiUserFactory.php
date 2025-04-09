<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Panganan;
use App\Models\User;
use App\Models\PreferensiUser;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PreferensiUser>
 */
class PreferensiUserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $favorite_categories = ['Indonesia', 'Italia', 'Jepang', 'Korea', 'Western'];

        $disliked_ingredients = [
            ['nasi', 'telur', 'ayam', 'kecap'],
            ['tepung', 'saus tomat', 'keju', 'pepperoni'],
            ['nasi', 'rumput laut', 'ikan', 'soy sauce'],
            ['nasi', 'daging', 'sayuran pedas'],
            ['roti', 'daging', 'keju', 'sayuran'],
        ];
    
        $dietary_restrictions = [
            ['type' => 'vegetarian', 'items' => ['sayur', 'tomat']],
            ['type' => 'vegan', 'items' => ['sayur', 'buah', 'kacang']],
            ['type' => 'gluten-free', 'items' => ['beras', 'jagung', 'kentang']],
        ];
    
        $favorite_cuisines = ['Bakso', 'Soto', 'Rendang', 'Bakmi', 'Opor Ayam'];        
        return [
            'user_id' => User::inRandomOrder()->first()->id ?? User::factory(),
            'favorite_categories' => json_encode($this->faker->randomElements($favorite_categories, rand(1, 3))),
            'dietary_restrictions' => json_encode($this->faker->randomElement($dietary_restrictions)),
            'disliked_ingredients' => json_encode($this->faker->randomElement($disliked_ingredients)),
            'favorite_cuisines' => json_encode($this->faker->randomElement($favorite_cuisines)),
        ];
        
    }
}
