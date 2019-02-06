<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UsersManifestationsReport extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('usersmanifestationsreport', function (Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->increments('id')->unsigned();
            $table->integer('id_users')->unsigned();
            $table->integer('id_manifestations')->unsigned();

            $table->foreign('id_users')
                ->references('id')->on('users');

            $table->foreign('id_manifestations')
                ->references('id')->on('manifestations');

        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usersmanifestationsreport');

    }
}