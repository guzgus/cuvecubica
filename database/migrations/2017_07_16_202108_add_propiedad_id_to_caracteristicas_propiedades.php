<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPropiedadIdToCaracteristicasPropiedades extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('caracteristicas_propiedades', function (Blueprint $table) {
            $table->integer('propiedad_id')->unsigned();
            $table->foreign('propiedad_id')->references('id')->on('propiedades');
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
            $table->dropForeign('propiedades_propiedad_id_foreign');
            $table->dropColumn('propiedad_id');
        });
    }
}
