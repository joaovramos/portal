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

    <h1>Cadastrar Empresa</h1>

@endsection

@section('content')

<form method="post" action="{{ action('EmpresaController@store')}}">
    <div class="form-group">
        <label for="nome">Nome Empresa</label>
        <input type="nome" name="nome" class="form-control" id="nome" placeholder="Nome Empresa">
    </div>
    <div class="form-group">
        <label for="cnpj">CNPJ</label>
        <input type="cnpj" name="cnpj" class="form-control" id="cnpj" placeholder="CNPJ">
    </div>

    <div>
        <button type="submit" onclick="window.location='{{ route("empresa.index") }}'" class="btn btn-default">Voltar</button>
        <button type="submit" class="btn btn-default">Cadastrar</button>
    </div>

    {{ csrf_field() }}
</form>

@endsection