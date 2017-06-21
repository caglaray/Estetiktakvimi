<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCorpDocTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('corp_doc', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('docid')->unsigned();
            $table->foreign('docid')->references('id')->on('doctors')->onDelete('cascade');
            $table->integer('corpid')->unsigned();
            $table->foreign('corpid')->references('id')->on('corporations')->onDelete('cascade');
    
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('corp_doc');
    }
}
