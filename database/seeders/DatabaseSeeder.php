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
        // Panggil semua seeder di sini
        $this->call([
            AccessoriesSeeder::class,
            AdminSeeder::class,
            CategorySeeder::class,
            LiningOptionSeeder::class,
            MaterialSeeder::class,
            ModelTypeSeeder::class,
            TechniqueSeeder::class,
        ]);
    }
}
