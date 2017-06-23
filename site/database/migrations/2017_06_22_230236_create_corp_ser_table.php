<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCorpSerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('corp_ser', function (Blueprint $table) {
           $table->increments('id');
           $table->integer('corpid')->unsigned();
           $table->foreign('corpid')->references('id')->on('corporations')->onDelete('cascade');
           $table->integer('servicesid')->unsigned();
           $table->foreign('servicesid')->references('id')->on('services')->onDelete('cascade');
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
        Schema::dropIfExists('corp_ser');
    }
}
