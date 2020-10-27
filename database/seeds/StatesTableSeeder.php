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
            'state_name' => 'Abia'
        ]);
        DB::table('states')->insert([
            'id' => 2,
            'state_name' => 'Adamawa'
        ]);
        DB::table('states')->insert([
            'id' => 3,
            'state_name' => 'Akwa Ibom'
        ]);
        DB::table('states')->insert([
            'id' => 4,
            'state_name' => 'Anambra'
        ]);
        DB::table('states')->insert([
            'id' => 5,
            'state_name' => 'Bauchi'
        ]);
        DB::table('states')->insert([
            'id' => 6,
            'state_name' => 'Bayelsa'
        ]);
        DB::table('states')->insert([
            'id' => 7,
            'state_name' => 'Benue'
        ]);
        DB::table('states')->insert([
            'id' => 8,
            'state_name' => 'Borno'
        ]);
        DB::table('states')->insert([
            'id' => 9,
            'state_name' => 'Cross River'
        ]);
        DB::table('states')->insert([
            'id' => 10,
            'state_name' => 'Delta'
        ]);
        DB::table('states')->insert([
            'id' => 11,
            'state_name' => 'Ebonyi'
        ]);
        DB::table('states')->insert([
            'id' => 12,
            'state_name' => 'Edo'
        ]);
        DB::table('states')->insert([
            'id' => 13,
            'state_name' => 'Ekiti'
        ]);
        DB::table('states')->insert([
            'id' => 14,
            'state_name' => 'Enugu'
        ]);
        DB::table('states')->insert([
            'id' => 15,
            'state_name' => 'FCT'
        ]);
        DB::table('states')->insert([
            'id' => 16,
            'state_name' => 'Gombe'
        ]);
        DB::table('states')->insert([
            'id' => 17,
            'state_name' => 'Imo'
        ]);
        DB::table('states')->insert([
            'id' => 18,
            'state_name' => 'Jigawa'
        ]);
        DB::table('states')->insert([
            'id' => 19,
            'state_name' => 'Kaduna'
        ]);
        DB::table('states')->insert([
            'id' => 20,
            'state_name' => 'Kano'
        ]);
        DB::table('states')->insert([
            'id' => 21,
            'state_name' => 'Katsina'
        ]);
        DB::table('states')->insert([
            'id' => 22,
            'state_name' => 'Kebbi'
        ]);
        DB::table('states')->insert([
            'id' => 23,
            'state_name' => 'Kogi'
        ]);
        DB::table('states')->insert([
            'id' => 24,
            'state_name' => 'Kwara'
        ]);
        DB::table('states')->insert([
            'id' => 25,
            'state_name' => 'Lagos'
        ]);
        DB::table('states')->insert([
            'id' => 26,
            'state_name' => 'Nasarawa'
        ]);
        DB::table('states')->insert([
            'id' => 27,
            'state_name' => 'Niger'
        ]);
        DB::table('states')->insert([
            'id' => 28,
            'state_name' => 'Ogun'
        ]);
        DB::table('states')->insert([
            'id' => 29,
            'state_name' => 'Ondo'
        ]);
        DB::table('states')->insert([
            'id' => 30,
            'state_name' => 'Osun'
        ]);
        DB::table('states')->insert([
            'id' => 31,
            'state_name' => 'Oyo'
        ]);
        DB::table('states')->insert([
            'id' => 32,
            'state_name' => 'Plateau'
        ]);
        DB::table('states')->insert([
            'id' => 33,
            'state_name' => 'Rivers'
        ]);
        DB::table('states')->insert([
            'id' => 34,
            'state_name' => 'Sokoto'
        ]);
        DB::table('states')->insert([
            'id' => 35,
            'state_name' => 'Taraba'
        ]);
        DB::table('states')->insert([
            'id' => 36,
            'state_name' => 'Yobe'
        ]);
        DB::table('states')->insert([
            'id' => 37,
            'state_name' => 'Zamfara'
        ]);
    }
}
