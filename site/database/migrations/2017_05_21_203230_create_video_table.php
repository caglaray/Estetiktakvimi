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
            $table->integer('order');
            $table->integer('doctorid')->unsigned();
            $table->foreign('doctorid')->references('id')->on('doctors')->onDelete('cascade');
            $table->integer('status');
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
