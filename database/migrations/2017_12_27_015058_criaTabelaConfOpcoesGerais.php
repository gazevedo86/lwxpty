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
          $table->increments('id');
		    $table->integer('opcoes_gerais_evento_teto')->nullable();
		    $table->string('opcoes_gerais_ordem', 45)->nullable();
		    $table->string('opcoes_gerais_tipo_exclusao', 255)->nullable();
		    $table->string('opcoes_gerais_ordem_evento', 255)->nullable();
		    $table->integer('fk_febraban_eventos')->unsigned();
		    $table->integer('opcoes_gerais_controle_diario')->nullable();
		    $table->integer('opcoes_gerais_renovar_13')->nullable();
		    $table->integer('opcoes_gerais_informar_unidade_orcamentaria')->nullable();
		    $table->integer('opcoes_gerais_controlar_vaga')->nullable();
		    $table->integer('opcoes_gerais_inserir_pdf')->nullable();
		    $table->integer('opcoes_gerais_relacionar_atividade')->nullable();
		    $table->integer('opcoes_gerais_filtrar_salarios')->nullable();
		    $table->integer('opcoes_gerais_expandir_capacidade')->nullable();
		    $table->integer('opcoes_gerais_grade_automatica')->nullable();
		    $table->integer('opcoes_gerais_falta_injustificada')->nullable();
		    $table->integer('opcoes_gerais_falta_justificada')->nullable();
		    $table->integer('opcoes_gerais_falta_abonada')->nullable();
		    $table->integer('opcoes_gerais_suspensao')->nullable();
		    $table->integer('fk_entidade')->unsigned();
		    $table->integer('fk_users')->unsigned();

		    $table->index('fk_febraban_eventos','fk_tb_conf_opcoes_gerais_tb_febraban_eventos1_idx');
		    $table->index('fk_entidade','fk_tb_conf_opcoes_gerais_tb_entidade1_idx');
		    $table->index('fk_users','fk_tb_conf_opcoes_gerais_users1_idx');

		    $table->foreign('fk_febraban_eventos')
		        ->references('id')->on('tb_febraban_eventos');

		    $table->foreign('fk_entidade')
		        ->references('id')->on('tb_entidade');

		    $table->foreign('fk_users')
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
