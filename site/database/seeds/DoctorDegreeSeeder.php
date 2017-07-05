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
    		'degreename' => 'Pratisyen Doktor',
    		'degreesname' => 'Pratisyen Dr.',
    		'created_at' => date("Y-m-d H:i:s") ,
    		'updated_at' => date("Y-m-d H:i:s") ,
    		]);
    	DB::table('doc_degree')->insert([
    		'degreename' => 'Uzman Doktor',
    		'degreesname' => 'Uzm. Dr.',
    		'created_at' => date("Y-m-d H:i:s") ,
    		'updated_at' => date("Y-m-d H:i:s") ,
    		]);

    	DB::table('doc_degree')->insert([
    		'degreename' => 'Operatör Doktor',
    		'degreesname' => 'Op. Dr.',
    		'created_at' => date("Y-m-d H:i:s") ,
    		'updated_at' => date("Y-m-d H:i:s") ,
    		]);

    	DB::table('doc_degree')->insert([
    		'degreename' => 'Yardımcı Doçent',
    		'degreesname' => 'Yrd. Doç.',
    		'created_at' => date("Y-m-d H:i:s") ,
    		'updated_at' => date("Y-m-d H:i:s") ,
    		]);

    	DB::table('doc_degree')->insert([
    		'degreename' => 'Doçent',
    		'degreesname' => 'Doç.',
    		'created_at' => date("Y-m-d H:i:s") ,
    		'updated_at' => date("Y-m-d H:i:s") ,
    		]);


    	DB::table('doc_degree')->insert([
    		'degreename' => 'Profesör',
    		'degreesname' => 'Prof.',
    		'created_at' => date("Y-m-d H:i:s") ,
    		'updated_at' => date("Y-m-d H:i:s") ,
    		]);

    	DB::table('doc_degree')->insert([
    		'degreename' => 'Ordinaryus',
    		'degreesname' => 'Ord.',
    		'created_at' => date("Y-m-d H:i:s") ,
    		'updated_at' => date("Y-m-d H:i:s") ,
    		]);





    }
}
