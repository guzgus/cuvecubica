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
        'fase_previa',
        'cimientos',
        'estructura',
        'fme',
        'finalizacion',
        'link_video'
    ];


}
