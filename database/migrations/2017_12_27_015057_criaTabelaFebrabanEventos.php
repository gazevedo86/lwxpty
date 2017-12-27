<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriaTabelaFebrabanEventos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_febraban_eventos', function (Blueprint $table) {
          $table->increments('id');
     $table->string('febraban_eventos_codigo', 255)->nullable();
     $table->string('febraban_eventos_nome', 255)->nullable();

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
        Schema::dropIfExists('tb_febraban_eventos');
    }
}
