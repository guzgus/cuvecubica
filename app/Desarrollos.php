<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Desarrollos extends Model
{
    protected $fillable = [
        'titulo',
        'description',
        'logo',
        'ubicacion',
    ];
    
}
