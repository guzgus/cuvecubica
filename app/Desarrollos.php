<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Desarrollos extends Model
{
    protected $fillable = [
        'title',
        'description',
        'latitud',
        'longitud',
        'cimientos',
        'estructura',
        'fme',
        'finalizacion',
    ];
    
}
