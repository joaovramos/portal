<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Setores extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('indicador.setores', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome');
            $table->bigInteger('id_empresa');
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::table('indicador.setores', function (Blueprint $table){
            $table->foreign('id_empresa')->references('id')->on('indicador.empresas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('setores');
    }
}
