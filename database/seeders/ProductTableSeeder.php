<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $product = [
            [
                'name' => "product 1",
                'price' => 10000
            ],
            [
                'name' => "product 2",
                'price' => 20000
            ],
            [
                'name' => "product 3",
                'price' => 30000
            ],
        ];
 
        foreach ($product as $products)
            DB::table('product')->insert($products);
    }
}
