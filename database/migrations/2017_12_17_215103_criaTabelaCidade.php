<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriaTabelaCidade extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_cidades', function (Blueprint $table) {
            $table->increments('id_cidades');
            $table->biginteger('codigo')->nullable()->default(null);
            $table->string('nome');
            $table->integer('fk_uf')->unsigned();
            $table->foreign('fk_uf')->references('id_uf')->on('tb_conf_uf')->onDelete('cascade');
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
        Schema::dropIfExists('tb_cidades');
    }
}
