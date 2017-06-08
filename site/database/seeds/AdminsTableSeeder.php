<?php

use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('admins')->insert([

    		'name' => 'Can Çağlar',
    		'surname' => 'Ay',
    		'username' => 'caglaray',
    		'password' => '$2y$10$ZgsejJWnXfGGhkoxbcgY/eT48ybOtueH4dgXgn/gfaCu2.mlBI9Y.',
    		'email' => 'can@admin.com',
    		'photourl' => 'urlcan',

    		]);

    	DB::table('admins')->insert([

    		'name' => 'Ali',
    		'surname' => 'Arslan',
    		'username' => 'aliarslan',
    		'password' => '$2y$10$ZgsejJWnXfGGhkoxbcgY/eT48ybOtueH4dgXgn/gfaCu2.mlBI9Y.',
    		'email' => 'ali@admin.com',
    		'photourl' => 'urlali',

    		]);



    }
}
