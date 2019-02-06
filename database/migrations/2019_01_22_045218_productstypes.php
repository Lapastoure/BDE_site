<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ProductsTypes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
Schema::create('productstypes', function (Blueprint $table) {
    $table->engine = 'InnoDB';

    $table->increments('id')->unsigned();
    $table->string('label', 30);

});


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        
Schema::dropIfExists('productstypes');

    }
}
