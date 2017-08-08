<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Add5CaracteristicasToCaracteristicasPropiedadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('caracteristicas_propiedades', function (Blueprint $table) {
            $table->string('salon_fiestas')->nullable();
            $table->string('recepcion')->nullable();
            $table->string('boiler')->nullable();
            $table->string('laundry')->nullable();
            $table->string('cuarto_lavado')->nullable();
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
            $table->dropColumn('salon_fiestas');
            $table->dropColumn('recepcion');
            $table->dropColumn('boiler');
            $table->dropColumn('laundry');
            $table->dropColumn('cuarto_lavado');
        });
    }
}
