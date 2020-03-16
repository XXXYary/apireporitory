<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class alumnosgrupos extends Model
{
    protected $primaryKey = 'idag';
    protected $fillable=['idag','idgrupo','matricula'];
}
