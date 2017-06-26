<?php

use Illuminate\Database\Seeder;

class DocLangSeeder extends Seeder
{
  /**
  * Run the database seeds.
  *
  * @return void
  */
  public function run()
  {
    DB::table('doc_lang')->insert([
      'doctorid' => '1',
      'langid' => '1',
      'created_at' => date("Y-m-d H:i:s") ,
      'updated_at' => date("Y-m-d H:i:s") ,
    ]);
    DB::table('doc_lang')->insert([
      'doctorid' => '1',
      'langid' => '2',
      'created_at' => date("Y-m-d H:i:s") ,
      'updated_at' => date("Y-m-d H:i:s") ,
    ]);
    DB::table('doc_lang')->insert([
      'doctorid' => '1',
      'langid' => '4',
      'created_at' => date("Y-m-d H:i:s") ,
      'updated_at' => date("Y-m-d H:i:s") ,
    ]);
    DB::table('doc_lang')->insert([
      'doctorid' => '2',
      'langid' => '3',
      'created_at' => date("Y-m-d H:i:s") ,
      'updated_at' => date("Y-m-d H:i:s") ,
    ]);
  }
}
