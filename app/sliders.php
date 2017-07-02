<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sliders extends Model
{
    protected $fillable = [
        'file',
        'extension',
        'section',
        'desarrollo_id',
        'propiedad_id',
    ];
}
