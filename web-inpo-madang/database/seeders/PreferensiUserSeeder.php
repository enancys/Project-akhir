<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\PreferensiUser;
use App\Models\User;

class PreferensiUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = User::doesntHave('preferensiUser')->get();

        foreach ($users as $user) {
            PreferensiUser::factory()->create([
                'user_id' => $user->id,
            ]);
        }
    }
}
