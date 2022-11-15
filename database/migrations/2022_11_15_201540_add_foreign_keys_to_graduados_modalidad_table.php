<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToGraduadosModalidadTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('graduados_modalidad', function (Blueprint $table) {
            $table->foreign(['codigo_modalidad'], 'codigo_modalidad')->references(['codigo'])->on('modalidad')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['id_datos_graduados'], 'id_datos_graduado')->references(['id'])->on('datos')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('graduados_modalidad', function (Blueprint $table) {
            $table->dropForeign('codigo_modalidad');
            $table->dropForeign('id_datos_graduado');
        });
    }
}
