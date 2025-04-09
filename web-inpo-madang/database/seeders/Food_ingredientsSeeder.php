<?php

namespace Database\Seeders;

use App\Models\Food_ingredients;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Food_ingredientsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Food_ingredients::factory()->count(20)->create();
    }
}
