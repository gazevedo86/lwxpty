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
            $table->increments('id');
            $table->string('cep')->nullable()->default(null);
            $table->string('logradouro')->nullable()->default(null);
            $table->string('numero')->nullable()->default(null);
            $table->string('complemento')->nullable()->default(null);
            $table->string('bairro')->nullable()->default(null);
            $table->integer('fk_cidade')->unsigned();
            $table->integer('fk_uf')->unsigned();
            $table->integer('fk_entidade')->unsigned();
            $table->integer('fk_usuario')->unsigned();
            $table->foreign('fk_cidade')->references('id')->on('tb_conf_cidade');
            $table->foreign('fk_uf')->references('id')->on('tb_conf_uf');
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
        Schema::dropIfExists('tb_conf_endereco');
    }
}
