<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResumenHistoricoNotasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resumen_historico_notas', function (Blueprint $table) {
            $table->bigInteger('id')->primary();
            $table->integer('id_programa_resumen');
            $table->string('documento_estudiante', 15);
            $table->string('nivel', 3)->comment('semestre en el que va estudiante');
            $table->decimal('promedio', 10, 0);
            $table->string('periodo_academico', 8);
            $table->timestamp('fecha_carga')->nullable();
            $table->string('id_usuario_cargue', 45);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('resumen_historico_notas');
    }
}
