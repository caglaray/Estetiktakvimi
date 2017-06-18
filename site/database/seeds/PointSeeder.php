<?php

use Illuminate\Database\Seeder;

class PointSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('points')->insert([

    		'name' => 'Makale',
    		'scores' => '10',
    		'created_at' => date("Y-m-d H:i:s") ,
    		'updated_at' => date("Y-m-d H:i:s") ,
    		]);

    	

    	DB::table('points')->insert([

    		'name' => 'Video',
    		'scores' => '20',
    		'created_at' => date("Y-m-d H:i:s") ,
    		'updated_at' => date("Y-m-d H:i:s") ,
    		]);


    	DB::table('points')->insert([

    		'name' => 'SoruCevap',
    		'scores' => '30',
    		'created_at' => date("Y-m-d H:i:s") ,
    		'updated_at' => date("Y-m-d H:i:s") ,
    		]);
    }
}


