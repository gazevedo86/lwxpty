<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriaTabelaConfMensagens extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_conf_mensagens', function (Blueprint $table) {
          $table->increments('id_mensagens');
       $table->string('mensagens_holerite', 255)->nullable();
       $table->string('mensagens_aniversario', 255)->nullable();
       $table->string('mensagens_cesta_basica', 255)->nullable();
       $table->string('mensagens_rodape_relatorios', 255)->nullable();
       $table->integer('fk_entidade')->unsigned();
       $table->integer('fk_usuario')->unsigned();

       $table->index('fk_usuario','fk_tb_conf_mensagens_users1_idx');
       $table->index('fk_entidade','fk_tb_conf_mensagens_tb_entidade1_idx');

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
        Schema::dropIfExists('tb_conf_mensagens');
    }
}
