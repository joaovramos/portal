<?php
/**
 * Created by PhpStorm.
 * User: joao.ramos
 * Date: 11/10/2016
 * Time: 11:44
 */
?>

@extends('template.principal')

@section('pageName')

    <h1>Empresa</h1>

@endsection

@section('content')

    <table class="table">


            <div class="col-md-3 col-sm-6 hero-feature">

                <thead>
                <tr>
                    <th>Empresa</th>
                    <th>CNPJ</th>

                </tr>
                </thead>
                @foreach($empresas as $empresa)
                <tbody>
                <tr>
                    <td>{{ $empresa->nome }}</td>
                    <td>{{ $empresa->cnpj }}</td>
                    <td><a href="{{ action('EmpresaController@show', $empresa) }}"><span class="glyphicon glyphicon-search"></span></a></td>
                    <td><a href="{{ action('EmpresaController@edit', $empresa) }}"><span class="glyphicon glyphicon-pencil"></span></a></td>
                    <td><a href="{{ action('EmpresaController@destroy', $empresa) }}"><span class="glyphicon glyphicon-remove"></span></a></td>
                </tr>
                </tbody>
                @endforeach

                <!--<button href="{{ route('empresa.create') }}" type="submit" class="btn btn-default">Adicionar</button>-->
                <button type="button" onclick="window.location='{{ route("empresa.create") }}'">Adicinar</button>

            </div>

    </table>

@endsection