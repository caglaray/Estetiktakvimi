<?php

use Illuminate\Database\Seeder;

class DoctorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('doctors')->insert([

    		'name' => 'Can Çağlar',
    		'surname' => 'Ay',
    		'username' => 'caglaray',
    		'password' => '$2y$10$ZgsejJWnXfGGhkoxbcgY/eT48ybOtueH4dgXgn/gfaCu2.mlBI9Y.',
    		'adress' => 'İstanbul',
    		'email' => 'can@doktor.com',
    		'photourl' => 'urlcan',
    		'telephone' => '0532 532 32 32',
    		'birthday' => '01.01.2001',
    		'livecity' => 'İstanbul',

    		]);

    	DB::table('doctors')->insert([

    		'name' => 'Ali',
    		'surname' => 'Arslan',
    		'username' => 'aliarslan',
    		'password' => '$2y$10$ZgsejJWnXfGGhkoxbcgY/eT48ybOtueH4dgXgn/gfaCu2.mlBI9Y.',
    		'adress' => 'Ankara',
    		'email' => 'ali@doktor.com',
    		'photourl' => 'urlali',
    		'telephone' => '0532 532 32 32',
    		'birthday' => '01.01.2001',
    		'livecity' => 'Ankara',
    		
    		]);
    	




    }
}
