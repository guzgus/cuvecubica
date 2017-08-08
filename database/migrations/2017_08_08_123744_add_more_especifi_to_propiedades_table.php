<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddMoreEspecifiToPropiedadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('propiedades', function (Blueprint $table) {
            $table->string('num_dep_piso')->nullable();
            $table->string('num_piso')->nullable();
            $table->string('num_bodegas')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('propiedades', function (Blueprint $table) {
            $table->dropColumn('num_dep_piso');
            $table->dropColumn('num_piso');
            $table->dropColumn('num_bodegas');
        });
    }
}
