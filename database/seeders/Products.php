<?php

namespace Database\Seeders;

use App\Models\Products as ModelsProducts;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Products extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ModelsProducts::factory(50)->create();
    }
}
