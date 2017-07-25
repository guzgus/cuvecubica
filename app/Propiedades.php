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


        public function ObtieneSlide($propiedades)
        {


        foreach ($propiedades as $propiedad) {
                $propiedad_id = $propiedad->id;

                $SlidesPropiedad=Sliders::where('propiedad_id', $propiedad_id)->inRandomOrder()->take(1)->get();
                
                foreach ($SlidesPropiedad as $slide_unico) {
                    $slide_default = $slide_unico->file;
                }

            array_add($propiedad, 'slide_default', $slide_default);

        } // foreach que recorre slides


        return $propiedades;
        }

}
