<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert(
        	[[
        	'name'=>'Oppo F17 Pro',
        	'price'=>"54000",
        	'description'=>"Super AMOLED, 430 nits (typ), 800 nits (peak)",
        	'category'=>"Mobile",
        	'gallery'=>"https://i.ibb.co/jzcKS0g/download-3.jpg"
        	],
    		[
        	'name'=>'Panasonic TV',
        	'price'=>"34567",
        	'description'=>"Panasonic Corporation, one of the world's largest electronics manufacturers, was founded as Matsushita Electric Industrial Co. Ltd",
        	'category'=>"TV",
        	'gallery'=>"https://i.ibb.co/TmkGhDk/download-4.jpg"
        	],
        	[
        	'name'=>'SONY Bravia X7002G',
        	'price'=>"38,999",
        	'description'=>"Featuring 4K X-Reality Pro and ClearAudio+",
        	'category'=>"TV",
        	'gallery'=>"https://i.ibb.co/jGjDyFh/sony-kd-43x7002g-kd-43x7002g-original-imaftyujugrkzct2.jpg"
        	],
    		[
        	'name'=>'LG 260 L 3 Star',
        	'price'=>"34890",
        	'description'=>"This product is 4-star rated as per 2019 BEE rating and 3-star rated as per 2020 BEE rating",
        	'category'=>"Fridge",
        	'gallery'=>"https://i.ibb.co/GnZzsT6/51-B-PLv-sv-L-SL1500.jpg"
        	]]);
    }
}
