<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriaTabelaAtividadeEconomica extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_ativ_economica', function (Blueprint $table) {
            $table->increments('id');
            $table->biginteger('codigo')->nullable()->default(null);
            $table->string('nome')->nullable()->default(null);
            $table->decimal('grau_risco',3,2)->nullable()->default(null);

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
        Schema::dropIfExists('tb_ativ_economica');
    }
}
