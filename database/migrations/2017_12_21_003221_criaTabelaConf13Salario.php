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
            $table->integer("13salario_acumular_unico_evento")->nullable()->default(null);
            $table->integer("13salario_divisor")->nullable()->default(null);
            $table->integer("13salario_calcular_media_fechamento")->nullable()->default(null);
            $table->integer("13salario_incluir_eventuais_lancados_mensal")->nullable()->default(null);

            $table->string("13salario_tipo_media")->nullable()->default(null);

            $table->integer("13salario_calcular_media_adiantamento")->nullable()->default(null);
            $table->integer("13salario_porcentagem_adiantamento")->nullable()->default(null);
            $table->integer("13salario_calcular_remanescente")->nullable()->default(null);
            $table->string("13salario_mes_para_calculo")->nullable()->default(null);

            $table->string("13salario_complemento_tipo")->nullable()->default(null);
            $table->string("13salario_complemento_tipo2")->nullable()->default(null);
            $table->string("13salario_complemento_demonstrar")->nullable()->default(null);
            $table->decimal("13salario_complemento_nao_paga_valor_inferior",8,2)->nullable()->default(null);

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
