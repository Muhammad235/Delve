<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class QuestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('quests')->insert([
            [
                'title' => 'Dragon Slayer',
                'description' => 'Defeat the dragon and save the kingdom.',
                'thumbnail' => 'dragon_slayer.png',
                'difficulty_level' => 'Hard',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Treasure Hunt',
                'description' => 'Find the hidden treasure in the forest.',
                'thumbnail' => 'treasure_hunt.png',
                'difficulty_level' => 'Medium',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Rescue Mission',
                'description' => 'Rescue the hostages from the enemy camp.',
                'thumbnail' => 'rescue_mission.png',
                'difficulty_level' => 'Easy',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);



    }
}
