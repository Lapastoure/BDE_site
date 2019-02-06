<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Manifestations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('manifestations', function (Blueprint $table) {

            $table->engine = 'InnoDB';

            $table->increments('id')->unsigned();
            $table->string('label', 30);
            $table->float('price');
            $table->string('description', 500);
            $table->dateTime('date');
            $table->string('image_url', 500);
            $table->integer('id_periodicity')->unsigned();
            $table->integer('id_users')->unsigned();
            $table->integer('id_locations')->unsigned()->nullable();


            $table->foreign('id_periodicity')
                ->references('id')->on('periodicity');

            $table->foreign('id_users')
                ->references('id')->on('users');

            $table->foreign('id_locations')
                ->references('id')->on('locations');

        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('manifestations');

    }
}