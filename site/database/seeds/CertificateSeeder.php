<?php

use Illuminate\Database\Seeder;

class CertificateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('certificate')->insert([

    		'image' => 'http://www.fidesmatbaa.com/images/sertifika/6.jpg',
    		'doctorid' => '1',
    		'created_at' => date("Y-m-d H:i:s") ,
    		'updated_at' => date("Y-m-d H:i:s") ,
    		]);
    	DB::table('certificate')->insert([

    		'image' => 'http://www.fidesmatbaa.com/images/sertifika/6.jpg',
    		'doctorid' => '1',
    		'created_at' => date("Y-m-d H:i:s") ,
    		'updated_at' => date("Y-m-d H:i:s") ,
    		]);
    	DB::table('certificate')->insert([

    		'image' => 'http://www.fidesmatbaa.com/images/sertifika/6.jpg',
    		'doctorid' => '1',
    		'created_at' => date("Y-m-d H:i:s") ,
    		'updated_at' => date("Y-m-d H:i:s") ,
    		]);
    	DB::table('certificate')->insert([

    		'image' => 'http://www.fidesmatbaa.com/images/sertifika/6.jpg',
    		'doctorid' => '1',
    		'created_at' => date("Y-m-d H:i:s") ,
    		'updated_at' => date("Y-m-d H:i:s") ,
    		]);
    	DB::table('certificate')->insert([

    		'image' => 'http://www.fidesmatbaa.com/images/sertifika/6.jpg',
    		'doctorid' => '2',
    		'created_at' => date("Y-m-d H:i:s") ,
    		'updated_at' => date("Y-m-d H:i:s") ,
    		]);

    	DB::table('certificate')->insert([

    		'image' => 'http://www.fidesmatbaa.com/images/sertifika/6.jpg',
    		'doctorid' => '2',
    		'created_at' => date("Y-m-d H:i:s") ,
    		'updated_at' => date("Y-m-d H:i:s") ,
    		]);

    	DB::table('certificate')->insert([

    		'image' => 'http://www.fidesmatbaa.com/images/sertifika/6.jpg',
    		'doctorid' => '2',
    		'created_at' => date("Y-m-d H:i:s") ,
    		'updated_at' => date("Y-m-d H:i:s") ,
    		]);




    }
}
