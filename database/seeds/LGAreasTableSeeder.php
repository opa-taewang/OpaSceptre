<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LGAreasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('lgareas')->insert([
            'id' => 1,
            'state_id' => 1,
            'lgarea_name'=> 'Aba North',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 2,
            'state_id' => 1,
            'lgarea_name'=> 'Aba South',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 3,
            'state_id' => 1,
            'lgarea_name'=> 'Arochukwu',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 4,
            'state_id' => 1,
            'lgarea_name'=> 'Bende',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 5,
            'state_id' => 1,
            'lgarea_name'=> 'Ikwuano',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 6,
            'state_id' => 1,
            'lgarea_name'=> 'Isiala Ngwa North',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 7,
            'state_id' => 1,
            'lgarea_name'=> 'Isiala Ngwa South',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 8,
            'state_id' => 1,
            'lgarea_name'=> 'Isuikwuato',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 9,
            'state_id' => 1,
            'lgarea_name'=> 'Obi Ngwa',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 10,
            'state_id' => 1,
            'lgarea_name'=> 'Ohafia',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 11,
            'state_id' => 1,
            'lgarea_name'=> 'Osisioma',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 12,
            'state_id' => 1,
            'lgarea_name'=> 'Ugwunagbo',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 13,
            'state_id' => 1,
            'lgarea_name'=> 'Ukwa East',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 14,
            'state_id' => 1,
            'lgarea_name'=> 'Ukwa West',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 15,
            'state_id' => 1,
            'lgarea_name'=> 'Umuahia North',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 16,
            'state_id' => 1,
            'lgarea_name'=> 'Umuahia South',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 17,
            'state_id' => 1,
            'lgarea_name'=> 'Umu Nneochi',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 18,
            'state_id' => 2,
            'lgarea_name'=> 'Demsa',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 19,
            'state_id' => 2,
            'lgarea_name'=> 'Fufure',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 20,
            'state_id' => 2,
            'lgarea_name'=> 'Ganye',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 21,
            'state_id' => 2,
            'lgarea_name'=> 'Gayuk',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 22,
            'state_id' => 2,
            'lgarea_name'=> 'Gombi',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 23,
            'state_id' => 2,
            'lgarea_name'=> 'Grie',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 24,
            'state_id' => 2,
            'lgarea_name'=> 'Hong',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 25,
            'state_id' => 2,
            'lgarea_name'=> 'Jada',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 26,
            'state_id' => 2,
            'lgarea_name'=> 'Larmurde',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 27,
            'state_id' => 2,
            'lgarea_name'=> 'Madagali',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 28,
            'state_id' => 2,
            'lgarea_name'=> 'Maiha',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 29,
            'state_id' => 2,
            'lgarea_name'=> 'Mayo Belwa',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 30,
            'state_id' => 2,
            'lgarea_name'=> 'Michika',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 31,
            'state_id' => 2,
            'lgarea_name'=> 'Mubi North',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 32,
            'state_id' => 2,
            'lgarea_name'=> 'Mubi South',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 33,
            'state_id' => 2,
            'lgarea_name'=> 'Numan',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 34,
            'state_id' => 2,
            'lgarea_name'=> 'Shelleng',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 35,
            'state_id' => 2,
            'lgarea_name'=> 'Song',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 36,
            'state_id' => 2,
            'lgarea_name'=> 'Toungo',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 37,
            'state_id' => 2,
            'lgarea_name'=> 'Yola North',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 38,
            'state_id' => 2,
            'lgarea_name'=> 'Yola South',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 39,
            'state_id' => 3,
            'lgarea_name'=> 'Abak',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 40,
            'state_id' => 3,
            'lgarea_name'=> 'Eastern Obolo',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 41,
            'state_id' => 3,
            'lgarea_name'=> 'Eket',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 42,
            'state_id' => 3,
            'lgarea_name'=> 'Esit Eket',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 43,
            'state_id' => 3,
            'lgarea_name'=> 'Essien Udim',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 44,
            'state_id' => 3,
            'lgarea_name'=> 'Etim Ekpo',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 45,
            'state_id' => 3,
            'lgarea_name'=> 'Etinan',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 46,
            'state_id' => 3,
            'lgarea_name'=> 'Ibeno',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 47,
            'state_id' => 3,
            'lgarea_name'=> 'Ibesikpo Asutan',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 48,
            'state_id' => 3,
            'lgarea_name'=> 'Ibiono-Ibom',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 49,
            'state_id' => 3,
            'lgarea_name'=> 'Ika',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 50,
            'state_id' => 3,
            'lgarea_name'=> 'Ikono',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 51,
            'state_id' => 3,
            'lgarea_name'=> 'Ikot Abasi',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 52,
            'state_id' => 3,
            'lgarea_name'=> 'Ikot Ekpene',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 53,
            'state_id' => 3,
            'lgarea_name'=> 'Ini',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 54,
            'state_id' => 3,
            'lgarea_name'=> 'Itu',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 55,
            'state_id' => 3,
            'lgarea_name'=> 'Mbo',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 56,
            'state_id' => 3,
            'lgarea_name'=> 'Mkpat-Enin',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 57,
            'state_id' => 3,
            'lgarea_name'=> 'Nsit-Atai',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 58,
            'state_id' => 3,
            'lgarea_name'=> 'Nsit-Ibom',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 59,
            'state_id' => 3,
            'lgarea_name'=> 'Nsit-Ubium',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 60,
            'state_id' => 3,
            'lgarea_name'=> 'Obot Akara',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 61,
            'state_id' => 3,
            'lgarea_name'=> 'Okobo',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 62,
            'state_id' => 3,
            'lgarea_name'=> 'Onna',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 63,
            'state_id' => 3,
            'lgarea_name'=> 'Oron',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 64,
            'state_id' => 3,
            'lgarea_name'=> 'Oruk Anam',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 65,
            'state_id' => 3,
            'lgarea_name'=> 'Udung-Uko',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 66,
            'state_id' => 3,
            'lgarea_name'=> 'Ukanafun',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 67,
            'state_id' => 3,
            'lgarea_name'=> 'Uruan',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 68,
            'state_id' => 3,
            'lgarea_name'=> 'Urue-Offong/Oruko',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 69,
            'state_id' => 3,
            'lgarea_name'=> 'Uyo',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 70,
            'state_id' => 4,
            'lgarea_name'=> 'Aguata',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 71,
            'state_id' => 4,
            'lgarea_name'=> 'Anambra East',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 72,
            'state_id' => 4,
            'lgarea_name'=> 'Anambra West',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 73,
            'state_id' => 4,
            'lgarea_name'=> 'Anaocha',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 74,
            'state_id' => 4,
            'lgarea_name'=> 'Awka North',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 75,
            'state_id' => 4,
            'lgarea_name'=> 'Awka South',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 76,
            'state_id' => 4,
            'lgarea_name'=> 'Ayamelum',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 77,
            'state_id' => 4,
            'lgarea_name'=> 'Dunukofia',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 78,
            'state_id' => 4,
            'lgarea_name'=> 'Ekwusigo',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 79,
            'state_id' => 4,
            'lgarea_name'=> 'Idemili North',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 80,
            'state_id' => 4,
            'lgarea_name'=> 'Idemili South',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 81,
            'state_id' => 4,
            'lgarea_name'=> 'Ihiala',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 82,
            'state_id' => 4,
            'lgarea_name'=> 'Njikoka',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 83,
            'state_id' => 4,
            'lgarea_name'=> 'Nnewi North',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 84,
            'state_id' => 4,
            'lgarea_name'=> 'Nnewi South',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 85,
            'state_id' => 4,
            'lgarea_name'=> 'Ogbaru',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 86,
            'state_id' => 4,
            'lgarea_name'=> 'Onitsha North',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 87,
            'state_id' => 4,
            'lgarea_name'=> 'Onitsha South',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 88,
            'state_id' => 4,
            'lgarea_name'=> 'Orumba North',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 89,
            'state_id' => 4,
            'lgarea_name'=> 'Orumba South',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 90,
            'state_id' => 4,
            'lgarea_name'=> 'Oyi',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 91,
            'state_id' => 5,
            'lgarea_name'=> 'Alkaleri',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 92,
            'state_id' => 5,
            'lgarea_name'=> 'Bauchi',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 93,
            'state_id' => 5,
            'lgarea_name'=> 'Bogoro',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 94,
            'state_id' => 5,
            'lgarea_name'=> 'Damban',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 95,
            'state_id' => 5,
            'lgarea_name'=> 'Darazo',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 96,
            'state_id' => 5,
            'lgarea_name'=> 'Dass',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 97,
            'state_id' => 5,
            'lgarea_name'=> 'Gamawa',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 98,
            'state_id' => 5,
            'lgarea_name'=> 'Ganjuwa',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 99,
            'state_id' => 5,
            'lgarea_name'=> 'Giade',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 100,
            'state_id' => 5,
            'lgarea_name'=> 'Itas/Gadau',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 101,
            'state_id' => 5,
            'lgarea_name'=> 'Jamaare',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 102,
            'state_id' => 5,
            'lgarea_name'=> 'Katagum',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 103,
            'state_id' => 5,
            'lgarea_name'=> 'Kirfi',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 104,
            'state_id' => 5,
            'lgarea_name'=> 'Misau',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 105,
            'state_id' => 5,
            'lgarea_name'=> 'Ningi',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 106,
            'state_id' => 5,
            'lgarea_name'=> 'Shira',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 107,
            'state_id' => 5,
            'lgarea_name'=> 'Tafawa Balewa',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 108,
            'state_id' => 5,
            'lgarea_name'=> 'Toro',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 109,
            'state_id' => 5,
            'lgarea_name'=> 'Warji',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 110,
            'state_id' => 5,
            'lgarea_name'=> 'Zaki',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 111,
            'state_id' => 6,
            'lgarea_name'=> 'Brass',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 112,
            'state_id' => 6,
            'lgarea_name'=> 'Ekeremor',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 113,
            'state_id' => 6,
            'lgarea_name'=> 'Kolokuma/Opokuma',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 114,
            'state_id' => 6,
            'lgarea_name'=> 'Nembe',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 115,
            'state_id' => 6,
            'lgarea_name'=> 'Ogbia',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 116,
            'state_id' => 6,
            'lgarea_name'=> 'Sagbama',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 117,
            'state_id' => 6,
            'lgarea_name'=> 'Southern Ijaw',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 118,
            'state_id' => 6,
            'lgarea_name'=> 'Yenagoa',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 119,
            'state_id' => 7,
            'lgarea_name'=> 'Agatu',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 120,
            'state_id' => 7,
            'lgarea_name'=> 'Apa',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 121,
            'state_id' => 7,
            'lgarea_name'=> 'Ado',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 122,
            'state_id' => 7,
            'lgarea_name'=> 'Buruku',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 123,
            'state_id' => 7,
            'lgarea_name'=> 'Gboko',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 124,
            'state_id' => 7,
            'lgarea_name'=> 'Guma',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 125,
            'state_id' => 7,
            'lgarea_name'=> 'Gwer East',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 126,
            'state_id' => 7,
            'lgarea_name'=> 'Gwer West',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 127,
            'state_id' => 7,
            'lgarea_name'=> 'Katsina-Ala',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 128,
            'state_id' => 7,
            'lgarea_name'=> 'Konshisha',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 129,
            'state_id' => 7,
            'lgarea_name'=> 'Kwande',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 130,
            'state_id' => 7,
            'lgarea_name'=> 'Logo',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 131,
            'state_id' => 7,
            'lgarea_name'=> 'Makurdi',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 132,
            'state_id' => 7,
            'lgarea_name'=> 'Obi',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 133,
            'state_id' => 7,
            'lgarea_name'=> 'Ogbadibo',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 134,
            'state_id' => 7,
            'lgarea_name'=> 'Ohimini',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 135,
            'state_id' => 7,
            'lgarea_name'=> 'Oju',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 136,
            'state_id' => 7,
            'lgarea_name'=> 'Okpokwu',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 137,
            'state_id' => 7,
            'lgarea_name'=> 'Oturkpo',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 138,
            'state_id' => 7,
            'lgarea_name'=> 'Tarka',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 139,
            'state_id' => 7,
            'lgarea_name'=> 'Ukum',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 140,
            'state_id' => 7,
            'lgarea_name'=> 'Ushongo',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 141,
            'state_id' => 7,
            'lgarea_name'=> 'Vandeikya',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 142,
            'state_id' => 8,
            'lgarea_name'=> 'Abadam',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 143,
            'state_id' => 8,
            'lgarea_name'=> 'Askira/Uba',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 144,
            'state_id' => 8,
            'lgarea_name'=> 'Bama',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 145,
            'state_id' => 8,
            'lgarea_name'=> 'Bayo',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 146,
            'state_id' => 8,
            'lgarea_name'=> 'Biu',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 147,
            'state_id' => 8,
            'lgarea_name'=> 'Chibok',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 148,
            'state_id' => 8,
            'lgarea_name'=> 'Damboa',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 149,
            'state_id' => 8,
            'lgarea_name'=> 'Dikwa',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 150,
            'state_id' => 8,
            'lgarea_name'=> 'Gubio',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 151,
            'state_id' => 8,
            'lgarea_name'=> 'Guzamala',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 152,
            'state_id' => 8,
            'lgarea_name'=> 'Gwoza',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 153,
            'state_id' => 8,
            'lgarea_name'=> 'Hawul',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 154,
            'state_id' => 8,
            'lgarea_name'=> 'Jere',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 155,
            'state_id' => 8,
            'lgarea_name'=> 'Kaga',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 156,
            'state_id' => 8,
            'lgarea_name'=> 'Kala/Balge',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 157,
            'state_id' => 8,
            'lgarea_name'=> 'Konduga',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 158,
            'state_id' => 8,
            'lgarea_name'=> 'Kukawa',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 159,
            'state_id' => 8,
            'lgarea_name'=> 'Kwaya Kusar',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 160,
            'state_id' => 8,
            'lgarea_name'=> 'Mafa',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 161,
            'state_id' => 8,
            'lgarea_name'=> 'Magumeri',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 162,
            'state_id' => 8,
            'lgarea_name'=> 'Maiduguri',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 163,
            'state_id' => 8,
            'lgarea_name'=> 'Marte',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 164,
            'state_id' => 8,
            'lgarea_name'=> 'Mobbar',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 165,
            'state_id' => 8,
            'lgarea_name'=> 'Monguno',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 166,
            'state_id' => 8,
            'lgarea_name'=> 'Ngala',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 167,
            'state_id' => 8,
            'lgarea_name'=> 'Nganzai',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 168,
            'state_id' => 8,
            'lgarea_name'=> 'Shani',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 169,
            'state_id' => 9,
            'lgarea_name'=> 'Abi',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 170,
            'state_id' => 9,
            'lgarea_name'=> 'Akamkpa',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 171,
            'state_id' => 9,
            'lgarea_name'=> 'Akpabuyo',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 172,
            'state_id' => 9,
            'lgarea_name'=> 'Bakassi',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 173,
            'state_id' => 9,
            'lgarea_name'=> 'Bekwarra',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 174,
            'state_id' => 9,
            'lgarea_name'=> 'Biase',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 175,
            'state_id' => 9,
            'lgarea_name'=> 'Boki',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 176,
            'state_id' => 9,
            'lgarea_name'=> 'Calabar Municipal',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 177,
            'state_id' => 9,
            'lgarea_name'=> 'Calabar South',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 178,
            'state_id' => 9,
            'lgarea_name'=> 'Etung',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 179,
            'state_id' => 9,
            'lgarea_name'=> 'Ikom',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 180,
            'state_id' => 9,
            'lgarea_name'=> 'Obanliku',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 181,
            'state_id' => 9,
            'lgarea_name'=> 'Obubra',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 182,
            'state_id' => 9,
            'lgarea_name'=> 'Obudu',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 183,
            'state_id' => 9,
            'lgarea_name'=> 'Odukpani',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 184,
            'state_id' => 9,
            'lgarea_name'=> 'Ogoja',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 185,
            'state_id' => 9,
            'lgarea_name'=> 'Yakuur',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 186,
            'state_id' => 9,
            'lgarea_name'=> 'Yala',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 187,
            'state_id' => 10,
            'lgarea_name'=> 'Aniocha North',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 188,
            'state_id' => 10,
            'lgarea_name'=> 'Aniocha South',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 189,
            'state_id' => 10,
            'lgarea_name'=> 'Bomadi',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 190,
            'state_id' => 10,
            'lgarea_name'=> 'Burutu',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 191,
            'state_id' => 10,
            'lgarea_name'=> 'Ethiope East',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 192,
            'state_id' => 10,
            'lgarea_name'=> 'Ethiope West',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 193,
            'state_id' => 10,
            'lgarea_name'=> 'Ika North East',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 194,
            'state_id' => 10,
            'lgarea_name'=> 'Ika South',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 195,
            'state_id' => 10,
            'lgarea_name'=> 'Isoko North',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 196,
            'state_id' => 10,
            'lgarea_name'=> 'Isoko South',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 197,
            'state_id' => 10,
            'lgarea_name'=> 'Ndokwa East',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 198,
            'state_id' => 10,
            'lgarea_name'=> 'Ndokwa West',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 199,
            'state_id' => 10,
            'lgarea_name'=> 'Okpe',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 200,
            'state_id' => 10,
            'lgarea_name'=> 'Oshimili North',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 201,
            'state_id' => 10,
            'lgarea_name'=> 'Oshimili South',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 202,
            'state_id' => 10,
            'lgarea_name'=> 'Patani',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 203,
            'state_id' => 10,
            'lgarea_name'=> 'Delta',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 204,
            'state_id' => 10,
            'lgarea_name'=> 'Udu',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 205,
            'state_id' => 10,
            'lgarea_name'=> 'Ughelli North',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 206,
            'state_id' => 10,
            'lgarea_name'=> 'Ughelli South',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 207,
            'state_id' => 10,
            'lgarea_name'=> 'Ukwuani',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 208,
            'state_id' => 10,
            'lgarea_name'=> 'Uvwie',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 209,
            'state_id' => 10,
            'lgarea_name'=> 'Warri North',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 210,
            'state_id' => 10,
            'lgarea_name'=> 'Warri South',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 211,
            'state_id' => 10,
            'lgarea_name'=> 'Warri South West',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 212,
            'state_id' => 11,
            'lgarea_name'=> 'Abakaliki',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 213,
            'state_id' => 11,
            'lgarea_name'=> 'Afikpo North',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 214,
            'state_id' => 11,
            'lgarea_name'=> 'Afikpo South',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 215,
            'state_id' => 11,
            'lgarea_name'=> 'Ebonyi',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 216,
            'state_id' => 11,
            'lgarea_name'=> 'Ezza North',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 217,
            'state_id' => 11,
            'lgarea_name'=> 'Ezza South',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 218,
            'state_id' => 11,
            'lgarea_name'=> 'Ikwo',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 219,
            'state_id' => 11,
            'lgarea_name'=> 'Ishielu',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 220,
            'state_id' => 11,
            'lgarea_name'=> 'Ivo',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 221,
            'state_id' => 11,
            'lgarea_name'=> 'Izzi',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 222,
            'state_id' => 11,
            'lgarea_name'=> 'Ohaozara',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 223,
            'state_id' => 11,
            'lgarea_name'=> 'Ohaukwu',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 224,
            'state_id' => 11,
            'lgarea_name'=> 'Onicha',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 225,
            'state_id' => 12,
            'lgarea_name'=> 'Akoko-Edo',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 226,
            'state_id' => 12,
            'lgarea_name'=> 'Egor',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 227,
            'state_id' => 12,
            'lgarea_name'=> 'Esan Central',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 228,
            'state_id' => 12,
            'lgarea_name'=> 'Esan North-East',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 229,
            'state_id' => 12,
            'lgarea_name'=> 'Esan South-East',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 230,
            'state_id' => 12,
            'lgarea_name'=> 'Esan West',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 231,
            'state_id' => 12,
            'lgarea_name'=> 'Etsako Central',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 232,
            'state_id' => 12,
            'lgarea_name'=> 'Etsako East',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 233,
            'state_id' => 12,
            'lgarea_name'=> 'Etsako West',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 234,
            'state_id' => 12,
            'lgarea_name'=> 'Igueben',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 235,
            'state_id' => 12,
            'lgarea_name'=> 'Ikpoba Okha',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 236,
            'state_id' => 12,
            'lgarea_name'=> 'Orhionmwon',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 237,
            'state_id' => 12,
            'lgarea_name'=> 'Oredo',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 238,
            'state_id' => 12,
            'lgarea_name'=> 'Ovia North-East',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 239,
            'state_id' => 12,
            'lgarea_name'=> 'Ovia South-West',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 240,
            'state_id' => 12,
            'lgarea_name'=> 'Owan East',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 241,
            'state_id' => 12,
            'lgarea_name'=> 'Owan West',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 242,
            'state_id' => 12,
            'lgarea_name'=> 'Uhunmwonde',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 243,
            'state_id' => 13,
            'lgarea_name'=> 'Ado Ekiti',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 244,
            'state_id' => 13,
            'lgarea_name'=> 'Efon',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 245,
            'state_id' => 13,
            'lgarea_name'=> 'Ekiti East',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 246,
            'state_id' => 13,
            'lgarea_name'=> 'Ekiti South-West',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 247,
            'state_id' => 13,
            'lgarea_name'=> 'Ekiti West',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 248,
            'state_id' => 13,
            'lgarea_name'=> 'Emure',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 249,
            'state_id' => 13,
            'lgarea_name'=> 'Gbonyin',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 250,
            'state_id' => 13,
            'lgarea_name'=> 'Ido Osi',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 251,
            'state_id' => 13,
            'lgarea_name'=> 'Ijero',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 252,
            'state_id' => 13,
            'lgarea_name'=> 'Ikere',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 253,
            'state_id' => 13,
            'lgarea_name'=> 'Ikole',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 254,
            'state_id' => 13,
            'lgarea_name'=> 'Ilejemeje',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 255,
            'state_id' => 13,
            'lgarea_name'=> 'Irepodun/Ifelodun',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 256,
            'state_id' => 13,
            'lgarea_name'=> 'Ise/Orun',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 257,
            'state_id' => 13,
            'lgarea_name'=> 'Moba',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 258,
            'state_id' => 13,
            'lgarea_name'=> 'Oye',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 259,
            'state_id' => 14,
            'lgarea_name'=> 'Aninri',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 260,
            'state_id' => 14,
            'lgarea_name'=> 'Awgu',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 261,
            'state_id' => 14,
            'lgarea_name'=> 'Enugu East',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 262,
            'state_id' => 14,
            'lgarea_name'=> 'Enugu North',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 263,
            'state_id' => 14,
            'lgarea_name'=> 'Enugu South',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 264,
            'state_id' => 14,
            'lgarea_name'=> 'Ezeagu',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 265,
            'state_id' => 14,
            'lgarea_name'=> 'Igbo Etiti',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 266,
            'state_id' => 14,
            'lgarea_name'=> 'Igbo Eze North',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 267,
            'state_id' => 14,
            'lgarea_name'=> 'Igbo Eze South',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 268,
            'state_id' => 14,
            'lgarea_name'=> 'Isi Uzo',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 269,
            'state_id' => 14,
            'lgarea_name'=> 'Nkanu East',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 270,
            'state_id' => 14,
            'lgarea_name'=> 'Nkanu West',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 271,
            'state_id' => 14,
            'lgarea_name'=> 'Nsukka',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 272,
            'state_id' => 14,
            'lgarea_name'=> 'Oji River',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 273,
            'state_id' => 14,
            'lgarea_name'=> 'Udenu',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 274,
            'state_id' => 14,
            'lgarea_name'=> 'Udi',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 275,
            'state_id' => 14,
            'lgarea_name'=> 'Uzo Uwani',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 276,
            'state_id' => 15,
            'lgarea_name'=> 'Abaji',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 277,
            'state_id' => 15,
            'lgarea_name'=> 'Bwari',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 278,
            'state_id' => 15,
            'lgarea_name'=> 'Gwagwalada',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 279,
            'state_id' => 15,
            'lgarea_name'=> 'Kuje',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 280,
            'state_id' => 15,
            'lgarea_name'=> 'Kwali',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 281,
            'state_id' => 15,
            'lgarea_name'=> 'Municipal Area Council',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 282,
            'state_id' => 16,
            'lgarea_name'=> 'Akko',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 283,
            'state_id' => 16,
            'lgarea_name'=> 'Balanga',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 284,
            'state_id' => 16,
            'lgarea_name'=> 'Billiri',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 285,
            'state_id' => 16,
            'lgarea_name'=> 'Dukku',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 286,
            'state_id' => 16,
            'lgarea_name'=> 'Funakaye',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 287,
            'state_id' => 16,
            'lgarea_name'=> 'Gombe',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 288,
            'state_id' => 16,
            'lgarea_name'=> 'Kaltungo',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 289,
            'state_id' => 16,
            'lgarea_name'=> 'Kwami',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 290,
            'state_id' => 16,
            'lgarea_name'=> 'Nafada',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 291,
            'state_id' => 16,
            'lgarea_name'=> 'Shongom',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 292,
            'state_id' => 16,
            'lgarea_name'=> 'Yamaltu/Deba',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 293,
            'state_id' => 17,
            'lgarea_name'=> 'Aboh Mbaise',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 294,
            'state_id' => 17,
            'lgarea_name'=> 'Ahiazu Mbaise',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 295,
            'state_id' => 17,
            'lgarea_name'=> 'Ehime Mbano',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 296,
            'state_id' => 17,
            'lgarea_name'=> 'Ezinihitte',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 297,
            'state_id' => 17,
            'lgarea_name'=> 'Ideato North',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 298,
            'state_id' => 17,
            'lgarea_name'=> 'Ideato South',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 299,
            'state_id' => 17,
            'lgarea_name'=> 'Ihitte/Uboma',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 300,
            'state_id' => 17,
            'lgarea_name'=> 'Ikeduru',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 301,
            'state_id' => 17,
            'lgarea_name'=> 'Isiala Mbano',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 302,
            'state_id' => 17,
            'lgarea_name'=> 'Isu',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 303,
            'state_id' => 17,
            'lgarea_name'=> 'Mbaitoli',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 304,
            'state_id' => 17,
            'lgarea_name'=> 'Ngor Okpala',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 305,
            'state_id' => 17,
            'lgarea_name'=> 'Njaba',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 306,
            'state_id' => 17,
            'lgarea_name'=> 'Nkwerre',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 307,
            'state_id' => 17,
            'lgarea_name'=> 'Nwangele',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 308,
            'state_id' => 17,
            'lgarea_name'=> 'Obowo',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 309,
            'state_id' => 17,
            'lgarea_name'=> 'Oguta',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 310,
            'state_id' => 17,
            'lgarea_name'=> 'Ohaji/Egbema',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 311,
            'state_id' => 17,
            'lgarea_name'=> 'Okigwe',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 312,
            'state_id' => 17,
            'lgarea_name'=> 'Orlu',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 313,
            'state_id' => 17,
            'lgarea_name'=> 'Orsu',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 314,
            'state_id' => 17,
            'lgarea_name'=> 'Oru East',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 315,
            'state_id' => 17,
            'lgarea_name'=> 'Oru West',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 316,
            'state_id' => 17,
            'lgarea_name'=> 'Owerri Municipal',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 317,
            'state_id' => 17,
            'lgarea_name'=> 'Owerri North',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 318,
            'state_id' => 17,
            'lgarea_name'=> 'Owerri West',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 319,
            'state_id' => 17,
            'lgarea_name'=> 'Unuimo',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 320,
            'state_id' => 18,
            'lgarea_name'=> 'Auyo',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 321,
            'state_id' => 18,
            'lgarea_name'=> 'Babura',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 322,
            'state_id' => 18,
            'lgarea_name'=> 'Biriniwa',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 323,
            'state_id' => 18,
            'lgarea_name'=> 'Birnin Kudu',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 324,
            'state_id' => 18,
            'lgarea_name'=> 'Buji',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 325,
            'state_id' => 18,
            'lgarea_name'=> 'Dutse',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 326,
            'state_id' => 18,
            'lgarea_name'=> 'Gagarawa',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 327,
            'state_id' => 18,
            'lgarea_name'=> 'Garki',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 328,
            'state_id' => 18,
            'lgarea_name'=> 'Gumel',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 329,
            'state_id' => 18,
            'lgarea_name'=> 'Guri',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 330,
            'state_id' => 18,
            'lgarea_name'=> 'Gwaram',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 331,
            'state_id' => 18,
            'lgarea_name'=> 'Gwiwa',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 332,
            'state_id' => 18,
            'lgarea_name'=> 'Hadejia',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 333,
            'state_id' => 18,
            'lgarea_name'=> 'Jahun',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 334,
            'state_id' => 18,
            'lgarea_name'=> 'Kafin Hausa',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 335,
            'state_id' => 18,
            'lgarea_name'=> 'Kazaure',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 336,
            'state_id' => 18,
            'lgarea_name'=> 'Kiri Kasama',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 337,
            'state_id' => 18,
            'lgarea_name'=> 'Kiyawa',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 338,
            'state_id' => 18,
            'lgarea_name'=> 'Kaugama',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 339,
            'state_id' => 18,
            'lgarea_name'=> 'Maigatari',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 340,
            'state_id' => 18,
            'lgarea_name'=> 'Malam Madori',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 341,
            'state_id' => 18,
            'lgarea_name'=> 'Miga',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 342,
            'state_id' => 18,
            'lgarea_name'=> 'Ringim',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 343,
            'state_id' => 18,
            'lgarea_name'=> 'Roni',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 344,
            'state_id' => 18,
            'lgarea_name'=> 'Sule Tankarkar',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 345,
            'state_id' => 18,
            'lgarea_name'=> 'Taura',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 346,
            'state_id' => 18,
            'lgarea_name'=> 'Yankwashi',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 347,
            'state_id' => 19,
            'lgarea_name'=> 'Birnin Gwari',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 348,
            'state_id' => 19,
            'lgarea_name'=> 'Chikun',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 349,
            'state_id' => 19,
            'lgarea_name'=> 'Giwa',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 350,
            'state_id' => 19,
            'lgarea_name'=> 'Igabi',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 351,
            'state_id' => 19,
            'lgarea_name'=> 'Ikara',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 352,
            'state_id' => 19,
            'lgarea_name'=> 'Jaba',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 353,
            'state_id' => 19,
            'lgarea_name'=> 'Jemaa',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 354,
            'state_id' => 19,
            'lgarea_name'=> 'Kachia',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 355,
            'state_id' => 19,
            'lgarea_name'=> 'Kaduna North',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 356,
            'state_id' => 19,
            'lgarea_name'=> 'Kaduna South',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 357,
            'state_id' => 19,
            'lgarea_name'=> 'Kagarko',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 358,
            'state_id' => 19,
            'lgarea_name'=> 'Kajuru',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 359,
            'state_id' => 19,
            'lgarea_name'=> 'Kaura',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 360,
            'state_id' => 19,
            'lgarea_name'=> 'Kauru',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 361,
            'state_id' => 19,
            'lgarea_name'=> 'Kubau',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 362,
            'state_id' => 19,
            'lgarea_name'=> 'Kudan',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 363,
            'state_id' => 19,
            'lgarea_name'=> 'Lere',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 364,
            'state_id' => 19,
            'lgarea_name'=> 'Makarfi',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 365,
            'state_id' => 19,
            'lgarea_name'=> 'Sabon Gari',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 366,
            'state_id' => 19,
            'lgarea_name'=> 'Sanga',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 367,
            'state_id' => 19,
            'lgarea_name'=> 'Soba',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 368,
            'state_id' => 19,
            'lgarea_name'=> 'Zangon Kataf',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 369,
            'state_id' => 19,
            'lgarea_name'=> 'Zaria',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 370,
            'state_id' => 20,
            'lgarea_name'=> 'Ajingi',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 371,
            'state_id' => 20,
            'lgarea_name'=> 'Albasu',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 372,
            'state_id' => 20,
            'lgarea_name'=> 'Bagwai',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 373,
            'state_id' => 20,
            'lgarea_name'=> 'Bebeji',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 374,
            'state_id' => 20,
            'lgarea_name'=> 'Bichi',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 375,
            'state_id' => 20,
            'lgarea_name'=> 'Bunkure',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 376,
            'state_id' => 20,
            'lgarea_name'=> 'Dala',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 377,
            'state_id' => 20,
            'lgarea_name'=> 'Dambatta',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 378,
            'state_id' => 20,
            'lgarea_name'=> 'Dawakin Kudu',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 379,
            'state_id' => 20,
            'lgarea_name'=> 'Dawakin Tofa',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 380,
            'state_id' => 20,
            'lgarea_name'=> 'Doguwa',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 381,
            'state_id' => 20,
            'lgarea_name'=> 'Fagge',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 382,
            'state_id' => 20,
            'lgarea_name'=> 'Gabasawa',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 383,
            'state_id' => 20,
            'lgarea_name'=> 'Garko',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 384,
            'state_id' => 20,
            'lgarea_name'=> 'Garun Mallam',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 385,
            'state_id' => 20,
            'lgarea_name'=> 'Gaya',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 386,
            'state_id' => 20,
            'lgarea_name'=> 'Gezawa',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 387,
            'state_id' => 20,
            'lgarea_name'=> 'Gwale',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 388,
            'state_id' => 20,
            'lgarea_name'=> 'Gwarzo',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 389,
            'state_id' => 20,
            'lgarea_name'=> 'Kabo',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 390,
            'state_id' => 20,
            'lgarea_name'=> 'Kano Municipal',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 391,
            'state_id' => 20,
            'lgarea_name'=> 'Karaye',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 392,
            'state_id' => 20,
            'lgarea_name'=> 'Kibiya',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 393,
            'state_id' => 20,
            'lgarea_name'=> 'Kiru',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 394,
            'state_id' => 20,
            'lgarea_name'=> 'Kumbotso',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 395,
            'state_id' => 20,
            'lgarea_name'=> 'Kunchi',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 396,
            'state_id' => 20,
            'lgarea_name'=> 'Kura',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 397,
            'state_id' => 20,
            'lgarea_name'=> 'Madobi',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 398,
            'state_id' => 20,
            'lgarea_name'=> 'Makoda',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 399,
            'state_id' => 20,
            'lgarea_name'=> 'Minjibir',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 400,
            'state_id' => 20,
            'lgarea_name'=> 'Nasarawa',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 401,
            'state_id' => 20,
            'lgarea_name'=> 'Rano',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 402,
            'state_id' => 20,
            'lgarea_name'=> 'Rimin Gado',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 403,
            'state_id' => 20,
            'lgarea_name'=> 'Rogo',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 404,
            'state_id' => 20,
            'lgarea_name'=> 'Shanono',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 405,
            'state_id' => 20,
            'lgarea_name'=> 'Sumaila',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 406,
            'state_id' => 20,
            'lgarea_name'=> 'Takai',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 407,
            'state_id' => 20,
            'lgarea_name'=> 'Tarauni',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 408,
            'state_id' => 20,
            'lgarea_name'=> 'Tofa',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 409,
            'state_id' => 20,
            'lgarea_name'=> 'Tsanyawa',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 410,
            'state_id' => 20,
            'lgarea_name'=> 'Tudun Wada',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 411,
            'state_id' => 20,
            'lgarea_name'=> 'Ungogo',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 412,
            'state_id' => 20,
            'lgarea_name'=> 'Warawa',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 413,
            'state_id' => 20,
            'lgarea_name'=> 'Wudil',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 414,
            'state_id' => 21,
            'lgarea_name'=> 'Bakori',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 415,
            'state_id' => 21,
            'lgarea_name'=> 'Batagarawa',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 416,
            'state_id' => 21,
            'lgarea_name'=> 'Batsari',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 417,
            'state_id' => 21,
            'lgarea_name'=> 'Baure',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 418,
            'state_id' => 21,
            'lgarea_name'=> 'Bindawa',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 419,
            'state_id' => 21,
            'lgarea_name'=> 'Charanchi',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 420,
            'state_id' => 21,
            'lgarea_name'=> 'Dandume',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 421,
            'state_id' => 21,
            'lgarea_name'=> 'Danja',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 422,
            'state_id' => 21,
            'lgarea_name'=> 'Dan Musa',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 423,
            'state_id' => 21,
            'lgarea_name'=> 'Daura',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 424,
            'state_id' => 21,
            'lgarea_name'=> 'Dutsi',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 425,
            'state_id' => 21,
            'lgarea_name'=> 'Dutsin Ma',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 426,
            'state_id' => 21,
            'lgarea_name'=> 'Faskari',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 427,
            'state_id' => 21,
            'lgarea_name'=> 'Funtua',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 428,
            'state_id' => 21,
            'lgarea_name'=> 'Ingawa',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 429,
            'state_id' => 21,
            'lgarea_name'=> 'Jibia',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 430,
            'state_id' => 21,
            'lgarea_name'=> 'Kafur',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 431,
            'state_id' => 21,
            'lgarea_name'=> 'Kaita',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 432,
            'state_id' => 21,
            'lgarea_name'=> 'Kankara',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 433,
            'state_id' => 21,
            'lgarea_name'=> 'Kankia',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 434,
            'state_id' => 21,
            'lgarea_name'=> 'Katsina',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 435,
            'state_id' => 21,
            'lgarea_name'=> 'Kurfi',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 436,
            'state_id' => 21,
            'lgarea_name'=> 'Kusada',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 437,
            'state_id' => 21,
            'lgarea_name'=> 'MaiAdua',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 438,
            'state_id' => 21,
            'lgarea_name'=> 'Malumfashi',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 439,
            'state_id' => 21,
            'lgarea_name'=> 'Mani',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 440,
            'state_id' => 21,
            'lgarea_name'=> 'Mashi',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 441,
            'state_id' => 21,
            'lgarea_name'=> 'Matazu',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 442,
            'state_id' => 21,
            'lgarea_name'=> 'Musawa',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 443,
            'state_id' => 21,
            'lgarea_name'=> 'Rimi',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 444,
            'state_id' => 21,
            'lgarea_name'=> 'Sabuwa',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 445,
            'state_id' => 21,
            'lgarea_name'=> 'Safana',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 446,
            'state_id' => 21,
            'lgarea_name'=> 'Sandamu',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 447,
            'state_id' => 21,
            'lgarea_name'=> 'Zango',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 448,
            'state_id' => 22,
            'lgarea_name'=> 'Aleiro',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 449,
            'state_id' => 22,
            'lgarea_name'=> 'Arewa Dandi',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 450,
            'state_id' => 22,
            'lgarea_name'=> 'Argungu',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 451,
            'state_id' => 22,
            'lgarea_name'=> 'Augie',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 452,
            'state_id' => 22,
            'lgarea_name'=> 'Bagudo',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 453,
            'state_id' => 22,
            'lgarea_name'=> 'Birnin Kebbi',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 454,
            'state_id' => 22,
            'lgarea_name'=> 'Bunza',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 455,
            'state_id' => 22,
            'lgarea_name'=> 'Dandi',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 456,
            'state_id' => 22,
            'lgarea_name'=> 'Fakai',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 457,
            'state_id' => 22,
            'lgarea_name'=> 'Gwandu',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 458,
            'state_id' => 22,
            'lgarea_name'=> 'Jega',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 459,
            'state_id' => 22,
            'lgarea_name'=> 'Kalgo',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 460,
            'state_id' => 22,
            'lgarea_name'=> 'Koko/Besse',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 461,
            'state_id' => 22,
            'lgarea_name'=> 'Maiyama',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 462,
            'state_id' => 22,
            'lgarea_name'=> 'Ngaski',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 463,
            'state_id' => 22,
            'lgarea_name'=> 'Sakaba',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 464,
            'state_id' => 22,
            'lgarea_name'=> 'Shanga',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 465,
            'state_id' => 22,
            'lgarea_name'=> 'Suru',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 466,
            'state_id' => 22,
            'lgarea_name'=> 'Wasagu/Danko',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 467,
            'state_id' => 22,
            'lgarea_name'=> 'Yauri',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 468,
            'state_id' => 22,
            'lgarea_name'=> 'Zuru',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 469,
            'state_id' => 23,
            'lgarea_name'=> 'Adavi',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 470,
            'state_id' => 23,
            'lgarea_name'=> 'Ajaokuta',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 471,
            'state_id' => 23,
            'lgarea_name'=> 'Ankpa',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 472,
            'state_id' => 23,
            'lgarea_name'=> 'Bassa',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 473,
            'state_id' => 23,
            'lgarea_name'=> 'Dekina',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 474,
            'state_id' => 23,
            'lgarea_name'=> 'Ibaji',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 475,
            'state_id' => 23,
            'lgarea_name'=> 'Idah',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 476,
            'state_id' => 23,
            'lgarea_name'=> 'Igalamela Odolu',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 477,
            'state_id' => 23,
            'lgarea_name'=> 'Ijumu',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 478,
            'state_id' => 23,
            'lgarea_name'=> 'Kabba/Bunu',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 479,
            'state_id' => 23,
            'lgarea_name'=> 'Kogi',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 480,
            'state_id' => 23,
            'lgarea_name'=> 'Lokoja',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 481,
            'state_id' => 23,
            'lgarea_name'=> 'Mopa Muro',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 482,
            'state_id' => 23,
            'lgarea_name'=> 'Ofu',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 483,
            'state_id' => 23,
            'lgarea_name'=> 'Ogori/Magongo',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 484,
            'state_id' => 23,
            'lgarea_name'=> 'Okehi',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 485,
            'state_id' => 23,
            'lgarea_name'=> 'Okene',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 486,
            'state_id' => 23,
            'lgarea_name'=> 'Olamaboro',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 487,
            'state_id' => 23,
            'lgarea_name'=> 'Omala',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 488,
            'state_id' => 23,
            'lgarea_name'=> 'Yagba East',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 489,
            'state_id' => 23,
            'lgarea_name'=> 'Yagba West',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 490,
            'state_id' => 24,
            'lgarea_name'=> 'Asa',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 491,
            'state_id' => 24,
            'lgarea_name'=> 'Baruten',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 492,
            'state_id' => 24,
            'lgarea_name'=> 'Edu',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 493,
            'state_id' => 24,
            'lgarea_name'=> 'Kwara State',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 494,
            'state_id' => 24,
            'lgarea_name'=> 'Ifelodun',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 495,
            'state_id' => 24,
            'lgarea_name'=> 'Ilorin East',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 496,
            'state_id' => 24,
            'lgarea_name'=> 'Ilorin South',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 497,
            'state_id' => 24,
            'lgarea_name'=> 'Ilorin West',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 498,
            'state_id' => 24,
            'lgarea_name'=> 'Irepodun',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 499,
            'state_id' => 24,
            'lgarea_name'=> 'Isin',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 500,
            'state_id' => 24,
            'lgarea_name'=> 'Kaiama',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 501,
            'state_id' => 24,
            'lgarea_name'=> 'Moro',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 502,
            'state_id' => 24,
            'lgarea_name'=> 'Offa',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 503,
            'state_id' => 24,
            'lgarea_name'=> 'Oke Ero',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 504,
            'state_id' => 24,
            'lgarea_name'=> 'Oyun',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 505,
            'state_id' => 24,
            'lgarea_name'=> 'Pategi',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 506,
            'state_id' => 25,
            'lgarea_name'=> 'Agege',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 507,
            'state_id' => 25,
            'lgarea_name'=> 'Ajeromi-Ifelodun',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 508,
            'state_id' => 25,
            'lgarea_name'=> 'Alimosho',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 509,
            'state_id' => 25,
            'lgarea_name'=> 'Amuwo-Odofin',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 510,
            'state_id' => 25,
            'lgarea_name'=> 'Apapa',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 511,
            'state_id' => 25,
            'lgarea_name'=> 'Badagry',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 512,
            'state_id' => 25,
            'lgarea_name'=> 'Epe',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 513,
            'state_id' => 25,
            'lgarea_name'=> 'Eti Osa',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 514,
            'state_id' => 25,
            'lgarea_name'=> 'Ibeju-Lekki',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 515,
            'state_id' => 25,
            'lgarea_name'=> 'Ifako-Ijaiye',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 516,
            'state_id' => 25,
            'lgarea_name'=> 'Ikeja',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 517,
            'state_id' => 25,
            'lgarea_name'=> 'Ikorodu',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 518,
            'state_id' => 25,
            'lgarea_name'=> 'Kosofe',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 519,
            'state_id' => 25,
            'lgarea_name'=> 'Lagos Island',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 520,
            'state_id' => 25,
            'lgarea_name'=> 'Lagos Mainland',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 521,
            'state_id' => 25,
            'lgarea_name'=> 'Mushin',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 522,
            'state_id' => 25,
            'lgarea_name'=> 'Ojo',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 523,
            'state_id' => 25,
            'lgarea_name'=> 'Oshodi-Isolo',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 524,
            'state_id' => 25,
            'lgarea_name'=> 'Shomolu',
            'shipping_fee' =>  rand(100,10000)
            ]);
            DB::table('lgareas')->insert([
                'id' => 525,
                'state_id' => 25,
                'lgarea_name'=> 'Lagos State',
                'shipping_fee' =>  rand(100,10000)
                ]);
        DB::table('lgareas')->insert([
            'id' => 526,
            'state_id' => 26,
            'lgarea_name'=> 'Akwanga',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 527,
            'state_id' => 26,
            'lgarea_name'=> 'Awe',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 528,
            'state_id' => 26,
            'lgarea_name'=> 'Doma',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 529,
            'state_id' => 26,
            'lgarea_name'=> 'Karu',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 530,
            'state_id' => 26,
            'lgarea_name'=> 'Keana',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 531,
            'state_id' => 26,
            'lgarea_name'=> 'Keffi',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 532,
            'state_id' => 26,
            'lgarea_name'=> 'Kokona',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 533,
            'state_id' => 26,
            'lgarea_name'=> 'Lafia',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 534,
            'state_id' => 26,
            'lgarea_name'=> 'Nasarawa',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 535,
            'state_id' => 26,
            'lgarea_name'=> 'Nasarawa Egon',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 536,
            'state_id' => 26,
            'lgarea_name'=> 'Obi',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 537,
            'state_id' => 26,
            'lgarea_name'=> 'Toto',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 538,
            'state_id' => 26,
            'lgarea_name'=> 'Wamba',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 539,
            'state_id' => 27,
            'lgarea_name'=> 'Agaie',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 540,
            'state_id' => 27,
            'lgarea_name'=> 'Agwara',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 541,
            'state_id' => 27,
            'lgarea_name'=> 'Bida',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 542,
            'state_id' => 27,
            'lgarea_name'=> 'Borgu',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 543,
            'state_id' => 27,
            'lgarea_name'=> 'Bosso',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 544,
            'state_id' => 27,
            'lgarea_name'=> 'Chanchaga',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 545,
            'state_id' => 27,
            'lgarea_name'=> 'Edati',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 546,
            'state_id' => 27,
            'lgarea_name'=> 'Gbako',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 547,
            'state_id' => 27,
            'lgarea_name'=> 'Gurara',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 548,
            'state_id' => 27,
            'lgarea_name'=> 'Katcha',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 549,
            'state_id' => 27,
            'lgarea_name'=> 'Kontagora',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 550,
            'state_id' => 27,
            'lgarea_name'=> 'Lapai',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 551,
            'state_id' => 27,
            'lgarea_name'=> 'Lavun',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 552,
            'state_id' => 27,
            'lgarea_name'=> 'Magama',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 553,
            'state_id' => 27,
            'lgarea_name'=> 'Mariga',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 554,
            'state_id' => 27,
            'lgarea_name'=> 'Mashegu',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 555,
            'state_id' => 27,
            'lgarea_name'=> 'Mokwa',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 556,
            'state_id' => 27,
            'lgarea_name'=> 'Moya',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 557,
            'state_id' => 27,
            'lgarea_name'=> 'Paikoro',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 558,
            'state_id' => 27,
            'lgarea_name'=> 'Rafi',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 559,
            'state_id' => 27,
            'lgarea_name'=> 'Rijau',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 560,
            'state_id' => 27,
            'lgarea_name'=> 'Shiroro',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 561,
            'state_id' => 27,
            'lgarea_name'=> 'Suleja',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 562,
            'state_id' => 27,
            'lgarea_name'=> 'Tafa',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 563,
            'state_id' => 27,
            'lgarea_name'=> 'Wushishi',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 564,
            'state_id' => 28,
            'lgarea_name'=> 'Abeokuta North',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 565,
            'state_id' => 28,
            'lgarea_name'=> 'Abeokuta South',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 566,
            'state_id' => 28,
            'lgarea_name'=> 'Ado-Odo/Ota',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 567,
            'state_id' => 28,
            'lgarea_name'=> 'Egbado North',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 568,
            'state_id' => 28,
            'lgarea_name'=> 'Egbado South',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 569,
            'state_id' => 28,
            'lgarea_name'=> 'Ewekoro',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 570,
            'state_id' => 28,
            'lgarea_name'=> 'Ifo',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 571,
            'state_id' => 28,
            'lgarea_name'=> 'Ijebu East',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 572,
            'state_id' => 28,
            'lgarea_name'=> 'Ijebu North',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 573,
            'state_id' => 28,
            'lgarea_name'=> 'Ijebu North East',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 574,
            'state_id' => 28,
            'lgarea_name'=> 'Ijebu Ode',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 575,
            'state_id' => 28,
            'lgarea_name'=> 'Ikenne',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 576,
            'state_id' => 28,
            'lgarea_name'=> 'Imeko Afon',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 577,
            'state_id' => 28,
            'lgarea_name'=> 'Ipokia',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 578,
            'state_id' => 28,
            'lgarea_name'=> 'Obafemi Owode',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 579,
            'state_id' => 28,
            'lgarea_name'=> 'Odeda',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 580,
            'state_id' => 28,
            'lgarea_name'=> 'Odogbolu',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 581,
            'state_id' => 28,
            'lgarea_name'=> 'Ogun Waterside',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 582,
            'state_id' => 28,
            'lgarea_name'=> 'Remo North',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 583,
            'state_id' => 28,
            'lgarea_name'=> 'Shagamu',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 584,
            'state_id' => 29,
            'lgarea_name'=> 'Akoko North-East',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 585,
            'state_id' => 29,
            'lgarea_name'=> 'Akoko North-West',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 586,
            'state_id' => 29,
            'lgarea_name'=> 'Akoko South-West',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 587,
            'state_id' => 29,
            'lgarea_name'=> 'Akoko South-East',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 588,
            'state_id' => 29,
            'lgarea_name'=> 'Akure North',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 589,
            'state_id' => 29,
            'lgarea_name'=> 'Akure South',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 590,
            'state_id' => 29,
            'lgarea_name'=> 'Ese Odo',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 591,
            'state_id' => 29,
            'lgarea_name'=> 'Idanre',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 592,
            'state_id' => 29,
            'lgarea_name'=> 'Ifedore',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 593,
            'state_id' => 29,
            'lgarea_name'=> 'Ilaje',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 594,
            'state_id' => 29,
            'lgarea_name'=> 'Ile Oluji/Okeigbo',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 595,
            'state_id' => 29,
            'lgarea_name'=> 'Irele',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 596,
            'state_id' => 29,
            'lgarea_name'=> 'Odigbo',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 597,
            'state_id' => 29,
            'lgarea_name'=> 'Okitipupa',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 598,
            'state_id' => 29,
            'lgarea_name'=> 'Ondo East',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 599,
            'state_id' => 29,
            'lgarea_name'=> 'Ondo West',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 600,
            'state_id' => 29,
            'lgarea_name'=> 'Ose',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 601,
            'state_id' => 29,
            'lgarea_name'=> 'Owo',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 602,
            'state_id' => 30,
            'lgarea_name'=> 'Atakunmosa East',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 603,
            'state_id' => 30,
            'lgarea_name'=> 'Atakunmosa West',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 604,
            'state_id' => 30,
            'lgarea_name'=> 'Aiyedaade',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 605,
            'state_id' => 30,
            'lgarea_name'=> 'Aiyedire',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 606,
            'state_id' => 30,
            'lgarea_name'=> 'Boluwaduro',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 607,
            'state_id' => 30,
            'lgarea_name'=> 'Boripe',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 608,
            'state_id' => 30,
            'lgarea_name'=> 'Ede North',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 609,
            'state_id' => 30,
            'lgarea_name'=> 'Ede South',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 610,
            'state_id' => 30,
            'lgarea_name'=> 'Ife Central',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 611,
            'state_id' => 30,
            'lgarea_name'=> 'Ife East',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 612,
            'state_id' => 30,
            'lgarea_name'=> 'Ife North',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 613,
            'state_id' => 30,
            'lgarea_name'=> 'Ife South',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 614,
            'state_id' => 30,
            'lgarea_name'=> 'Egbedore',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 615,
            'state_id' => 30,
            'lgarea_name'=> 'Ejigbo',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 616,
            'state_id' => 30,
            'lgarea_name'=> 'Ifedayo',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 617,
            'state_id' => 30,
            'lgarea_name'=> 'Ifelodun',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 618,
            'state_id' => 30,
            'lgarea_name'=> 'Ila',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 619,
            'state_id' => 30,
            'lgarea_name'=> 'Ilesa East',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 620,
            'state_id' => 30,
            'lgarea_name'=> 'Ilesa West',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 621,
            'state_id' => 30,
            'lgarea_name'=> 'Irepodun',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 622,
            'state_id' => 30,
            'lgarea_name'=> 'Irewole',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 623,
            'state_id' => 30,
            'lgarea_name'=> 'Isokan',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 624,
            'state_id' => 30,
            'lgarea_name'=> 'Iwo',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 625,
            'state_id' => 30,
            'lgarea_name'=> 'Obokun',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 626,
            'state_id' => 30,
            'lgarea_name'=> 'Odo Otin',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 627,
            'state_id' => 30,
            'lgarea_name'=> 'Ola Oluwa',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 628,
            'state_id' => 30,
            'lgarea_name'=> 'Olorunda',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 629,
            'state_id' => 30,
            'lgarea_name'=> 'Oriade',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 630,
            'state_id' => 30,
            'lgarea_name'=> 'Orolu',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 631,
            'state_id' => 30,
            'lgarea_name'=> 'Osogbo',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 632,
            'state_id' => 31,
            'lgarea_name'=> 'Afijio',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 633,
            'state_id' => 31,
            'lgarea_name'=> 'Akinyele',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 634,
            'state_id' => 31,
            'lgarea_name'=> 'Atiba',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 635,
            'state_id' => 31,
            'lgarea_name'=> 'Atisbo',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 636,
            'state_id' => 31,
            'lgarea_name'=> 'Egbeda',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 637,
            'state_id' => 31,
            'lgarea_name'=> 'Ibadan North',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 638,
            'state_id' => 31,
            'lgarea_name'=> 'Ibadan North-East',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 639,
            'state_id' => 31,
            'lgarea_name'=> 'Ibadan North-West',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 640,
            'state_id' => 31,
            'lgarea_name'=> 'Ibadan South-East',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 641,
            'state_id' => 31,
            'lgarea_name'=> 'Ibadan South-West',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 642,
            'state_id' => 31,
            'lgarea_name'=> 'Ibarapa Central',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 643,
            'state_id' => 31,
            'lgarea_name'=> 'Ibarapa East',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 644,
            'state_id' => 31,
            'lgarea_name'=> 'Ibarapa North',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 645,
            'state_id' => 31,
            'lgarea_name'=> 'Ido',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 646,
            'state_id' => 31,
            'lgarea_name'=> 'Irepo',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 647,
            'state_id' => 31,
            'lgarea_name'=> 'Iseyin',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 648,
            'state_id' => 31,
            'lgarea_name'=> 'Itesiwaju',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 649,
            'state_id' => 31,
            'lgarea_name'=> 'Iwajowa',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 650,
            'state_id' => 31,
            'lgarea_name'=> 'Kajola',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 651,
            'state_id' => 31,
            'lgarea_name'=> 'Lagelu',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 652,
            'state_id' => 31,
            'lgarea_name'=> 'Ogbomosho North',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 653,
            'state_id' => 31,
            'lgarea_name'=> 'Ogbomosho South',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 654,
            'state_id' => 31,
            'lgarea_name'=> 'Ogo Oluwa',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 655,
            'state_id' => 31,
            'lgarea_name'=> 'Olorunsogo',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 656,
            'state_id' => 31,
            'lgarea_name'=> 'Oluyole',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 657,
            'state_id' => 31,
            'lgarea_name'=> 'Ona Ara',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 658,
            'state_id' => 31,
            'lgarea_name'=> 'Orelope',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 659,
            'state_id' => 31,
            'lgarea_name'=> 'Ori Ire',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 660,
            'state_id' => 31,
            'lgarea_name'=> 'Oyo',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 661,
            'state_id' => 31,
            'lgarea_name'=> 'Oyo East',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 662,
            'state_id' => 31,
            'lgarea_name'=> 'Saki East',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 663,
            'state_id' => 31,
            'lgarea_name'=> 'Saki West',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 664,
            'state_id' => 31,
            'lgarea_name'=> 'Oyo State',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 665,
            'state_id' => 32,
            'lgarea_name'=> 'Bokkos',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 666,
            'state_id' => 32,
            'lgarea_name'=> 'Barkin Ladi',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 667,
            'state_id' => 32,
            'lgarea_name'=> 'Bassa',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 668,
            'state_id' => 32,
            'lgarea_name'=> 'Jos East',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 669,
            'state_id' => 32,
            'lgarea_name'=> 'Jos North',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 670,
            'state_id' => 32,
            'lgarea_name'=> 'Jos South',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 671,
            'state_id' => 32,
            'lgarea_name'=> 'Kanam',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 672,
            'state_id' => 32,
            'lgarea_name'=> 'Kanke',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 673,
            'state_id' => 32,
            'lgarea_name'=> 'Langtang South',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 674,
            'state_id' => 32,
            'lgarea_name'=> 'Langtang North',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 675,
            'state_id' => 32,
            'lgarea_name'=> 'Mangu',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 676,
            'state_id' => 32,
            'lgarea_name'=> 'Mikang',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 677,
            'state_id' => 32,
            'lgarea_name'=> 'Pankshin',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 678,
            'state_id' => 32,
            'lgarea_name'=> 'Qua an Pan',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 679,
            'state_id' => 32,
            'lgarea_name'=> 'Riyom',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 680,
            'state_id' => 32,
            'lgarea_name'=> 'Shendam',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 681,
            'state_id' => 32,
            'lgarea_name'=> 'Wase',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 682,
            'state_id' => 33,
            'lgarea_name'=> 'Abua/Odual',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 683,
            'state_id' => 33,
            'lgarea_name'=> 'Ahoada East',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 684,
            'state_id' => 33,
            'lgarea_name'=> 'Ahoada West',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 685,
            'state_id' => 33,
            'lgarea_name'=> 'Akuku-Toru',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 686,
            'state_id' => 33,
            'lgarea_name'=> 'Andoni',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 687,
            'state_id' => 33,
            'lgarea_name'=> 'Asari-Toru',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 688,
            'state_id' => 33,
            'lgarea_name'=> 'Bonny',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 689,
            'state_id' => 33,
            'lgarea_name'=> 'Degema',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 690,
            'state_id' => 33,
            'lgarea_name'=> 'Eleme',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 691,
            'state_id' => 33,
            'lgarea_name'=> 'Emuoha',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 692,
            'state_id' => 33,
            'lgarea_name'=> 'Etche',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 693,
            'state_id' => 33,
            'lgarea_name'=> 'Gokana',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 694,
            'state_id' => 33,
            'lgarea_name'=> 'Ikwerre',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 695,
            'state_id' => 33,
            'lgarea_name'=> 'Khana',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 696,
            'state_id' => 33,
            'lgarea_name'=> 'Obio/Akpor',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 697,
            'state_id' => 33,
            'lgarea_name'=> 'Ogba/Egbema/Ndoni',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 698,
            'state_id' => 33,
            'lgarea_name'=> 'Ogu/Bolo',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 699,
            'state_id' => 33,
            'lgarea_name'=> 'Okrika',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 700,
            'state_id' => 33,
            'lgarea_name'=> 'Omuma',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 701,
            'state_id' => 33,
            'lgarea_name'=> 'Opobo/Nkoro',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 702,
            'state_id' => 33,
            'lgarea_name'=> 'Oyigbo',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 703,
            'state_id' => 33,
            'lgarea_name'=> 'Port Harcourt',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 704,
            'state_id' => 33,
            'lgarea_name'=> 'Tai',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 705,
            'state_id' => 34,
            'lgarea_name'=> 'Binji',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 706,
            'state_id' => 34,
            'lgarea_name'=> 'Bodinga',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 707,
            'state_id' => 34,
            'lgarea_name'=> 'Dange Shuni',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 708,
            'state_id' => 34,
            'lgarea_name'=> 'Gada',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 709,
            'state_id' => 34,
            'lgarea_name'=> 'Goronyo',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 710,
            'state_id' => 34,
            'lgarea_name'=> 'Gudu',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 711,
            'state_id' => 34,
            'lgarea_name'=> 'Gwadabawa',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 712,
            'state_id' => 34,
            'lgarea_name'=> 'Illela',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 713,
            'state_id' => 34,
            'lgarea_name'=> 'Isa',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 714,
            'state_id' => 34,
            'lgarea_name'=> 'Kebbe',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 715,
            'state_id' => 34,
            'lgarea_name'=> 'Kware',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 716,
            'state_id' => 34,
            'lgarea_name'=> 'Rabah',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 717,
            'state_id' => 34,
            'lgarea_name'=> 'Sabon Birni',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 718,
            'state_id' => 34,
            'lgarea_name'=> 'Shagari',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 719,
            'state_id' => 34,
            'lgarea_name'=> 'Silame',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 720,
            'state_id' => 34,
            'lgarea_name'=> 'Sokoto North',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 721,
            'state_id' => 34,
            'lgarea_name'=> 'Sokoto South',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 722,
            'state_id' => 34,
            'lgarea_name'=> 'Tambuwal',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 723,
            'state_id' => 34,
            'lgarea_name'=> 'Tangaza',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 724,
            'state_id' => 34,
            'lgarea_name'=> 'Tureta',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 725,
            'state_id' => 34,
            'lgarea_name'=> 'Wamako',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 726,
            'state_id' => 34,
            'lgarea_name'=> 'Wurno',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 727,
            'state_id' => 34,
            'lgarea_name'=> 'Yabo',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 728,
            'state_id' => 35,
            'lgarea_name'=> 'Ardo Kola',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 729,
            'state_id' => 35,
            'lgarea_name'=> 'Bali',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 730,
            'state_id' => 35,
            'lgarea_name'=> 'Donga',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 731,
            'state_id' => 35,
            'lgarea_name'=> 'Gashaka',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 732,
            'state_id' => 35,
            'lgarea_name'=> 'Gassol',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 733,
            'state_id' => 35,
            'lgarea_name'=> 'Ibi',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 734,
            'state_id' => 35,
            'lgarea_name'=> 'Jalingo',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 735,
            'state_id' => 35,
            'lgarea_name'=> 'Karim Lamido',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 736,
            'state_id' => 35,
            'lgarea_name'=> 'Kumi',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 737,
            'state_id' => 35,
            'lgarea_name'=> 'Lau',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 738,
            'state_id' => 35,
            'lgarea_name'=> 'Sardauna',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 739,
            'state_id' => 35,
            'lgarea_name'=> 'Takum',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 740,
            'state_id' => 35,
            'lgarea_name'=> 'Ussa',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 741,
            'state_id' => 35,
            'lgarea_name'=> 'Wukari',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 742,
            'state_id' => 35,
            'lgarea_name'=> 'Yorro',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 743,
            'state_id' => 35,
            'lgarea_name'=> 'Zing',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 744,
            'state_id' => 36,
            'lgarea_name'=> 'Bade',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 745,
            'state_id' => 36,
            'lgarea_name'=> 'Bursari',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 746,
            'state_id' => 36,
            'lgarea_name'=> 'Damaturu',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 747,
            'state_id' => 36,
            'lgarea_name'=> 'Fika',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 748,
            'state_id' => 36,
            'lgarea_name'=> 'Fune',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 749,
            'state_id' => 36,
            'lgarea_name'=> 'Geidam',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 750,
            'state_id' => 36,
            'lgarea_name'=> 'Gujba',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 751,
            'state_id' => 36,
            'lgarea_name'=> 'Gulani',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 752,
            'state_id' => 36,
            'lgarea_name'=> 'Jakusko',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 753,
            'state_id' => 36,
            'lgarea_name'=> 'Karasuwa',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 754,
            'state_id' => 36,
            'lgarea_name'=> 'Machina',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 755,
            'state_id' => 36,
            'lgarea_name'=> 'Nangere',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 756,
            'state_id' => 36,
            'lgarea_name'=> 'Nguru',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 757,
            'state_id' => 36,
            'lgarea_name'=> 'Potiskum',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 758,
            'state_id' => 36,
            'lgarea_name'=> 'Tarmuwa',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 759,
            'state_id' => 36,
            'lgarea_name'=> 'Yunusari',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 760,
            'state_id' => 36,
            'lgarea_name'=> 'Yusufari',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 761,
            'state_id' => 37,
            'lgarea_name'=> 'Anka',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 762,
            'state_id' => 37,
            'lgarea_name'=> 'Bakura',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 763,
            'state_id' => 37,
            'lgarea_name'=> 'Birnin Magaji/Kiyaw',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 764,
            'state_id' => 37,
            'lgarea_name'=> 'Bukkuyum',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 765,
            'state_id' => 37,
            'lgarea_name'=> 'Bungudu',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 766,
            'state_id' => 37,
            'lgarea_name'=> 'Gummi',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 767,
            'state_id' => 37,
            'lgarea_name'=> 'Gusau',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 768,
            'state_id' => 37,
            'lgarea_name'=> 'Kaura Namoda',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 769,
            'state_id' => 37,
            'lgarea_name'=> 'Maradun',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 770,
            'state_id' => 37,
            'lgarea_name'=> 'Maru',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 771,
            'state_id' => 37,
            'lgarea_name'=> 'Shinkafi',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 772,
            'state_id' => 37,
            'lgarea_name'=> 'Talata Mafara',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 773,
            'state_id' => 37,
            'lgarea_name'=> 'Chafe',
            'shipping_fee' =>  rand(100,10000)
            ]);
        DB::table('lgareas')->insert([
            'id' => 774,
            'state_id' => 37,
            'lgarea_name'=> 'Zurmi',
            'shipping_fee' =>  rand(100,10000)
            ]);
    }
}
