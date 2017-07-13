<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sliders extends Model
{
    protected $fillable = [
        'section',
        'desarrollo_id',
        'propiedad_id',
    ];
}
