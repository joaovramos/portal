<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    protected $connection = 'pgsql2';
    protected $fillable = ['nome', 'cnpj'];
}
