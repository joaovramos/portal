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

    <h1>Detalhamento Setor</h1>

@endsection

@section('content')

    <div class="row">
        <div class="col-md-12">
            Setor: {{ $setor->nome }}
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            CNPJ: {{ $setor->cnpj }}
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <a class="btn btn-primary" href="{{ action('SetorController@index') }}" role="button">
                Voltar
            </a>
        </div>
    </div>

@endsection