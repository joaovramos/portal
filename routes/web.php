<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome2');
});

Route::get('home', function () {
    return view('welcome2');
});


Route::resource('empresa', 'EmpresaController');

Route::resource('setor', 'SetorController');

Route::resource('funcionario', 'FuncionarioController');