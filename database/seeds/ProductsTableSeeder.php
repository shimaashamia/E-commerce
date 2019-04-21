<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([

            'photo'=>'sd',
            'name'=>'sw',
            'SellerName'=>'cd',
            'description'=>'e',
            'state'=> 'fe',
            'startprice'=>21,
            'sold'=>true
            
        ]);
    }
}
