<?php

namespace Database\Seeders;

use App\Models\Technique;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TechniqueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Technique::insert([
            [
                'techniqueName' => 'Canting Tulis',
            ],
            [
                'techniqueName' => 'Celup Ikat',
            ],
            [
                'techniqueName' => 'Cap',
            ],
            [
                'techniqueName' => 'Printing',
            ],
          
        ]);
    }
}
