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

    <h1>Funcionario</h1>

@endsection

@section('content')

    <table class="table">


            <div class="col-md-3 col-sm-6 hero-feature">

                <thead>
                <tr>
                    <th>Funcionario</th>
                    <th>CPF</th>
                    <th>Matricula</th>
                    <th>Data de Nascimento</th>
                    <th>Departamento</th>

                </tr>
                </thead>
                @foreach($funcionarios as $funcionario)
                <tbody>
                <tr>
                    <td>{{ $funcionario->nome }}</td>
                    <td>{{ $funcionario->cpf }}</td>
                    <td>{{ $funcionario->matricula }}</td>
                    <td>{{ $funcionario->nascimento }}</td>
                    <td>{{ $funcionario->id_departamento }}</td>
                    <td><a href="{{ action('FuncionarioController@show', $funcionario) }}"><span class="glyphicon glyphicon-search"></span></a></td>
                    <td><a href="{{ action('FuncionarioController@edit', $funcionario) }}"><span class="glyphicon glyphicon-pencil"></span></a></td>
                    <td><a href="{{ action('FuncionarioController@destroy', $funcionario) }}"><span class="glyphicon glyphicon-remove"></span></a></td>
                </tr>
                </tbody>
                @endforeach

                <!--<button href="{{ route('funcionario.create') }}" type="submit" class="btn btn-default">Adicionar</button>-->
                <button type="button" onclick="window.location='{{ route("funcionario.create") }}'">Adicinar</button>

            </div>

    </table>

@endsection