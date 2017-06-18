<?php

use Illuminate\Database\Seeder;

class QuestionAnswerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('questions_answers')->insert([

    		'question_id' => '1',
    		'doctor_id' => '1',
    		'content' => 'Soru 1in cevabı..',
    		'status' => '0',
    		'created_at' => date("Y-m-d H:i:s") ,
    		'updated_at' => date("Y-m-d H:i:s") ,
    		]);
    }
}
