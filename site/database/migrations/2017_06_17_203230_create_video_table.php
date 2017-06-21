<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVideoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('video', function (Blueprint $table) {

            $table->increments('id');
            $table->string('name');
            $table->text('url');
            $table->integer('order')->default(0);
            $table->integer('doctorid')->unsigned()->nullable();
            $table->foreign('doctorid')->references('id')->on('doctors')->onDelete('cascade');
            $table->integer('corporationsid')->unsigned()->nullable();
            $table->foreign('corporationsid')->references('id')->on('corporations')->onDelete('cascade');
            $table->tinyInteger('status')->default(0);
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
        Schema::dropIfExists('video');
    }
}
