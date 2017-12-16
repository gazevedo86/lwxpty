<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriaTabelaConfiguracoesGerais extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_configuracoes_gerais', function (Blueprint $table) {
            $table->increments('id');
            $table->integer("fk_entidade")->unsigned();
            $table->integer("fk_opcoes_gerais")->unsigned();
            $table->string("valor")->nullable()->default(null);
            $table->foreign("fk_entidade")->refences("id")->on("tb_entidade")->onDelete("cascade");
            $table->foreign("fk_opcoes_gerais")->refences("id")->on("tb_opcoes_gerais")->onDelete("cascade");
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
        Schema::dropIfExists('tb_configuracoes_gerais');
    }
}
