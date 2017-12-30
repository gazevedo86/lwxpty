<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriaTabelaConfPrevidencia extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_conf_previdencia', function (Blueprint $table) {
          $table->increments('id_previdencia');
     $table->integer('previdencia_incidencia_patronal')->nullable();
     $table->integer('fk_lista_sefip')->unsigned();
     $table->integer('fk_lista_gps')->unsigned();
     $table->integer('fk_entidade')->unsigned();
     $table->integer('fk_usuario')->unsigned();

     $table->index('fk_lista_sefip','fk_tb_conf_previdencia_lista_sefip1_idx');
     $table->index('fk_lista_gps','fk_tb_conf_previdencia_lista_gps1_idx');
     $table->index('fk_entidade','fk_tb_conf_previdencia_tb_entidade1_idx');
     $table->index('fk_usuario','fk_tb_conf_previdencia_users1_idx');

     $table->foreign('fk_lista_sefip')
         ->references('id_lista_sefip')->on('tb_lista_sefip');

     $table->foreign('fk_lista_gps')
         ->references('id_lista_gps')->on('tb_lista_gps');

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
        Schema::dropIfExists('tb_conf_previdencia');
    }
}
