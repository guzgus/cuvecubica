<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddAvancesToDesarrollosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('desarrollos', function (Blueprint $table) {
            $table->string('fase_previa');
            $table->string('cimientos');
            $table->string('estructura');
            $table->string('fme');
            $table->string('finalizacion');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('desarrollos', function (Blueprint $table) {
            $table->dropColumn('fase_previa');
            $table->dropColumn('cimientos');
            $table->dropColumn('estructura');
            $table->dropColumn('fme');
            $table->dropColumn('finalizacion');
        });
    }
}
