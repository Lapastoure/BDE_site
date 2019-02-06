<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Locations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('locations', function (Blueprint $table) {
    $table->engine = 'InnoDB';

    $table->increments('id')->unsigned();
    $table->string('longitude', 30);
    $table->string('latitude', 30);

});


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('locations');

    }
}
