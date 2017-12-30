<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriaTabelaConfFGTS extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_conf_fgts', function (Blueprint $table) {
          $table->increments('id_fgts');
		    $table->string('fgts_simples', 255)->nullable();
		    $table->decimal('fgts_contrib_social', 8, 2)->nullable();
		    $table->string('fgts_agencia', 45)->nullable();
		    $table->string('fgts_conta', 45)->nullable();
		    $table->integer('fk_bancos')->unsigned()->nullable();
		    $table->string('fgts_tipo', 255)->nullable();
		    $table->integer('fgts_informar_empresa_sefip')->nullable();
		    $table->string('fgts_codigo_empresa', 255)->nullable();
		    $table->string('fgts_contato', 255)->nullable();
		    $table->integer('fk_entidade')->unsigned()->nullable();
		    $table->integer('fk_usuario')->unsigned()->nullable();

		    $table->index('fk_bancos','fk_tb_conf_fgts_tb_bancos_idx');
		    $table->index('fk_usuario','fk_tb_conf_fgts_users1_idx');
		    $table->index('fk_entidade','fk_tb_conf_fgts_tb_entidade1_idx');

		    $table->foreign('fk_bancos')
		        ->references('id_lista_banco')->on('tb_lista_bancos');

		    $table->foreign('fk_usuario')
		        ->references('id')->on('users');

		    $table->foreign('fk_entidade')
		        ->references('id_entidade')->on('tb_entidade');

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
        Schema::dropIfExists('tb_conf_fgts');
    }
}
