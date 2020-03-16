<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class usuario extends Model
{
    protected $primaryKey = 'idu';
    protected $fillable=['idu','nombre','correo','password','tipo'];
}
