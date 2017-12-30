<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriaTabelaListaGPS extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_lista_gps', function (Blueprint $table) {
          $table->increments('id_lista_gps');
       $table->integer('gps_codigo')->nullable();
       $table->string('gps_nome', 255)->nullable();

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
        Schema::dropIfExists('tb_lista_gps');
    }
}
