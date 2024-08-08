<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\QuestSeeder;
use Database\Seeders\SetupSeeder;
use Database\Seeders\ScenesSeeder;
use Database\Seeders\TimestampSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


        $this->call([
            QuestSeeder::class,
            ScenesSeeder::class,
            TimestampSeeder::class,
            SetupSeeder::class,
        ]);
    }
}
