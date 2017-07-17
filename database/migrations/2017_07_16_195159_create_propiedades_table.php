<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropiedadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('propiedades', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->longText('description');
            $table->longText('domicilio');
            $table->string('status');
            $table->string('categoria');
            $table->string('latitud');
            $table->string('longitud');
            $table->string('banios');
            $table->string('recamaras');
            $table->string('estacionamientos');
            $table->string('superficie_construccion');
            $table->string('superficie_terreno');
            $table->string('antiguedad')->nullable();
            $table->string('desarrollo_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('propiedades');
    }
}
