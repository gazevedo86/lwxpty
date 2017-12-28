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
            $table->increments('id');
            $table->integer('fk_atividade_economica')->unsigned();
            $table->integer('fk_cidades')->unsigned();
            $table->integer('qtd_proprietarios')->nullable()->default(null);
            $table->foreign('fk_atividade_economica')->references('id')->on('tb_ativ_economica');
            $table->foreign('fk_cidades')->references('id')->on('tb_cidades');

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
