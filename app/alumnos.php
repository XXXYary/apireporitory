<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class alumnos extends Model
{
    protected $primaryKey = 'matricula';
    protected $fillable=['matricula','nAlumno','apAlumno','amAlumno','idsubcar','estatus','oportunidades','activo','sexo','edocivil','nohijos','celular','telFijo','correo','fechaNac','lugarNac','religion','CURP','RFC','calle','noext','noint','id_localidad','id_prep','turno_prod','especialidad','fecha_ingreso'];
}
