<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAwardsDocTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('awards_doc', function (Blueprint $table) {
           $table->increments('id');
           $table->string('awards_name');
           $table->string('start',10);
           $table->integer('doctorid')->unsigned();
           $table->foreign('doctorid')->references('id')->on('doctors')->onDelete('cascade');
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
        Schema::dropIfExists('awards_doc');
    }
}
