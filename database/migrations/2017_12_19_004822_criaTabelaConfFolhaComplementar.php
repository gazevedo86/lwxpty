<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriaTabelaConfFolhaComplementar extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_conf_folha_complementar', function (Blueprint $table) {
            $table->increments('id');
            $table->integer("folha_complementar_discriminar_eventos")->nullable()->default(null);;
            $table->integer("folha_complementar_comparar_eventos")->nullable()->default(null);;
            $table->string("folha_complementar_tipo")->nullable()->default(null);
            $table->string("folha_complementar_considerar_salario")->nullable()->default(null);
            $table->integer('fk_usuario')->unsigned();
            $table->integer('fk_entidade')->unsigned();
            $table->foreign('fk_entidade')->references('id')->on('tb_entidade');
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
        Schema::dropIfExists('tb_conf_folha_complementar');
    }
}
