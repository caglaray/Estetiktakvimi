<?php

use Illuminate\Database\Seeder;

class ExperiencesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('exp_doc')->insert([

    		'company_name' => 'Deneyim 1',
    		'start' => '2010',
    		'finish' => '2011',
    		'doctorid' => '1',
    		'created_at' => date("Y-m-d H:i:s") ,
    		'updated_at' => date("Y-m-d H:i:s") ,
    		]);
           DB::table('exp_doc')->insert([

    		'company_name' => 'Deneyim 2',
    		'start' => '2011',
    		'finish' => '2012',
    		'doctorid' => '1',
    		'created_at' => date("Y-m-d H:i:s") ,
    		'updated_at' => date("Y-m-d H:i:s") ,
    		]);
              DB::table('exp_doc')->insert([

    		'company_name' => 'Deneyim 3',
    		'start' => '2012',
    		'finish' => '2013',
    		'doctorid' => '1',
    		'created_at' => date("Y-m-d H:i:s") ,
    		'updated_at' => date("Y-m-d H:i:s") ,
    		]);




                  DB::table('exp_doc')->insert([

    		'company_name' => 'Deneyim 1',
    		'start' => '2010',
    		'finish' => '2011',
    		'doctorid' => '2',
    		'created_at' => date("Y-m-d H:i:s") ,
    		'updated_at' => date("Y-m-d H:i:s") ,
    		]);
           DB::table('exp_doc')->insert([

    		'company_name' => 'Deneyim 2',
    		'start' => '2011',
    		'finish' => '2012',
    		'doctorid' => '2',
    		'created_at' => date("Y-m-d H:i:s") ,
    		'updated_at' => date("Y-m-d H:i:s") ,
    		]);
              DB::table('exp_doc')->insert([

    		'company_name' => 'Deneyim 3',
    		'start' => '2012',
    		'finish' => '2013',
    		'doctorid' => '2',
    		'created_at' => date("Y-m-d H:i:s") ,
    		'updated_at' => date("Y-m-d H:i:s") ,
    		]);
            
    }
}
