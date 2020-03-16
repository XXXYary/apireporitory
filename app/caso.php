<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class caso extends Model
{
    protected $primaryKey = 'idc';
    protected $fillable=['idc','tcaso','activo'];
}
