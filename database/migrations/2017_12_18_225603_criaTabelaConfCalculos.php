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
            $table->increments('id');
            $table->integer("mudar_referencia_salario_automatica")->unsigned();
            $table->integer("muda_referencia_salario_tempo")->unsigned();
            $table->integer("muda_referencia_salario_carencia")->unsigned();
            $table->decimal("salario_minimo_nacional",8,2)->nullable()->default(null);
            $table->decimal("salario_minimo_municipal",8,2)->nullable()->default(null);
            $table->decimal("base_calculo_prefeito_vice",8,2)->nullable()->default(null);
            $table->decimal("base_calculo_presidente_vereador",8,2)->nullable()->default(null);
            $table->string("convenio_medico_data_controle")->nullable()->default(null);
            $table->string("convenio_medico_dia_controle")->nullable()->default(null);
            $table->string("frequencia_dia_inicial")->nullable()->default(null);
            $table->string("frequencia_dia_final")->nullable()->default(null);
            $table->decimal("vale_transporte",8,2)->nullable()->default(null);
            $table->string("tempo_servico_data_controle")->nullable()->default(null);
            $table->string("dsr_data_controle")->nullable()->default(null);

            $table->integer("descontar_irrf")->unsigned();
            $table->integer("permitir_holerite_negativo")->unsigned();
            $table->integer("gerar_adiantamento_mensal_admitidos_mes")->unsigned();
            $table->integer("pagar_avos_afastamento")->unsigned();
            $table->integer("calcular_cnae_preponderante")->unsigned();
            $table->integer("calcular_hora_salarial")->unsigned();
            $table->integer("abater_afastamentos_anteriores")->unsigned();
            $table->integer("bloquear_gravacao_calcular")->unsigned();
            $table->integer("gerar_adiantamento_mensal_servidores")->unsigned();




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
