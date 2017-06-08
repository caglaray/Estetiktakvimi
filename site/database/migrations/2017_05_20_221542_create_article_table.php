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
            $table->integer('doctorid')->unsigned();
            $table->foreign('doctorid')->references('id')->on('doctors')->onDelete('cascade');
            $table->string('status');
            $table->text('resim');
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
