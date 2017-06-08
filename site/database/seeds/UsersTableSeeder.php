<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('users')->insert([

    		'name' => 'Can Çağlar',
    		'surname' => 'Ay',
    		'username' => 'caglaray',
    		'password' => '$2y$10$ZgsejJWnXfGGhkoxbcgY/eT48ybOtueH4dgXgn/gfaCu2.mlBI9Y.',
    		'email' => 'can@site.com',
    		'address' => 'Manisa',
    		'photourl' => 'urlcan',
    		]);

    	DB::table('users')->insert([

    		'name' => 'Ali',
    		'surname' => 'Arslan',
    		'username' => 'aliarslan',
    		'password' => '$2y$10$ZgsejJWnXfGGhkoxbcgY/eT48ybOtueH4dgXgn/gfaCu2.mlBI9Y.',
    		'email' => 'ali@site.com',
    		'address' => 'İzmir',
    		'photourl' => 'urlali',
    		]);

    }
}
