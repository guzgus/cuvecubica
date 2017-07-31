<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddMoreCaracteristicasToCaracteristicasPropiedadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('caracteristicas_propiedades', function (Blueprint $table) {
            $table->string('monta_cargas')->nullable();
            $table->string('uso_comercial')->nullable();
            $table->string('mixto_habitacional')->nullable();
            $table->string('family_room')->nullable();
            $table->string('gym')->nullable();
            $table->string('spa')->nullable();
            $table->string('helipuerto')->nullable();
            $table->string('cctv')->nullable();
            $table->string('vigilancia')->nullable();
            $table->string('cancha_tenis')->nullable();
            $table->string('cancha_padel')->nullable();
            $table->string('cancha_multiples')->nullable();
            $table->string('cine')->nullable();
            $table->string('ludoteca')->nullable();
            $table->string('estacionamiento_visitas')->nullable();
            $table->string('valet_parking')->nullable();
            $table->string('roof_garden')->nullable();
            $table->string('business_center')->nullable();
            $table->string('cuarto_choferes')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('caracteristicas_propiedades', function (Blueprint $table) {
            $table->dropColumn('monta_cargas');
            $table->dropColumn('uso_comercial');
            $table->dropColumn('mixto_habitacional');
            $table->dropColumn('family_room');
            $table->dropColumn('gym');
            $table->dropColumn('spa');
            $table->dropColumn('helipuerto');
            $table->dropColumn('cctv');
            $table->dropColumn('vigilancia');
            $table->dropColumn('cancha_tenis');
            $table->dropColumn('cancha_padel');
            $table->dropColumn('cancha_multiples');
            $table->dropColumn('cine');
            $table->dropColumn('ludoteca');
            $table->dropColumn('estacionamiento_visitas');
            $table->dropColumn('valet_parking');
            $table->dropColumn('roof_garden');
            $table->dropColumn('business_center');
            $table->dropColumn('cuarto_choferes');
        });
    }
}
