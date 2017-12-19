<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriaTabelaConfAssinaturas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_conf_assinaturas', function (Blueprint $table) {
            $table->increments('id');
            $table->string("nome_assinatura")->nullable()->default(null);
            $table->string("descricao_cargo")->nullable()->default(null);
            $table->binary("assinatura_digitalizada")->nullable()->default(null);
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
        Schema::dropIfExists('tb_conf_assinaturas');
    }
}
