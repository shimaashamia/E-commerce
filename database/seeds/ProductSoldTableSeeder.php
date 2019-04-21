<?php

use Illuminate\Database\Seeder;

class ProductSoldTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products_sold')->insert([
            'name' =>'sw',
            'maxPrice'=>23,
            'SellerName'=>'e',
            'bidderName'=> 'fe'
        ]);
    }
}
