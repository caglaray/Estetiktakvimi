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
      'name' => 'Türkçe , İngilizce , Arapça',
      'created_at' => date("Y-m-d H:i:s") ,
      'updated_at' => date("Y-m-d H:i:s") ,
    ]);
    

  }
}
