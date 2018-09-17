<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sliders extends Model
{
    protected $fillable = [
        'file',
        'extension',
        'section',
        'desarrollo_id',
        'propiedad_id',
        'date_avance',
    ];
}
