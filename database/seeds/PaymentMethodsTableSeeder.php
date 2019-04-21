<?php

use Illuminate\Database\Seeder;

class PaymentMethodsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('payment_method')->insert([
            'paymentCode'=>142,
            'payment_Method_Describtion'=>'gtrd'
    
            ]);
    }
}
