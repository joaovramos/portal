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

    <h1>Meta</h1>

@endsection

@section('content')

    <table class="table">


            <div class="col-md-3 col-sm-6 hero-feature">

                <thead>
                <tr>
                    <th>Meta</th>
                    <th>Indicador</th>
                    <th>Meta</th>
                    <th>Medição</th>
                    <th>Peso</th>

                </tr>
                </thead>
                @foreach($metas as $meta)
                <tbody>
                <tr>
                    <td>{{ $meta->nome }}</td>
                    <td>{{ $meta->indicador }}</td>
                    <td>{{ $meta->meta }}</td>
                    <td>{{ $meta->medicao }}</td>
                    <td>{{ $meta->peso }}</td>
                    <td><a href="{{ action('MetaController@show', $meta) }}"><span class="glyphicon glyphicon-search"></span></a></td>
                    <td><a href="{{ action('MetaController@edit', $meta) }}"><span class="glyphicon glyphicon-pencil"></span></a></td>
                    <td><a href="{{ action('MetaController@destroy', $meta) }}"><span class="glyphicon glyphicon-remove"></span></a></td>
                </tr>
                </tbody>
                @endforeach

                <!--<button href="{{ route('meta.create') }}" type="submit" class="btn btn-default">Adicionar</button>-->
                <button type="button" onclick="window.location='{{ route("meta.create") }}'">Adicinar</button>

            </div>

    </table>

@endsection