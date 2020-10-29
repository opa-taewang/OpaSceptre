<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('states')->insert([
            'id' => 1,
            'created_at' => now()->format('Y-m-d H:i:s'),
            'updated_at' => now()->format('Y-m-d H:i:s'),
            'state_name' => 'Abia'
        ]);
        DB::table('states')->insert([
            'id' => 2,
            'created_at' => now()->format('Y-m-d H:i:s'),
            'updated_at' => now()->format('Y-m-d H:i:s'),
            'state_name' => 'Adamawa'
        ]);
        DB::table('states')->insert([
            'id' => 3,
            'created_at' => now()->format('Y-m-d H:i:s'),
            'updated_at' => now()->format('Y-m-d H:i:s'),
            'state_name' => 'Akwa Ibom'
        ]);
        DB::table('states')->insert([
            'id' => 4,
            'created_at' => now()->format('Y-m-d H:i:s'),
            'updated_at' => now()->format('Y-m-d H:i:s'),
            'state_name' => 'Anambra'
        ]);
        DB::table('states')->insert([
            'id' => 5,
            'created_at' => now()->format('Y-m-d H:i:s'),
            'updated_at' => now()->format('Y-m-d H:i:s'),
            'state_name' => 'Bauchi'
        ]);
        DB::table('states')->insert([
            'id' => 6,
            'created_at' => now()->format('Y-m-d H:i:s'),
            'updated_at' => now()->format('Y-m-d H:i:s'),
            'state_name' => 'Bayelsa'
        ]);
        DB::table('states')->insert([
            'id' => 7,
            'created_at' => now()->format('Y-m-d H:i:s'),
            'updated_at' => now()->format('Y-m-d H:i:s'),
            'state_name' => 'Benue'
        ]);
        DB::table('states')->insert([
            'id' => 8,
            'created_at' => now()->format('Y-m-d H:i:s'),
            'updated_at' => now()->format('Y-m-d H:i:s'),
            'state_name' => 'Borno'
        ]);
        DB::table('states')->insert([
            'id' => 9,
            'created_at' => now()->format('Y-m-d H:i:s'),
            'updated_at' => now()->format('Y-m-d H:i:s'),
            'state_name' => 'Cross River'
        ]);
        DB::table('states')->insert([
            'id' => 10,
            'created_at' => now()->format('Y-m-d H:i:s'),
            'updated_at' => now()->format('Y-m-d H:i:s'),
            'state_name' => 'Delta'
        ]);
        DB::table('states')->insert([
            'id' => 11,
            'created_at' => now()->format('Y-m-d H:i:s'),
            'updated_at' => now()->format('Y-m-d H:i:s'),
            'state_name' => 'Ebonyi'
        ]);
        DB::table('states')->insert([
            'id' => 12,
            'created_at' => now()->format('Y-m-d H:i:s'),
            'updated_at' => now()->format('Y-m-d H:i:s'),
            'state_name' => 'Edo'
        ]);
        DB::table('states')->insert([
            'id' => 13,
            'created_at' => now()->format('Y-m-d H:i:s'),
            'updated_at' => now()->format('Y-m-d H:i:s'),
            'state_name' => 'Ekiti'
        ]);
        DB::table('states')->insert([
            'id' => 14,
            'created_at' => now()->format('Y-m-d H:i:s'),
            'updated_at' => now()->format('Y-m-d H:i:s'),
            'state_name' => 'Enugu'
        ]);
        DB::table('states')->insert([
            'id' => 15,
            'created_at' => now()->format('Y-m-d H:i:s'),
            'updated_at' => now()->format('Y-m-d H:i:s'),
            'state_name' => 'FCT'
        ]);
        DB::table('states')->insert([
            'id' => 16,
            'created_at' => now()->format('Y-m-d H:i:s'),
            'updated_at' => now()->format('Y-m-d H:i:s'),
            'state_name' => 'Gombe'
        ]);
        DB::table('states')->insert([
            'id' => 17,
            'created_at' => now()->format('Y-m-d H:i:s'),
            'updated_at' => now()->format('Y-m-d H:i:s'),
            'state_name' => 'Imo'
        ]);
        DB::table('states')->insert([
            'id' => 18,
            'created_at' => now()->format('Y-m-d H:i:s'),
            'updated_at' => now()->format('Y-m-d H:i:s'),
            'state_name' => 'Jigawa'
        ]);
        DB::table('states')->insert([
            'id' => 19,
            'created_at' => now()->format('Y-m-d H:i:s'),
            'updated_at' => now()->format('Y-m-d H:i:s'),
            'state_name' => 'Kaduna'
        ]);
        DB::table('states')->insert([
            'id' => 20,
            'created_at' => now()->format('Y-m-d H:i:s'),
            'updated_at' => now()->format('Y-m-d H:i:s'),
            'state_name' => 'Kano'
        ]);
        DB::table('states')->insert([
            'id' => 21,
            'created_at' => now()->format('Y-m-d H:i:s'),
            'updated_at' => now()->format('Y-m-d H:i:s'),
            'state_name' => 'Katsina'
        ]);
        DB::table('states')->insert([
            'id' => 22,
            'created_at' => now()->format('Y-m-d H:i:s'),
            'updated_at' => now()->format('Y-m-d H:i:s'),
            'state_name' => 'Kebbi'
        ]);
        DB::table('states')->insert([
            'id' => 23,
            'created_at' => now()->format('Y-m-d H:i:s'),
            'updated_at' => now()->format('Y-m-d H:i:s'),
            'state_name' => 'Kogi'
        ]);
        DB::table('states')->insert([
            'id' => 24,
            'created_at' => now()->format('Y-m-d H:i:s'),
            'updated_at' => now()->format('Y-m-d H:i:s'),
            'state_name' => 'Kwara'
        ]);
        DB::table('states')->insert([
            'id' => 25,
            'created_at' => now()->format('Y-m-d H:i:s'),
            'updated_at' => now()->format('Y-m-d H:i:s'),
            'state_name' => 'Lagos'
        ]);
        DB::table('states')->insert([
            'id' => 26,
            'created_at' => now()->format('Y-m-d H:i:s'),
            'updated_at' => now()->format('Y-m-d H:i:s'),
            'state_name' => 'Nasarawa'
        ]);
        DB::table('states')->insert([
            'id' => 27,
            'created_at' => now()->format('Y-m-d H:i:s'),
            'updated_at' => now()->format('Y-m-d H:i:s'),
            'state_name' => 'Niger'
        ]);
        DB::table('states')->insert([
            'id' => 28,
            'created_at' => now()->format('Y-m-d H:i:s'),
            'updated_at' => now()->format('Y-m-d H:i:s'),
            'state_name' => 'Ogun'
        ]);
        DB::table('states')->insert([
            'id' => 29,
            'created_at' => now()->format('Y-m-d H:i:s'),
            'updated_at' => now()->format('Y-m-d H:i:s'),
            'state_name' => 'Ondo'
        ]);
        DB::table('states')->insert([
            'id' => 30,
            'created_at' => now()->format('Y-m-d H:i:s'),
            'updated_at' => now()->format('Y-m-d H:i:s'),
            'state_name' => 'Osun'
        ]);
        DB::table('states')->insert([
            'id' => 31,
            'created_at' => now()->format('Y-m-d H:i:s'),
            'updated_at' => now()->format('Y-m-d H:i:s'),
            'state_name' => 'Oyo'
        ]);
        DB::table('states')->insert([
            'id' => 32,
            'created_at' => now()->format('Y-m-d H:i:s'),
            'updated_at' => now()->format('Y-m-d H:i:s'),
            'state_name' => 'Plateau'
        ]);
        DB::table('states')->insert([
            'id' => 33,
            'created_at' => now()->format('Y-m-d H:i:s'),
            'updated_at' => now()->format('Y-m-d H:i:s'),
            'state_name' => 'Rivers'
        ]);
        DB::table('states')->insert([
            'id' => 34,
            'created_at' => now()->format('Y-m-d H:i:s'),
            'updated_at' => now()->format('Y-m-d H:i:s'),
            'state_name' => 'Sokoto'
        ]);
        DB::table('states')->insert([
            'id' => 35,
            'created_at' => now()->format('Y-m-d H:i:s'),
            'updated_at' => now()->format('Y-m-d H:i:s'),
            'state_name' => 'Taraba'
        ]);
        DB::table('states')->insert([
            'id' => 36,
            'created_at' => now()->format('Y-m-d H:i:s'),
            'updated_at' => now()->format('Y-m-d H:i:s'),
            'state_name' => 'Yobe'
        ]);
        DB::table('states')->insert([
            'id' => 37,
            'created_at' => now()->format('Y-m-d H:i:s'),
            'updated_at' => now()->format('Y-m-d H:i:s'),
            'state_name' => 'Zamfara'
        ]);
    }
}
