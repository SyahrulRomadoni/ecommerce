<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaymentMethodTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $paymentMethod = [
            [
                'name' => "BRI",
            ],
            [
                'name' => "BCA",
            ],
            [
                'name' => "Mandiri",
            ],
        ];
 
        foreach ($paymentMethod as $paymentMethods)
            DB::table('paymet_method')->insert($paymentMethods);
    }
}
