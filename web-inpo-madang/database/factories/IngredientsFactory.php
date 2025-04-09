<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Ingredients;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ingredients>
 */
class IngredientsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $ingredients = [
            'Nasi', 'Telur', 'Ayam', 'Kecap', 'Tepung', 'Saus Tomat', 'Keju', 'Pepperoni',
            'Rumput Laut', 'Ikan', 'Soy Sauce', 'Daging Sapi', 'Sayuran Pedas', 'Roti',
            'Sosis', 'Bawang Merah', 'Bawang Putih', 'Cabai', 'Garam', 'Gula', 'Merica',
            'Minyak Goreng', 'Air', 'Susu', 'Cokelat', 'Mentega', 'Tahu', 'Tempe',
            'Udang', 'Kerang', 'Brokoli', 'Wortel', 'Kentang', 'Tomat', 'Selada',
            'Timun', 'Santan', 'Kemangi', 'Seledri', 'Daun Bawang', 'Jahe', 'Kunyit',
            'Lengkuas', 'Sereh', 'Jeruk Nipis', 'Beras', 'Mie', 'Pasta', 'Rempah-rempah',
        ];

        return [
            'name' => fake()->randomElement($ingredients),
        ];
    }
}
