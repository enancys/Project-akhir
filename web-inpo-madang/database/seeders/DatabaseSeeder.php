<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
<<<<<<< HEAD
        $this->call([
            UserSeeder::class,
            CuisinesSeeder::class,
            IngredientsSeeder::class,
            FoodsSeeder::class,
            RestaurantsSeeder::class,
            User_preferencesSeeder::class,
            Food_ingredientsSeeder::class,
            Restaurant_foodsSeeder::class,
        ]);
=======
        User::factory(10)->create();

>>>>>>> f82841a4f6879ae72c36be2a404e1d3e62b9724d
    }
}
