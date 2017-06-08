<?php

use Illuminate\Database\Seeder;

class VideoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('video')->insert([

    		'name' => 'Video 1',
    		'url' => 'Url1.',
    		'order' => '1',
    		'doctorid' => '1',
    		'status' => '1',
    		]);  
    	DB::table('video')->insert([

    		'name' => 'Video 2',
    		'url' => 'Url2.',
    		'order' => '1',
    		'doctorid' => '2',
    		'status' => '1',
    		]);  
    	DB::table('video')->insert([

    		'name' => 'Video 3',
    		'url' => 'Url3.',
    		'order' => '1',
    		'doctorid' => '1',
    		'status' => '0',
    		]);  
    	DB::table('video')->insert([

    		'name' => 'Video 4',
    		'url' => 'Url4.',
    		'order' => '1',
    		'doctorid' => '2',
    		'status' => '0',
    		]);   
    }
}
