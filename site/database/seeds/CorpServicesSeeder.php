<?php

use Illuminate\Database\Seeder;

class CorpServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('corp_ser')->insert([

    		'corpid' => '1',
    		'servicesid' => '1',

    		]); 

    	DB::table('corp_ser')->insert([

    		'corpid' => '1',
    		'servicesid' => '2',

    		]); 

    	DB::table('corp_ser')->insert([

    		'corpid' => '2',
    		'servicesid' => '1',

    		]); 

    	DB::table('corp_ser')->insert([

    		'corpid' => '2',
    		'servicesid' => '3',

    		]); 

    	DB::table('corp_ser')->insert([

    		'corpid' => '2',
    		'servicesid' => '4',

    		]); 




    }
}
