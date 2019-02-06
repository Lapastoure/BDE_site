<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UsersManifestationsInscribe extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('isersmanifestationsinscribe', function (Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->increments('id')->unsigned();
            $table->integer('id_manifestations')->unsigned();
            $table->integer('id_users')->unsigned();

            $table->foreign('id_manifestations')
                ->references('id')->on('manifestations');

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
        Schema::dropIfExists('usersmanifestationsinscribe');

    }
}