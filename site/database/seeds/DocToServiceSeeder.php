<?php

use Illuminate\Database\Seeder;

class DocToServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('service_doc')->insert([

    		'doctorid' => '1',
    		'servicesid' => '1',
            'created_at' => date("Y-m-d H:i:s") ,
            'updated_at' => date("Y-m-d H:i:s") ,

           ]);    
    	DB::table('service_doc')->insert([

    		'doctorid' => '2',
    		'servicesid' => '1',
            'created_at' => date("Y-m-d H:i:s") ,
            'updated_at' => date("Y-m-d H:i:s") ,
         ]);    
    	DB::table('service_doc')->insert([

    		'doctorid' => '2',
    		'servicesid' => '2',
            'created_at' => date("Y-m-d H:i:s") ,
            'updated_at' => date("Y-m-d H:i:s") ,

           ]);    
    }
}
