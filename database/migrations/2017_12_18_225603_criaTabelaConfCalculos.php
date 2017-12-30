<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriaTabelaConfCalculos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_conf_calculos', function (Blueprint $table) {
            $table->increments('id_calculos');
            $table->integer("calculos_mudar_referencia_salario_automatica")->nullable()->default(null);
            $table->integer("calculos_mudar_referencia_salario_tempo")->nullable()->default(null);
            $table->integer("calculos_mudar_referencia_salario_carencia")->nullable()->default(null);
            $table->decimal("calculos_salario_minimo_nacional",8,2)->nullable()->default(null);
            $table->decimal("calculos_salario_minimo_municipal",8,2)->nullable()->default(null);
            $table->decimal("calculos_base_calculo_prefeito_vice",8,2)->nullable()->default(null);
            $table->decimal("calculos_base_calculo_presidente_vereador",8,2)->nullable()->default(null);
            $table->string("calculos_convenio_medico_data_controle")->nullable()->default(null);
            $table->string("calculos_convenio_medico_dia_controle")->nullable()->default(null);
            $table->string("calculos_frequencia_dia_inicial")->nullable()->default(null);
            $table->string("calculos_frequencia_dia_final")->nullable()->default(null);
            $table->decimal("calculos_vale_transporte",8,2)->nullable()->default(null);
            $table->string("calculos_tempo_servico_data_controle")->nullable()->default(null);
            $table->string("calculos_dsr_data_controle")->nullable()->default(null);

            $table->integer("calculos_descontar_irrf")->nullable()->default(null);
            $table->integer("calculos_permitir_holerite_negativo")->nullable()->default(null);
            $table->integer("calculos_gerar_adiantamento_mensal_admitidos_mes")->nullable()->default(null);
            $table->integer("calculos_pagar_avos_afastamento")->nullable()->default(null);
            $table->integer("calculos_cnae_preponderante")->nullable()->default(null);
            $table->integer("calculos_hora_salarial")->nullable()->default(null);
            $table->integer("calculos_afastamentos_anteriores")->nullable()->default(null);
            $table->integer("calculos_bloquear_gravacao_calcular")->nullable()->default(null);
            $table->integer("calculos_gerar_adiantamento_mensal_servidores")->nullable()->default(null);
            $table->integer('fk_usuario')->unsigned();
            $table->integer('fk_entidade')->unsigned();
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
        Schema::dropIfExists('tb_conf_calculos');
    }
}
