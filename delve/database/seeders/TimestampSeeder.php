<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TimestampSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('timestamps')->insert([
            [
                'scene_id' => 1, // Related to 'Battlefield'
                'description' => 'Who are you.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'scene_id' => 2, // Related to 'Forest'
                'description' => 'The treasure is buried near the old oak tree.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'scene_id' => 3, // Related to 'Enemy Camp'
                'description' => 'Hostages are held in the central tent.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
