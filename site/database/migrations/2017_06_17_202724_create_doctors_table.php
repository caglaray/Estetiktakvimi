<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDoctorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctors', function (Blueprint $table) {
            $table->increments('id');
            $table->tinyInteger('group_id')->default(0);
            $table->string('username',20)->unique();
            $table->string('password',100);
            $table->string('name',35);
            $table->string('surname',50);
            $table->string('email',100)->unique();
            $table->string('image');
            $table->tinyInteger('status')->default(0);
            $table->text('adress');
            $table->string('telephone',30);
            $table->string('birthday',50);
            $table->string('livecity');
            $table->text('about');
            $table->Integer('point_result')->default(0);
            $table->Integer('docdegrees')->unsigned()->nullable();
            $table->foreign('docdegrees')->references('id')->on('doc_degree');

            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('doctors');
    }
}
