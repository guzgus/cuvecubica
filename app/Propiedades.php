<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Propiedades extends Model
{
    protected $fillable = [
        'title',
        'description',
        'domicilio',
        'status',
        'precio',
        'moneda',
        'categoria',
        'latitud',
        'longitud',
        'banios',
        'recamaras',
        'estacionamientos',
        'superficie_construccion',
        'superficie_terreno',
        'antiguedad',
        'desarrollo_id',
    ];
}
