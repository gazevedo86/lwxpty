<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriaTabelaConfFerias extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_conf_ferias', function (Blueprint $table) {
            $table->increments('id');

            $table->string("tipo_pagamento_ferias")->nullable()->default(null);

            $table->integer('fk_users')->unsigned();
            $table->integer('fk_entidade')->unsigned();
            $table->foreign('fk_entidade')->references('id')->on('tb_entidade');
            $table->foreign('fk_users')->references('id')->on('users');

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
        Schema::dropIfExists('tb_conf_ferias');
    }
}