<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class grupos extends Model
{
    protected $primaryKey = 'idgrupo';
    protected $fillable=['idgrupo','cuatrimestre','ngrupo','turno','idcesc','idsubcar','iduser','activo'];
}
