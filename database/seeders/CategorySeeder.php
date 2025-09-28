<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::insert([
            [
                'categoryName' => 'Batik',
                'description' => 'Kain tradisional Indonesia dengan motif khas yang kaya makna, cocok untuk busana maupun dekorasi.'
            ],
            [
                'categoryName' => 'Kebaya',
                'description' => 'Busana tradisional wanita Indonesia yang elegan, berornamen cantik, sempurna untuk acara formal dan adat.'
            ],
        ]);
    }
}
