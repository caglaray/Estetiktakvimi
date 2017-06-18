<?php

use Illuminate\Database\Seeder;

class DoctorDegreeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	DB::table('doc_degree')->insert([
    		'name' => 'Pratisyen Doktor',
    		'sname' => 'Pratisyen Dr.',
    		'created_at' => date("Y-m-d H:i:s") ,
    		'updated_at' => date("Y-m-d H:i:s") ,
    		]);
    	DB::table('doc_degree')->insert([
    		'name' => 'Uzman Doktor',
    		'sname' => 'Uzm. Dr.',
    		'created_at' => date("Y-m-d H:i:s") ,
    		'updated_at' => date("Y-m-d H:i:s") ,
    		]);

    	DB::table('doc_degree')->insert([
    		'name' => 'Operatör Doktor',
    		'sname' => 'Op. Dr.',
    		'created_at' => date("Y-m-d H:i:s") ,
    		'updated_at' => date("Y-m-d H:i:s") ,
    		]);

    	DB::table('doc_degree')->insert([
    		'name' => 'Yardımcı Doçent',
    		'sname' => 'Yrd. Doç.',
    		'created_at' => date("Y-m-d H:i:s") ,
    		'updated_at' => date("Y-m-d H:i:s") ,
    		]);

    	DB::table('doc_degree')->insert([
    		'name' => 'Doçent',
    		'sname' => 'Doç.',
    		'created_at' => date("Y-m-d H:i:s") ,
    		'updated_at' => date("Y-m-d H:i:s") ,
    		]);


    	DB::table('doc_degree')->insert([
    		'name' => 'Profesör',
    		'sname' => 'Prof.',
    		'created_at' => date("Y-m-d H:i:s") ,
    		'updated_at' => date("Y-m-d H:i:s") ,
    		]);

    	DB::table('doc_degree')->insert([
    		'name' => 'Ordinaryus',
    		'sname' => 'Ord.',
    		'created_at' => date("Y-m-d H:i:s") ,
    		'updated_at' => date("Y-m-d H:i:s") ,
    		]);





    }
}
