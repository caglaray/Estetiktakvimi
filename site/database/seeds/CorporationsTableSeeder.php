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
    		'surname' => 'Ay',
    		'username' => 'caglaray',
    		'password' => '$2y$10$ZgsejJWnXfGGhkoxbcgY/eT48ybOtueH4dgXgn/gfaCu2.mlBI9Y.',
    		'email' => 'can@kurum.com',
    		

    		]);

    	DB::table('corporations')->insert([

    		'name' => 'Ali',
    		'surname' => 'Arslan',
    		'username' => 'aliarslan',
    		'password' => '$2y$10$ZgsejJWnXfGGhkoxbcgY/eT48ybOtueH4dgXgn/gfaCu2.mlBI9Y.',
    		'email' => 'ali@kurum.com',
    		

    		]);
    }
}
