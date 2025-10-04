<?php

namespace Database\Seeders;

use App\Models\ModelType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ModelTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ModelType::insert([
            [
                'typeName' => 'Blouse',
                'typePrice' => 200000,
                'estimatedDays' => '12'
            ],
            [
                'typeName' => 'Dress',
                'typePrice' => 300000,
                'estimatedDays' => '14'
            ],
            [
                'typeName' => 'Rok',
                'typePrice' => 250000,
                'estimatedDays' => '10'
            ],
            [
                'typeName' => 'Set (Blouse + Rok)',
                'typePrice' => 450000,
                'estimatedDays' => '20'
            ]
        ]);
    }
}
