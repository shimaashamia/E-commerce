<?php

use Illuminate\Database\Seeder;

class BiddersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bidders')->insert([
            'firstname' => 'ss',
            'lasttname' => 'we',
            'email'=>'shimaa.shamia@gmail.com',
            'address'=> 'sd',
            'phone'=> 1234 ,
            'password'=> 32

        ]);

       


        
        // $faker = Faker\Factory::create();
        // foreach (range(0, 10) as $index) {
           
        //     \App\Bidder::create([
        //         'Name' => $faker->Name,
        //         'Username' => $faker->Username,
        //         'email' => $faker->Email,
        //         'password' => bcrypt('secret'),
        //         'Phone' => $faker->phoneNumber,
        //         // 'Remember token' => $faker->Remember token,
                
                
        //     ]);
        // }

       
          
           
            // $table->rememberToken();
            // $table->timestamp('email_verified_at')->nullable();
           
            
    
       
    
    }
}
