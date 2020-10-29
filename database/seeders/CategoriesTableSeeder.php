<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'category_name' => 'Drinks'
        ]);

        DB::table('categories')->insert([
            'category_name' => 'Electronics'
        ]);

        DB::table('categories')->insert([
            'category_name' => 'Mobile phones or tablets'
        ]);

        DB::table('categories')->insert([
            'category_name' => 'Gift cards'
        ]);

        DB::table('categories')->insert([
            'category_name' => 'Clothing products'
        ]);

        DB::table('categories')->insert([
            'category_name' => 'Coats and jackets'
        ]);

        DB::table('categories')->insert([
            'category_name' => 'Rings and jewellery'
        ]);

        DB::table('categories')->insert([
            'category_name' => 'Computing'
        ]);

        DB::table('categories')->insert([
            'category_name' => 'Gaming'
        ]);
    }
}

