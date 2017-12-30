<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriaTabelaConfOpcoesGerais extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_conf_opcoes_gerais', function (Blueprint $table) {
          $table->increments('id_opcoes_gerais');
		    $table->string('opcoes_gerais_evento_teto')->nullable();
		    $table->string('opcoes_gerais_ordem', 45)->nullable();
		    $table->string('opcoes_gerais_tipo_exclusao', 255)->nullable();
		    $table->string('opcoes_gerais_ordem_evento', 255)->nullable();
		    $table->integer('fk_febraban_eventos')->unsigned();
		    $table->integer('opcoes_gerais_controle_diario')->nullable();
		    $table->integer('opcoes_gerais_renovar_13')->nullable();
		    $table->integer('opcoes_gerais_informar_unidade_orcamentaria')->nullable();
		    $table->integer('opcoes_gerais_controlar_vagas')->nullable();
		    $table->integer('opcoes_gerais_inserir_pdf')->nullable();
		    $table->integer('opcoes_gerais_relacionar_atividade')->nullable();
		    $table->integer('opcoes_gerais_filtrar_salarios')->nullable();
		    $table->integer('opcoes_gerais_expandir_capacidade')->nullable();
		    $table->integer('opcoes_gerais_grade_automatica')->nullable();
		    $table->integer('opcoes_gerais_faltas_injustificadas')->nullable();
		    $table->integer('opcoes_gerais_faltas_justificadas')->nullable();
		    $table->integer('opcoes_gerais_faltas_abonadas')->nullable();
		    $table->integer('opcoes_gerais_suspensao')->nullable();
		    $table->integer('fk_entidade')->unsigned();
		    $table->integer('fk_usuario')->unsigned();

		    $table->index('fk_febraban_eventos','fk_tb_conf_opcoes_gerais_tb_febraban_eventos1_idx');
		    $table->index('fk_entidade','fk_tb_conf_opcoes_gerais_tb_entidade1_idx');
		    $table->index('fk_usuario','fk_tb_conf_opcoes_gerais_users1_idx');

		    $table->foreign('fk_febraban_eventos')
		        ->references('id_febraban')->on('tb_febraban_eventos');

		    $table->foreign('fk_entidade')
		        ->references('id_entidade')->on('tb_entidade');

		    $table->foreign('fk_usuario')
		        ->references('id')->on('users');

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
        Schema::dropIfExists('tb_conf_opcoes_gerais');
    }
}
