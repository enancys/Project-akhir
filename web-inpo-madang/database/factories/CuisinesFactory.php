<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Cuisines;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cuisines>
 */
class CuisinesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $cuisines = [
            'Indonesian', 'Italian', 'Japanese', 'Chinese', 'Western',
            'Mexican', 'Thai', 'Indian', 'Korean', 'French', 'Vietnamese',
            'Mediterranean', 'American', 'Spanish', 'Greek', 'Middle Eastern',
        ];
        return [
            'name' => fake()->randomElement($cuisines),
        ];

    }
}
