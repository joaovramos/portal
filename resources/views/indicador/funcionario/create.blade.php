<?php
/**
 * Created by PhpStorm.
 * User: joao.ramos
 * Date: 11/10/2016
 * Time: 12:16
 */
?>

@extends('template.principal')

@section('pageName')

    <h1>Cadastro Funcionario</h1>

@endsection

@section('content')

<form method="post" action="{{ action('FuncionarioController@store')}}" >
    <div class="form-group">
        <label for="nome">Nome Funcionario</label>
        <input type="nome" name="nome" class="form-control" id="nome" placeholder="Nome Funcionario">
    </div>
    <div class="form-group">
        <label for="cpf">CPF</label>
        <input type="cpf" name="cpf" class="form-control" id="cpf" placeholder="CPF">
    </div>
    <div class="form-group">
        <label for="matricula">Matricula</label>
        <input type="matricula" name="matricula" class="form-control" id="matricula" placeholder="Matricula">
    </div>
    <div class="form-group">
        <label for="nascimento">Nascimento</label>
        <input type="nascimento" name="nascimento" class="form-control" id="nascimento" placeholder="Nascimento">
    </div>
    <div class="form-group">
        <div class="dropdown">
            <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Empresa<span class="caret"></span></button>
                <ul class="dropdown-menu">
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                </ul>

        </div>
    </div>

    <div>
        <button type="submit" onclick="window.location='{{ route("funcionario.index") }}'" class="btn btn-default">Voltar</button>
        <button type="submit" class="btn btn-default">Cadastrar</button>
    </div>

    {{ csrf_field() }}
</form>

@endsection