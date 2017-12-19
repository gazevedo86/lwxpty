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
            $table->integer("discriminar_eventos_folha")->unsigned();
            $table->integer("comparar_apenas_eventos")->unsigned();
            $table->string("tipo_folha_complementar")->nullable()->default(null);
            $table->string("considerar_salario")->nullable()->default(null);
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
