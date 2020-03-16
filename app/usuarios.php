<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class usuarios extends Model
{
  protected $primaryKey = 'idu'; 
  protected $fillable=['idu','nombre','apellido','correo','tipo',
                      'password','archivo','activo'];
 
}
