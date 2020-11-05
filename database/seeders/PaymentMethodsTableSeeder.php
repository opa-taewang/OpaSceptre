<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaymentMethodsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('payment_methods')->insert([
            'payment_name' => 'flutterwave',
            // 'payment_status' => '',
            'payment_logo' => 'payment_method/flutter_hlyzzv.png',
            'created_at' => now()->format('Y-m-d H:i:s'),
            'updated_at' => now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('payment_methods')->insert([
            'payment_name' => 'paystack',
            // 'payment_status' => '',
            'payment_logo' => 'payment_method/paystack_wzav90.png',
            'created_at' => now()->format('Y-m-d H:i:s'),
            'updated_at' => now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('payment_methods')->insert([
            'payment_name' => 'stripe',
            // 'payment_status' => '',
            'payment_logo' => 'payment_method/stripe_aagtot.png',
            'created_at' => now()->format('Y-m-d H:i:s'),
            'updated_at' => now()->format('Y-m-d H:i:s'),
        ]);
    }
}
