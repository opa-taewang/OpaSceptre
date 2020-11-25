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
            'order_status_name' => 'Pending',
        ]);

        DB::table('order_statuses')->insert([
            'id' => 2,
            'order_status_name' => 'Ordered',
        ]);

        DB::table('order_statuses')->insert([
            'id' => 3,
            'order_status_name' => 'Shipping',
        ]);

        DB::table('order_statuses')->insert([
            'id' => 4,
            'order_status_name' => 'Shipped',
        ]);

        DB::table('order_statuses')->insert([
            'id' => 5,
            'order_status_name' => 'Delivered',
        ]);

        DB::table('order_statuses')->insert([
            'id' => 6,
            'order_status_name' => 'Returned',
        ]);
    }
}
