<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User_preferences;
use App\Models\User;

class User_preferencesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach (User::all() as $user) {
            User_preferences::factory()->create([
                'user_id' => $user->id,
            ]);
        }
    }
}
