<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriaTabelaRais extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_conf_rais', function (Blueprint $table) {
            $table->increments('id_rais');


            $table->integer('fk_atividade_economica')->unsigned();
            $table->integer('fk_cidades')->unsigned();
            $table->integer('qtd_proprietarios')->nullable()->default(null);
            $table->integer('fk_usuario')->unsigned();
            $table->integer('fk_entidade')->unsigned();
            $table->foreign('fk_atividade_economica')->references('id_atividade_economica')->on('tb_ativ_economica');
            $table->foreign('fk_cidades')->references('id_cidades')->on('tb_cidades');
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
        Schema::dropIfExists('tb_conf_rais');
    }
}
