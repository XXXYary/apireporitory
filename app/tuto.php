<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tutorias extends Model
{
    protected $primaryKey = 'idt';
    protected $fillable=['idt','fecha','tipo','descripcion','acciones','sexo','fechasig','estatus','profesor','evidencia','detalle','matricula','tutor','ciclo'];
}
