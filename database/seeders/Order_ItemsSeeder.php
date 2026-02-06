<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Order_ItemsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('order_items')->insert([
            'order_id' => 1,
            'product_id' => 5,
            'quantity' => 2,
            'unit_price' => 69.00 ,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
