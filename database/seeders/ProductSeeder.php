<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\SubProduct;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::factory(1)->has(SubProduct::factory(10),'subProducts')->create();
    }
}
