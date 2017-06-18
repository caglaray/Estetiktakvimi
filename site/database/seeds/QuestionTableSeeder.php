<?php

use Illuminate\Database\Seeder;

class QuestionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

      DB::table('question')->insert([

        'userid' => '1',
        'doctorid' => '1',
        'catid' => '3',
        'title' => 'Soru 1',
        'message' => 'Kullanıcı1 , Doktor 1ye soru soruyor.',
        'status' => '0',
        'created_at' => date("Y-m-d H:i:s") ,
        'updated_at' => date("Y-m-d H:i:s") ,
        ]);

      DB::table('question')->insert([

        'userid' => '1',
        'doctorid' => '2',
        'catid' => '1',
        'title' => 'Soru 2',
        'message' => 'Kullanıcı1 , Doktor 2ye soru soruyor.',
        'status' => '0',
        'created_at' => date("Y-m-d H:i:s") ,
        'updated_at' => date("Y-m-d H:i:s") ,
        
        ]);

      DB::table('question')->insert([

        'userid' => '2',
        'doctorid' => '1',
        'catid' => '2',
        'title' => 'Soru 3',
        'message' => 'Kullanıcı2 , Doktor 1ye soru soruyor.',
        'status' => '0',
        'created_at' => date("Y-m-d H:i:s") ,
        'updated_at' => date("Y-m-d H:i:s") ,
        ]);

      DB::table('question')->insert([

        'userid' => '2',
        'doctorid' => '2',
        'catid' => '4',
        'title' => 'Soru 4',
        'message' => 'Kullanıcı2 , Doktor 2ye soru soruyor.',
        'status' => '0',
        'created_at' => date("Y-m-d H:i:s") ,
        'updated_at' => date("Y-m-d H:i:s") ,
        ]);

      DB::table('question')->insert([

        'userid' => '1',
        'doctorid' => '1',
        'catid' => '5',
        'title' => 'Soru 5',
        'message' => 'Kullanıcı1 , Doktor 1ye soru soruyor.',
        'status' => '0',
        'created_at' => date("Y-m-d H:i:s") ,
        'updated_at' => date("Y-m-d H:i:s") ,
        ]);


    }
  }
