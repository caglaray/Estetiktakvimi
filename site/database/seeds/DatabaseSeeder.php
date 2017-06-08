<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
  
        $this->call(AdminsTableSeeder::class);
        $this->call(CorporationsTableSeeder::class);
        
        $this->call(DoctorsTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(ArticleTableSeeder::class);
        $this->call(VideoTableSeeder::class);
        $this->call(QuestionTableSeeder::class);

    }
}
