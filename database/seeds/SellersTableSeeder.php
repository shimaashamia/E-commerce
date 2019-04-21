<?php

use Illuminate\Database\Seeder;

class SellersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sellers')->insert([
             'firstname'=> 'ww',
             'lasttname'=>'qw',
             'email'=>'ds',
             'address'=>'sq',
             'phone'=>123,
             'password'=>234,
             'bidders-Credit-Details'=>'wdw'
            
     
            ]);
    }
}
