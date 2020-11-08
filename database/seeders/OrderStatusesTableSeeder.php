<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderStatusesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('order_statuses')->insert([
            'id' => 1,
            'name' => 'Pending',
        ]);

        DB::table('order_statuses')->insert([
            'id' => 2,
            'name' => 'Ordered',
        ]);

        DB::table('order_statuses')->insert([
            'id' => 3,
            'name' => 'Shipping',
        ]);

        DB::table('order_statuses')->insert([
            'id' => 4,
            'name' => 'Shipped',
        ]);

        DB::table('order_statuses')->insert([
            'id' => 5,
            'name' => 'Delivered',
        ]);

        DB::table('order_statuses')->insert([
            'id' => 6,
            'name' => 'Returned',
        ]);
    }
}
