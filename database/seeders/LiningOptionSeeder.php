<?php

namespace Database\Seeders;

use App\Models\LiningOption;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LiningOptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        LiningOption::insert([
            [
                'optionName' => 'Furing Lepas',
                'optionPrice' => '50000'
            ],
            [
                'optionName' => 'Furing Pres',
                'optionPrice' => '100000'
            ],
            [
                'optionName' => 'Tanpa Furing',
                'optionPrice' => '0'
            ],
        ]);
    }
}
