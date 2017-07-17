<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CaracteristicasPropiedades extends Model
{
    protected $fillable = [
        'propiedad_id',
        'internet',
        'aire_acondicionado',
        'alberca',
        'juegos_infantiles',
        'ascensor',
        'asador',
        'calefaccion',
        'cisterna',
        'porton_electrico',
        'seguridad',
        'alarma', // Termina primer columna en vista
        'amoblado',
        'jacuzzi',
        'salon_usos_multiples',
        'linea_telefonica',
        'solo_familias',
        'uso_de_suelo',
        'gas_natural',
        'altillo',
        'balcon',
        'closets',
        'cocina', // Termina segunda columna en vista
        'cuarto_servicio',
        'dormitorio_suite',
        'estudio',
        'jardin',
        'living',
        'medio_banio',
        'patio',
        'playroom',
        'sala_comedor',
        'terraza',
        'vestidor',
    ];
}
