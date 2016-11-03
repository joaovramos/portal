<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setor extends Model
{
    protected $connection = 'pgsql2';
    protected $table = 'setores';
    protected $fillable = ['nome', 'id_empresa'];
}
