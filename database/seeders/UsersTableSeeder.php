<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'role_id' => 1,
            'first_name' => 'opasceptre',
            'middle_name' => 'admin',
            'last_name' => 'admin',
            'email' => 'opasceptre@gmail.com',
            'password' => Hash::make('admin123'),
        ]);

        DB::table('users')->insert([
            'role_id' => 2,
            'first_name' => 'Precious',
            'middle_name' => 'Ayobami',
            'last_name' => 'Oladejo',
            'email' => 'oladejo.precious106@gmail.com',
            'password' => Hash::make('user123'),
        ]);
    }
}
