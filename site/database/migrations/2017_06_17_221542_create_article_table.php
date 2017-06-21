<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('article', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->text('content');
            $table->integer('order')->default(0);
            $table->integer('doctorid')->unsigned()->nullable();
            $table->foreign('doctorid')->references('id')->on('doctors')->onDelete('cascade');
            $table->integer('corporationsid')->unsigned()->nullable();
            $table->foreign('corporationsid')->references('id')->on('corporations')->onDelete('cascade');
            $table->tinyInteger('status')->default(0);
            $table->string('image')->nullable();
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
        Schema::dropIfExists('article');
    }
}
