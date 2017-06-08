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
    		]);
    	DB::table('categories')->insert([
    		'name' => 'Burun Estetiği',
    		]);
    	DB::table('categories')->insert([
    		'name' => 'Göğüs Estetiği',
    		]);
    	DB::table('categories')->insert([
    		'name' => 'Vajina Estetiği',
    		]);
    	DB::table('categories')->insert([
    		'name' => 'Plastik Cerrahi',
    		]);
    	DB::table('categories')->insert([
    		'name' => ' Yüz Estetiği',
    		]);
    	DB::table('categories')->insert([
    		'name' => 'Vücut Estetiği',
    		]);

    }
}
