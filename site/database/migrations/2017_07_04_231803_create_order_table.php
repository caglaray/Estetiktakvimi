<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order', function (Blueprint $table) {
            $table->increments('id');
            $table->string('customername');
            $table->string('customeradress');
            $table->string('customerphone');
            $table->Integer('corpid')->unsigned()->nullable();
            $table->foreign('corpid')->references('id')->on('corporations');
            $table->Integer('docid')->unsigned()->nullable();
            $table->foreign('docid')->references('id')->on('doctors');
            $table->Integer('productid')->unsigned()->nullable();
            $table->foreign('productid')->references('id')->on('corp_product');
            $table->Integer('optionsid')->unsigned()->nullable();
            $table->foreign('optionsid')->references('id')->on('corp_product_options');
            $table->decimal('total', 15, 2);
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
        Schema::dropIfExists('order');
    }
}
