<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cicloesc extends Model
{
    protected $primaryKey = 'idcesc';
    protected $fillable=['idcesc','cicloesc','activo'];
}
