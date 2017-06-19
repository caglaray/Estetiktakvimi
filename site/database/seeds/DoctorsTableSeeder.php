<?php

use Illuminate\Database\Seeder;

class DoctorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('doctors')->insert([

    		'username' => 'caglaray',
            'password' => '$2y$10$ZgsejJWnXfGGhkoxbcgY/eT48ybOtueH4dgXgn/gfaCu2.mlBI9Y.',
            'name' => 'Can Çağlar',
            'surname' => 'Ay',
            'email' => 'can@doktor.com',
            'image' => 'urlcan',
            'adress' => 'İstanbul',
            'telephone' => '0532 532 32 32',
            'birthday' => '01.01.2001',
            'livecity' => 'İstanbul',
            'about' => 'Aslen memleketi Kastamonu olan Dr.Can Çağlar AY, 1970 yılında hakim olan babasının görevi sebebiyle Elazığ’da doğmuştur.Orta ve lise eğitimini İstanbul’da tamamlayan Dr.Kalaycı ; 1988-1994 yılları arasında tıp eğitimini Bursa Uludağ Tıp Fakültesinde almıştır.',
            'created_at' => date("Y-m-d H:i:s") ,
            'updated_at' => date("Y-m-d H:i:s") ,
            ]);

    	DB::table('doctors')->insert([

    		'username' => 'aliarslan',
    		'password' => '$2y$10$ZgsejJWnXfGGhkoxbcgY/eT48ybOtueH4dgXgn/gfaCu2.mlBI9Y.',
            'name' => 'Ali',
            'surname' => 'Arslan',
            'email' => 'ali@doktor.com',
            'image' => 'urlali',
            'adress' => 'Ankara',
            'telephone' => '0532 532 32 32',
            'birthday' => '01.01.2001',
            'livecity' => 'Ankara',
            'about' => 'Aslen memleketi Kahramanmaraş olan Dr.Ali ARSLAN, 1970 yılında hakim olan babasının görevi sebebiyle Elazığ’da doğmuştur.Orta ve lise eğitimini İstanbul’da tamamlayan Dr.Kalaycı ; 1988-1994 yılları arasında tıp eğitimini Bursa Uludağ Tıp Fakültesinde almıştır.',
            'created_at' => date("Y-m-d H:i:s") ,
            'updated_at' => date("Y-m-d H:i:s") ,

            ]);

    }
}
