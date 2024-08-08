<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SetupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('setups')->insert([
            [
                'scene_id' => 1, // Related to 'Battlefield'
                'mission' => 'Arm yourself with the enchanted sword.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'scene_id' => 2, // Related to 'Forest'
                'mission' => 'Use the map to locate the treasure.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'scene_id' => 3, // Related to 'Enemy Camp'
                'mission' => 'Silently eliminate the guards before entering the camp.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
