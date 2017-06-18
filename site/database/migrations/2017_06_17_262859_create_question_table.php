<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('question', function (Blueprint $table) {

            $table->increments('id');
            $table->integer('userid')->unsigned();
            $table->foreign('userid')->references('id')->on('users');
            $table->integer('doctorid')->unsigned()->nullable();
            $table->foreign('doctorid')->references('id')->on('doctors');
            $table->integer('catid')->unsigned()->nullable();
            $table->foreign('catid')->references('id')->on('categories');
            $table->string('title');
            $table->longText('message');
            $table->integer('status')->default(0);
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
      Schema::dropIfExists('question');
  }
}
