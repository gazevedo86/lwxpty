<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriaTabelaListaBancos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_lista_bancos', function (Blueprint $table) {
          $table->increments('id_lista_banco');
      $table->integer('bancos_codigo')->nullable();
      $table->string('bancos_nome', 255)->nullable();

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
        Schema::dropIfExists('tb_lista_bancos');
    }
}
