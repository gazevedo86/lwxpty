<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriaTabelaOpcoesGerais extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_opcoes_gerais', function (Blueprint $table) {
            $table->increments('id');
            $table->string("area")->nullable()->default(null);
            $table->string("sub_area")->nullable()->default(null);
            $table->string("nome")->nullable()->default(null);
            $table->string("descricao")->nullable()->default(null);
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
        Schema::dropIfExists('tb_opcoes_gerais');
    }
}
