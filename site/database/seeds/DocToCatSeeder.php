<?php

use Illuminate\Database\Seeder;

class DocToCatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('doc_cat')->insert([

    		'doctorid' => '1',
    		'cat_id' => '1',
         'created_at' => date("Y-m-d H:i:s") ,
         'updated_at' => date("Y-m-d H:i:s") ,
         
         ]);    
    	DB::table('doc_cat')->insert([

    	 'doctorid' => '1',
    	 'cat_id' => '2',
         'created_at' => date("Y-m-d H:i:s") ,
         'updated_at' => date("Y-m-d H:i:s") ,
         
         ]);   
    	DB::table('doc_cat')->insert([

    	 'doctorid' => '1',
    	 'cat_id' => '3',
         'created_at' => date("Y-m-d H:i:s") ,
         'updated_at' => date("Y-m-d H:i:s") ,
         
         ]);   
    	DB::table('doc_cat')->insert([

    		'doctorid' => '2',
    		'cat_id' => '4',
         'created_at' => date("Y-m-d H:i:s") ,
         'updated_at' => date("Y-m-d H:i:s") ,
         
         ]);   
    	DB::table('doc_cat')->insert([

    		'doctorid' => '2',
    		'cat_id' => '5',
         'created_at' => date("Y-m-d H:i:s") ,
         'updated_at' => date("Y-m-d H:i:s") ,
         
         ]);   

    }
}
