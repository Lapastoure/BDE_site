<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Orders extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    Schema::create('orders', function (Blueprint $table) {
        $table->engine = 'InnoDB';

        $table->increments('id')->unsigned();
        $table->dateTime('date');
        $table->integer('id_orderstypes')->unsigned();

        $table->foreign('id_orderstypes')
            ->references('id')->on('orderstypes');

    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
        
    }
}
