<?php

namespace Database\Seeders;

use App\Models\Accessories;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AccessoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Accessories::insert([
            [
                'accessoriesName' => 'Payet Minimal',
                'accessoriesPrice' => 100000
            ],
            [
                'accessoriesName' => 'Payet Medium',
                'accessoriesPrice' => 300000
            ],
            [
                'accessoriesName' => 'Payet Full',
                'accessoriesPrice' => 500000
            ],
            [
                'accessoriesName' => 'Mote Minimal',
                'accessoriesPrice' => 100000
            ],
            [
                'accessoriesName' => 'Mote Medium',
                'accessoriesPrice' => 300000
            ],
            [
                'accessoriesName' => 'Mote Full',
                'accessoriesPrice' => 500000
            ]
        ]);
    }
}
