<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ScenesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('scenes')->insert([
            [
                'name' => 'Battlefield',
                'quest_id' => 1, // Assuming this is related to 'Dragon Slayer'
                'title' => 'Final Battle',
                'description' => 'The ultimate showdown with the dragon.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Forest',
                'quest_id' => 2, // Assuming this is related to 'Treasure Hunt'
                'title' => 'Deep Woods',
                'description' => 'Navigate through the dense forest to find the treasure.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Enemy Camp',
                'quest_id' => 3, // Assuming this is related to 'Rescue Mission'
                'title' => 'Camp Infiltration',
                'description' => 'Sneak into the camp and free the hostages.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
