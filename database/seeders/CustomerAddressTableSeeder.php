<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomerAddressTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $customerAddress = [
            [
                'customer_id' => 1,
                'address' => "address 1"
            ],
            [
                'customer_id' => 2,
                'address' => "address 2"
            ],
            [
                'customer_id' => 3,
                'address' => "address 3"
            ],
        ];
 
        foreach ($customerAddress as $customerAddresss)
            DB::table('customer_address')->insert($customerAddresss);
    }
}
