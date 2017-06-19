<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDocSchoolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('doc_schools', function (Blueprint $table) {
        $table->increments('id');
        $table->integer('doctorid')->unsigned();
        $table->foreign('doctorid')->references('id')->on('doctors');
        $table->string('name',100);
        $table->string('education',100);
        $table->string('start',10);
        $table->string('finish',10);
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
       Schema::dropIfExists('doc_schools');
   }
}
