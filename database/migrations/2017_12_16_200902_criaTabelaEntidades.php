<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriaTabelaEntidades extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_entidade', function (Blueprint $table) {
            $table->increments('id');
            $table->biginteger('codigo')->nullable()->default(null);
            $table->string('nome')->nullable()->default(null);
            $table->string('identificador')->nullable()->default(null);
            $table->string('tipo_identificador')->nullable()->default(null);
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
        Schema::dropIfExists('tb_entidade');
    }
}
