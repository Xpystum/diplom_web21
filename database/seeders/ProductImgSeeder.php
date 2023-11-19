<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductImgSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $img_products = [
            ['id'=> 1, 'product_id' => 1, 'resource'=> "product/bmw1_2.jpg"],
            ['id'=> 2, 'product_id' => 1, 'resource'=> "product/bmw1_3.jpg"],
            ['id'=> 3, 'product_id' => 1, 'resource'=> "product/bmw1_4.jpg"],
            ['id'=> 4, 'product_id' => 1, 'resource'=> "product/bmw1_5.jpg"],
            ['id'=> 5, 'product_id' => 2, 'resource'=> "product/bmw2_2.jpg"],
            ['id'=> 6, 'product_id' => 2, 'resource'=> "product/bmw2_3.jpg"],
            ['id'=> 7, 'product_id' => 2, 'resource'=> "product/bmw2_4.jpg"],
            ['id'=> 8, 'product_id' => 2, 'resource'=> "product/bmw2_5.jpg"],

            
        ];
        DB::table('img_products')->insert($img_products);
    }
}
