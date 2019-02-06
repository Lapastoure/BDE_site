<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ProductsOrders extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productsorders', function (Blueprint $table) {
            $table->engine = 'InnoDB';

    $table->increments('id')->unsigned();
    $table->integer('id_products')->unsigned();
    $table->integer('id_orders')->unsigned();
    $table->integer('quantity');

    $table->foreign('id_products')
        ->references('id')->on('products');

    $table->foreign('id_orders')
        ->references('id')->on('orders');

});


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productsorders');

    }
}