<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriaTabelaEnderecos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_conf_endereco', function (Blueprint $table) {
            $table->increments('id_endereco');
            $table->string('endereco_cep')->nullable()->default(null);
            $table->string('endereco_logradouro')->nullable()->default(null);
            $table->string('endereco_numero')->nullable()->default(null);
            $table->string('endereco_complemento')->nullable()->default(null);
            $table->string('endereco_bairro')->nullable()->default(null);
            $table->integer('fk_cidade')->unsigned();
            $table->integer('fk_uf')->unsigned();
            $table->integer('fk_entidade')->unsigned();
            $table->integer('fk_usuario')->unsigned();
            $table->foreign('fk_cidade')->references('id_cidades')->on('tb_cidades');
            $table->foreign('fk_uf')->references('id_uf')->on('tb_conf_uf');
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
        Schema::dropIfExists('tb_conf_endereco');
    }
}
