<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriaTabelaConf13Salario extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_conf_13salario', function (Blueprint $table) {
            $table->increments('id');
            $table->integer("acumular_13_salario_unico_evento")->nullable()->default(null);
            $table->integer("divisor_13_salario")->nullable()->default(null);
            $table->integer("calcular_media_fechamento")->nullable()->default(null);
            $table->integer("incluir_eventuais_lancados_mensal")->nullable()->default(null);

            $table->string("tipo_media")->nullable()->default(null);

            $table->integer("calcular_media_adiantamento")->nullable()->default(null);
            $table->integer("porcentagem_adiantamento")->nullable()->default(null);
            $table->integer("calcular_remanescente")->nullable()->default(null);
            $table->string("mes_para_calculo")->nullable()->default(null);

            $table->string("complemento_13_salario_tipo")->nullable()->default(null);
            $table->string("complemento_13_salario_tipo2")->nullable()->default(null);
            $table->string("complemento_13_salario_demonstrar")->nullable()->default(null);
            $table->decimal("complemento_13_salario_nao_paga_valor_inferior",8,2)->nullable()->default(null);

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
        Schema::dropIfExists('tb_conf_13salario');
    }
}
