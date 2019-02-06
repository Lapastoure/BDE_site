<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Products extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->increments('id')->unsigned();
            $table->string('label', 30);
            $table->float('price');
            $table->string('description', 500);
            $table->integer('quantity');
            $table->string('image_url', 500);
            $table->integer('id_productstypes')->unsigned();

            $table->foreign('id_productstypes')
                ->references('id')->on('productstypes');

        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');

    }
}