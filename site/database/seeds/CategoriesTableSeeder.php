<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('categories')->insert([
    		'name' => 'Kulak Estetiği',
          'created_at' => date("Y-m-d H:i:s") ,
          'updated_at' => date("Y-m-d H:i:s") ,
          ]);
    	DB::table('categories')->insert([
    		'name' => 'Burun Estetiği',
          'created_at' => date("Y-m-d H:i:s") ,
          'updated_at' => date("Y-m-d H:i:s") ,
          ]);
    	DB::table('categories')->insert([
    		'name' => 'Göğüs Estetiği',
          'created_at' => date("Y-m-d H:i:s") ,
          'updated_at' => date("Y-m-d H:i:s") ,
          ]);
    	DB::table('categories')->insert([
    		'name' => 'Vajina Estetiği',
          'created_at' => date("Y-m-d H:i:s") ,
          'updated_at' => date("Y-m-d H:i:s") ,
          ]);
    	DB::table('categories')->insert([
    		'name' => 'Plastik Cerrahi',
          'created_at' => date("Y-m-d H:i:s") ,
          'updated_at' => date("Y-m-d H:i:s") ,
          ]);
    	DB::table('categories')->insert([
    		'name' => ' Yüz Estetiği',
          'created_at' => date("Y-m-d H:i:s") ,
          'updated_at' => date("Y-m-d H:i:s") ,
          ]);
    	DB::table('categories')->insert([
    		'name' => 'Vücut Estetiği',
          'created_at' => date("Y-m-d H:i:s") ,
          'updated_at' => date("Y-m-d H:i:s") ,
          ]);

    }
}
