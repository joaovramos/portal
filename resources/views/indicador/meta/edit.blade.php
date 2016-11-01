<?php
/**
 * Created by PhpStorm.
 * User: joao.ramos
 * Date: 18/10/2016
 * Time: 16:54
 */
?>

@extends('template.principal')

@section('pageName')

    <h1>Editar Empresa</h1>

@endsection

@section('content')

    <form method="post" action="{{ action('EmpresaController@update', $empresa->id) }}">
        <div class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" class="form-control" id="nome" placeholder="Nome da Empresa"
                   value="{{ $empresa->nome }}">
        </div>
        <div class="form-group">
            <label for="cnpj">CNPJ:</label>
            <input type="text" name="cnpj" class="form-control" id="cnpj" placeholder="CNPJ"
                   value="{{ $empresa->cnpj }}">
        </div>

        {{ csrf_field() }}

        <input type="hidden" name="_method" value="put" />

        <a class="btn btn-primary" href="{{ action('EmpresaController@index') }}" role="button">
            Voltar
        </a>
        <button type="submit" class="btn btn-primary">Atualizar</button>
    </form>

@endsection