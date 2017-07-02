<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class desarrollos extends Model
{
    protected $fillable = [
        'titulo',
        'description',
        'logo',
        'ubicacion',
    ];
    
}
