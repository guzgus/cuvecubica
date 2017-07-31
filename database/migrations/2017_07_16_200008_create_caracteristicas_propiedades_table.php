<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCaracteristicasPropiedadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('caracteristicas_propiedades', function (Blueprint $table) {
            $table->increments('id');
            $table->string('internet')->nullable();
            $table->string('aire_acondicionado')->nullable();
            $table->string('alberca')->nullable();
            $table->string('juegos_infantiles')->nullable();
            $table->string('ascensor')->nullable();
            $table->string('asador')->nullable();
            $table->string('calefaccion')->nullable();
            $table->string('cisterna')->nullable();
            $table->string('porton_electrico')->nullable();
            $table->string('seguridad')->nullable();
            $table->string('alarma')->nullable();
            $table->string('amoblado')->nullable();
            $table->string('jacuzzi')->nullable();
            $table->string('salon_usos_multiples')->nullable();
            $table->string('uso_de_suelo')->nullable();
            $table->string('gas_natural')->nullable();
            $table->string('balcon')->nullable();
            $table->string('closets')->nullable();
            $table->string('cocina')->nullable();
            $table->string('cuarto_servicio')->nullable();
            $table->string('estudio')->nullable();
            $table->string('jardin')->nullable();
            $table->string('living')->nullable();
            $table->string('medio_banio')->nullable();
            $table->string('patio')->nullable();
            $table->string('playroom')->nullable();
            $table->string('sala_comedor')->nullable();
            $table->string('terraza')->nullable();
            $table->string('vestidor')->nullable();
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
        Schema::dropIfExists('caracteristicas_propiedades');
    }
}
