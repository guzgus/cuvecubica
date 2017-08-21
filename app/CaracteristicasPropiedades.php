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
        'uso_de_suelo',
        'gas_natural',
        'balcon',
        'closets',
        'cocina', // Termina segunda columna en vista
        'cuarto_servicio',
        'estudio',
        'jardin',
        'living',
        'medio_banio',
        'patio',
        'playroom',
        'sala_comedor',
        'terraza',
        'vestidor',
        'monta_cargas',
        'uso_comercial',
        'mixto_habitacional',
        'family_room',
        'gym',
        'guarderia',
        'spa',
        'helipuerto',
        'cctv',
        'vigilancia',
        'cancha_tenis',
        'cancha_padel',
        'cancha_multiples',
        'cine',
        'ludoteca',
        'estacionamiento_visitas',
        'valet_parking',
        'roof_garden',
        'business_center',
        'cuarto_choferes',
        'salon_fiestas',
        'salon_belleza',
        'recepcion',
        'boiler',
        'laundry',
        'cuarto_lavado',
    ];
}
