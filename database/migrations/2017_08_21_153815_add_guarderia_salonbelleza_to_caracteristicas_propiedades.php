<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddGuarderiaSalonbellezaToCaracteristicasPropiedades extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('caracteristicas_propiedades', function (Blueprint $table) {
            $table->string('guarderia')->nullable();
            $table->string('salon_belleza')->nullable();
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
            $table->dropColumn('guarderia');
            $table->dropColumn('salon_belleza');
        });            
    }
}
