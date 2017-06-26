<?php

use Illuminate\Database\Seeder;

class LanguagesSeeder extends Seeder
{
  /**
  * Run the database seeds.
  *
  * @return void
  */
  public function run()
  {
    DB::table('languages')->insert([
      'name' => 'Türkçe',
      'created_at' => date("Y-m-d H:i:s") ,
      'updated_at' => date("Y-m-d H:i:s") ,
    ]);
    DB::table('languages')->insert([
      'name' => 'İngilizce',
      'created_at' => date("Y-m-d H:i:s") ,
      'updated_at' => date("Y-m-d H:i:s") ,
    ]);
    DB::table('languages')->insert([
      'name' => 'Almanca',
      'created_at' => date("Y-m-d H:i:s") ,
      'updated_at' => date("Y-m-d H:i:s") ,
    ]);
    DB::table('languages')->insert([
      'name' => 'Fransızca',
      'created_at' => date("Y-m-d H:i:s") ,
      'updated_at' => date("Y-m-d H:i:s") ,
    ]);
    DB::table('languages')->insert([
      'name' => 'İtalyanca',
      'created_at' => date("Y-m-d H:i:s") ,
      'updated_at' => date("Y-m-d H:i:s") ,
    ]);
    DB::table('languages')->insert([
      'name' => 'Arapça',
      'created_at' => date("Y-m-d H:i:s") ,
      'updated_at' => date("Y-m-d H:i:s") ,
    ]);

  }
}
