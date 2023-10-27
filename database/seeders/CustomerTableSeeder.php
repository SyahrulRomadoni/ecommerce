<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $customer = [
            [
                'customer_name' => "customer 1",
            ],
            [
                'customer_name' => "customer 2",
            ],
            [
                'customer_name' => "customer 3",
            ],
        ];
 
        foreach ($customer as $customers)
            DB::table('customer')->insert($customers);
    }
}
