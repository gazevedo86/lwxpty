<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriaTabelaConfLicencaPremio extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_conf_licenca_premio', function (Blueprint $table) {
          $table->increments('id');
       $table->integer('licenca_premio_calcular_media')->nullable();
       $table->integer('licenca_premio_controla_data_pagamento')->nullable();
       $table->integer('licenca_premio_falta_injustificada')->nullable();
       $table->integer('licenca_premio_justificada')->nullable();
       $table->integer('licenca_premio_falta_abonada')->nullable();
       $table->integer('fk_entidade')->unsigned();
       $table->integer('fk_users')->unsigned();

       $table->index('fk_entidade','fk_tb_licenca_premio_tb_entidade1_idx');
       $table->index('fk_users','fk_tb_licenca_premio_users1_idx');

       $table->foreign('fk_entidade')
           ->references('id')->on('tb_entidade');

       $table->foreign('fk_users')
           ->references('id')->on('users');

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
        Schema::dropIfExists('tb_conf_licenca_premium');
    }
}
