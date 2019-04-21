<?php

use Illuminate\Database\Seeder;

class BiddingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bidding')->insert([
            'SellerName'=>'dwd',
            'photo'=> 'wd',
            'name'=> 'ds',
            'startPrice'=> 12,
            'noOfBid'=> 2,
            'currentBid'=> 3,
            'bidDeadline'=>'2015-2-1 01:02:03'
        ]);
    }
}
