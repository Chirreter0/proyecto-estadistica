<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGraduadosModalidadTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('graduados_modalidad', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->tinyInteger('codigo_modalidad')->index('codigo_modalidad_idx');
            $table->bigInteger('id_datos_graduados')->index('id_datos_graduado_idx');
            $table->smallInteger('cantidad');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('graduados_modalidad');
    }
}
