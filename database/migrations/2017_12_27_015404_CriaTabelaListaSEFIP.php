<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriaTabelaListaSEFIP extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_lista_sefip', function (Blueprint $table) {
          $table->increments('id_lista_sefip');
       $table->integer('sefip_codigo')->nullable();
       $table->string('sefip_nome', 255)->nullable();

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
        Schema::dropIfExists('tb_lista__sefip');
    }
}
