<?php

use Illuminate\Database\Seeder;

class VideoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


     DB::table('video')->insert([

         'name' => '1 Numaralı Doktorun 1. Videosu',
         'url' => 'Url1.',
         'order' => '1',
         'doctorid' => '1',
         'status' => '1',
         'created_at' => date("Y-m-d H:i:s") ,
         'updated_at' => date("Y-m-d H:i:s") ,
         ]);  



     DB::table('video')->insert([

      'name' => '2 Numaralı Doktorun 1. Videosu',
      'url' => 'Url2.',
      'order' => '1',
      'doctorid' => '2',
      'status' => '1',
      'created_at' => date("Y-m-d H:i:s") ,
      'updated_at' => date("Y-m-d H:i:s") ,
      ]);  

     DB::table('video')->insert([

      'name' => '1 Numaralı Doktorun 2. Videosu',
      'url' => 'Url3.',
      'order' => '2',
      'doctorid' => '1',
      'status' => '0',
      'created_at' => date("Y-m-d H:i:s") ,
      'updated_at' => date("Y-m-d H:i:s") ,
      ]);  
     DB::table('video')->insert([

      'name' => '2 Numaralı Doktorun 2. Videosu',
      'url' => 'Url4.',
      'order' => '2',
      'doctorid' => '2',
      'status' => '0',
      'created_at' => date("Y-m-d H:i:s") ,
      'updated_at' => date("Y-m-d H:i:s") ,
      ]);   


 }
}
