<?php

use Illuminate\Database\Seeder;

class DoctoSchoolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        	DB::table('doc_schools')->insert([
    		'doctorid' => '1',
    		'name' => 'İstanbul Ticaret üniversitesi',
    		'education' => 'Bilgisayar Mühendisliği',
    		'start' => '2010',
    		'finish' => '2019',
    		'created_at' => date("Y-m-d H:i:s") ,
    		'updated_at' => date("Y-m-d H:i:s") ,
    		]);

    	DB::table('doc_schools')->insert([
    		'doctorid' => '1',
    		'name' => 'İstanbul Ticaret üniversitesi',
    		'education' => 'Endüstri Mühendisliği',
    		'start' => '2019',
    		'finish' => '2022',
    		'created_at' => date("Y-m-d H:i:s") ,
    		'updated_at' => date("Y-m-d H:i:s") ,
    		]);

    	DB::table('doc_schools')->insert([
    		'doctorid' => '1',
    		'name' => 'İstanbul Ticaret üniversitesi',
    		'education' => 'Mekatronik Mühendisliği',
    		'start' => '2022',
    		'finish' => '2026',
    		'created_at' => date("Y-m-d H:i:s") ,
    		'updated_at' => date("Y-m-d H:i:s") ,
    		]);

    	DB::table('doc_schools')->insert([
    		'doctorid' => '2',
    		'name' => 'İstanbul Ticaret üniversitesi',
    		'education' => 'Bilgisayar Mühendisliği',
    		'start' => '2008',
    		'finish' => '2010',
    		'created_at' => date("Y-m-d H:i:s") ,
    		'updated_at' => date("Y-m-d H:i:s") ,
    		]);

    	DB::table('doc_schools')->insert([
    		'doctorid' => '2',
    		'name' => 'İstanbul Ticaret üniversitesi',
    		'education' => 'Enüdstri Mühendisliği',
    		'start' => '2010',
    		'finish' => '2014',
    		'created_at' => date("Y-m-d H:i:s") ,
    		'updated_at' => date("Y-m-d H:i:s") ,
    		]);
    }
}
