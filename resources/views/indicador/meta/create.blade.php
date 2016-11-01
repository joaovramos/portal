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

    <h1>Cadastrar Meta</h1>

@endsection

@section('content')

<form method="post" action="{{ action('EmpresaController@store')}}">
    <div class="form-group">
        <label for="nome">Nome</label>
        <input type="nome" name="nome" class="form-control" id="nome" placeholder="Nome da Meta">
    </div>
    <div class="form-group">
        <label for="indicador">Indicador</label>
        <input type="indicador" name="indicador" class="form-control" id="indicador" placeholder="Indicador">
    </div>

    <div class="form-group">
        <label for="meta">Meta</label>
        <input type="meta" name="meta" class="form-control" id="meta" placeholder="Meta">
    </div>
    <div class="form-group">
        <label for="medicao">Medicao</label>
        <input type="medicao" name="medicao" class="form-control" id="medicao" placeholder="Medicao">
    </div>
    <div class="form-group">
        <label for="peso">Peso</label>
        <input type="peso" name="peso" class="form-control" id="peso" placeholder="Peso">
    </div>
    <div class="form-group">
        <div class="dropdown">
            <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Departamento<span class="caret"></span></button>
            <ul class="dropdown-menu">
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
            </ul>

        </div>
    </div>

    <div>
        <button type="submit" onclick="window.location='{{ route("empresa.index") }}'" class="btn btn-default">Voltar</button>
        <button type="submit" class="btn btn-default">Cadastrar</button>
    </div>

    {{ csrf_field() }}
</form>

@endsection