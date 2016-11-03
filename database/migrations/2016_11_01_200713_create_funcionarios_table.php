<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFuncionariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('indicador.funcionarios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome', 100);
            $table->bigInteger('cpf');
            $table->bigInteger('rg');
            $table->bigInteger('id_empresa');
            $table->bigInteger('id_setor');
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::table('indicador.funcionarios',function (Blueprint $table){
            $table->foreign('id_empresa')->references('id')->on('indicador.empresas');
            $table->foreign('id_setor')->references('id')->on('indicador.setores');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('funcionarios');
    }
}
