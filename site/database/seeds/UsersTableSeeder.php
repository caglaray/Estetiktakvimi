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
           'created_at' => date("Y-m-d H:i:s") ,
           'updated_at' => date("Y-m-d H:i:s") ,

           ]);

    	DB::table('users')->insert([

    		'name' => 'Ali',
    		'surname' => 'Arslan',
    		'username' => 'aliarslan',
    		'password' => '$2y$10$ZgsejJWnXfGGhkoxbcgY/eT48ybOtueH4dgXgn/gfaCu2.mlBI9Y.',
    		'address' => 'İzmir',
    		'photourl' => 'urlali',
            'email' => 'ali@site.com',
            'created_at' => date("Y-m-d H:i:s") ,
            'updated_at' => date("Y-m-d H:i:s") ,
            ]);

    }
}

