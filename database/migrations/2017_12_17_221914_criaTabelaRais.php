<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriaTabelaRais extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_conf_rais', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('fk_ativ_economica')->unsigned();
            $table->integer('fk_cidade')->unsigned();
            $table->integer('qtd_proprietarios')->nullable()->default(null);
            $table->foreign('fk_ativ_economica')->references('id')->on('tb_ativ_economica');
            $table->foreign('fk_cidade')->references('id')->on('tb_conf_cidade');

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
        Schema::dropIfExists('tb_conf_rais');
    }
}
