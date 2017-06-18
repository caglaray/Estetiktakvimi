<?php

use Illuminate\Database\Seeder;

class ServiceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('services')->insert([

        'name' => 'Tüp Bebek',
        'created_at' => date("Y-m-d H:i:s") ,
        'updated_at' => date("Y-m-d H:i:s") ,
        ]);

      DB::table('services')->insert([

        'name' => 'Normal doğum',
        'created_at' => date("Y-m-d H:i:s") ,
        'updated_at' => date("Y-m-d H:i:s") ,

        ]);
      DB::table('services')->insert([

        'name' => 'Laparoskopik cerrahi',
        'created_at' => date("Y-m-d H:i:s") ,
        'updated_at' => date("Y-m-d H:i:s") ,

        ]);


      DB::table('services')->insert([

        'name' => 'Radikal histerektomi',
        'created_at' => date("Y-m-d H:i:s") ,
        'updated_at' => date("Y-m-d H:i:s") ,

        ]);
    }
}
