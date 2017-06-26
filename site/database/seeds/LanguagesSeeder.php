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
    ]);
    DB::table('languages')->insert([
      'name' => 'İngilizce',
    ]);
    DB::table('languages')->insert([
      'name' => 'Almanca',
    ]);
    DB::table('languages')->insert([
      'name' => 'Fransızca',
    ]);
    DB::table('languages')->insert([
      'name' => 'İtalyanca',
    ]);
    DB::table('languages')->insert([
      'name' => 'Arapça',
    ]);

  }
}
