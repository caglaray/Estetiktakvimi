<?php

use Illuminate\Database\Seeder;

class CorporationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        	DB::table('corporations')->insert([

    		'name' => 'Can Çağlar',
            'adress' => 'Seyrantepe mah. bilmem ne sokak no:10',
            'logo' => '/upload/corporations/can.jpeg',
            'telephone' => '1234567890',
            'email' => 'can@kurum.com',
            'city' => 'istanbul',
    		'username' => 'cancaglaray',
    		'password' => '$2y$10$ZgsejJWnXfGGhkoxbcgY/eT48ybOtueH4dgXgn/gfaCu2.mlBI9Y.',
    		
           ]);

    	DB::table('corporations')->insert([

    		  'name' => 'Ali ARSLAN',
            'adress' => 'Kayışdağ mah. bilmem ne sokak no:11',
            'logo' => '/upload/corporations/ali.jpeg',
            'telephone' => '9876543210',
            'email' => 'ali@kurum.com',
            'city' => 'istanbul',
            'username' => 'aliarslan',
            'password' => '$2y$10$ZgsejJWnXfGGhkoxbcgY/eT48ybOtueH4dgXgn/gfaCu2.mlBI9Y.',
            
    		]);
    }
}
