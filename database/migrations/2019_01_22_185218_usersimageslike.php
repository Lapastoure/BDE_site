<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UsersImagesLike extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
Schema::create('usersimageslike', function (Blueprint $table) {
    $table->engine = 'InnoDB';

    $table->increments('id')->unsigned();
    $table->integer('id_images')->unsigned();
    $table->integer('id_users')->unsigned();

    $table->foreign('id_images')
        ->references('id')->on('images');

    $table->foreign('id_users')
        ->references('id')->on('users');

});


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usersimageslike');

    }
}
