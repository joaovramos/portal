<?php
/**
 * Created by PhpStorm.
 * User: joao.ramos
 * Date: 19/10/2016
 * Time: 13:01
 */
?>

@extends('template.principal')

@section('pageName')

    <h1>Detalhamento Empresa</h1>

@endsection

@section('content')

    <div class="row">
        <div class="col-md-12">
            Empresa: {{ $empresa->nome }}
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            CNPJ: {{ $empresa->cnpj }}
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <a class="btn btn-primary" href="{{ action('EmpresaController@index') }}" role="button">
                Voltar
            </a>
        </div>
    </div>

@endsection