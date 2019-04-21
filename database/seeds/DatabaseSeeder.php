<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
       // $this->call(BiddersTableSeeder::class);
         $this->call(BiddingsTableSeeder::class);
        // $this->call(CategoriesTableSeeder::class);
        // $this->call(PaymentMethodsTableSeeder::class);
         //$this->call(ProductsTableSeeder::class);
        // $this->call(SellersTableSeeder::class);
        //$this->call(ProductSoldTableSeeder::class);
        
    }
}
