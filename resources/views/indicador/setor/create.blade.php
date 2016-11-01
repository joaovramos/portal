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

    <h1>Cadastrar Setor</h1>

@endsection

@section('content')

    <form method="post" action="{{ action('SetorController@store')}}">
        <div class="form-group">
            <label for="nome">Nome Setor</label>
            <input type="nome" name="nome" class="form-control" id="nome" placeholder="Nome Setor">
        </div>

        <div class="form-group">
            <label for="cnpj">Empresa</label>

            <div class="dropdown">
                <button class="btn btn-default dropdown-toggle" name="id_empresa" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                    Empresa
                    <span class="caret"></span>
                </button>

                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">

                    <li><a nome="id">Nome das empresas</a></li>

                </ul>
            </div>
        </div>

        <div>
            <button type="submit" onclick="window.location='{{ route("setor") }}'" class="btn btn-default">Voltar</button>
            <button type="submit" class="btn btn-default">Cadastrar</button>
        </div>

        {{ csrf_field() }}
    </form>

@endsection