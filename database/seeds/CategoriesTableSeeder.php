<?php

use Illuminate\Database\Seeder;

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
        'icon'=> Str::random(10),
        'name'=> Str::random(10),
        'noOfBid'=> Str::random(10),
        

        ]);

    }
}
