<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriaTabelaConfOutrasInformacoes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_conf_outras_informacoes', function (Blueprint $table) {
          $table->increments('id');
      $table->binary('outras_informacoes_imagem')->nullable();
      $table->string('outras_informacoes_telefone', 45)->nullable();
      $table->string('outras_informacoes_email', 255)->nullable();
      $table->string('outras_informacoes_fax', 255)->nullable();
      $table->string('outras_informacoes_site', 255)->nullable();
      $table->date('outras_informacoes_data')->nullable();
      $table->string('outras_informacoes_nome_abreviado', 255)->nullable();
      $table->string('outras_informacoes_tipo', 255)->nullable();
      $table->integer('fk_entidade')->unsigned();
      $table->integer('fk_usuario')->unsigned();

      $table->index('fk_entidade','fk_tb_conf_outras_informacoes_tb_entidade1_idx');
      $table->index('fk_usuario','fk_tb_conf_outras_informacoes_users1_idx');

      $table->foreign('fk_entidade')
          ->references('id')->on('tb_entidade');

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
        Schema::dropIfExists('tb_conf_outras_informacoes');
    }
}
