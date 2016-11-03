<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{
    protected $connection = 'pgsql2';
    protected $fillable = ['nome', 'cpf', 'rg', 'id_empresa', 'id_setor'];


}
