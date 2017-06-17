<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCorporationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('corporations', function (Blueprint $table) {
            $table->increments('id');
            $table->tinyInteger('group_id')->default(0);
            $table->string('name',100);
            $table->text('adress');
            $table->string('logo');
            $table->string('telephone',30);
            $table->string('email',100)->unique();
            $table->string('city',60);
            $table->string('username',100)->unique();
            $table->string('password');
            $table->tinyInteger('status')->default(0);
            $table->tinyInteger('doc_capacity')->default(0);
            $table->tinyInteger('adding')->default(0);
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
        Schema::dropIfExists('corporations');
    }
}
