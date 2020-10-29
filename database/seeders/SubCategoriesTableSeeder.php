<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('subcategories')->insert([
            'category_id' => '2',
            'subcategory_name' => 'Generators & Portable Power',
        ]);

        DB::table('subcategories')->insert([
            'category_id' => '2',
            'subcategory_name' => 'Television & Video',
        ]);

        DB::table('subcategories')->insert([
            'category_id' => '2',
            'subcategory_name' => 'Cameras & Photos',
        ]);

        DB::table('subcategories')->insert([
            'category_id' => '2',
            'subcategory_name' => 'DVD Players & Recorders',
        ]);

        DB::table('subcategories')->insert([
            'category_id' => '3',
            'subcategory_name' => 'Mobile Phones',
        ]);

        DB::table('subcategories')->insert([
            'category_id' => '3',
            'subcategory_name' => 'Smartphones',
        ]);

        DB::table('subcategories')->insert([
            'category_id' => '3',
            'subcategory_name' => 'Tablets',
        ]);

        DB::table('subcategories')->insert([
            'category_id' => '3',
            'subcategory_name' => 'Tablet Accessories',
        ]);

        DB::table('subcategories')->insert([
            'category_id' => '3',
            'subcategory_name' => 'Mobile Accessories',
        ]);

        DB::table('subcategories')->insert([
            'category_id' => '8',
            'subcategory_name' => 'Computers',
        ]);

        DB::table('subcategories')->insert([
            'category_id' => '8',
            'subcategory_name' => 'Data Storage',
        ]);

        DB::table('subcategories')->insert([
            'category_id' => '8',
            'subcategory_name' => 'Antivirus & Security',
        ]);

        DB::table('subcategories')->insert([
            'category_id' => '8',
            'subcategory_name' => 'Printers',
        ]);

        DB::table('subcategories')->insert([
            'category_id' => '9',
            'subcategory_name' => 'PlayStation',
        ]);

        DB::table('subcategories')->insert([
            'category_id' => '9',
            'subcategory_name' => 'XBOX',
        ]);

        DB::table('subcategories')->insert([
            'category_id' => '9',
            'subcategory_name' => 'Nintendo',
        ]);

    }
}





