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
            $table->increments('id_ferias');

            $table->string("ferias_tipo_pagamento")->nullable()->default(null);

            $table->integer('fk_usuario')->unsigned();
            $table->integer('fk_entidade')->unsigned();
            $table->foreign('fk_entidade')->references('id_entidade')->on('tb_entidade');
            $table->foreign('fk_usuario')->references('id')->on('users');

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
