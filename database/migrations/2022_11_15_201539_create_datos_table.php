<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datos', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->integer('id_programa_academico');
            $table->smallInteger('id_periodo_academico')->index('id_periodo_academico_idx');
            $table->string('seguimiento_RA', 45)->nullable();
            $table->tinyInteger('recursos_humanos')->nullable()->comment('cantidad de RECURSOS HUMANOS (TUTORES, MENTORES, ETC)');
            $table->tinyInteger('numero_profesores')->nullable()->comment('con este campo me permitira calcular la RELACION DE ESTUDIANTE - PROFESOR POR PROGRAMA');
            $table->smallInteger('estudiantes_matriculados')->nullable()->comment('numero de estudiantes matriculados que se obtienen del cargue de los registros individuales');
            $table->smallInteger('numero_estrategias')->nullable()->comment('NUMERO DE ESTRATEGIAS IMPLEMENTADAS POR EL NUMERO DE HORAS ASINCRONICAS DEL PROFESOR CON EL  ESTUDIANTE DEL PROGRAMA');
            $table->smallInteger('horas_asincronicas')->nullable()->comment('NUMERO DE ESTRATEGIAS IMPLEMENTADAS POR EL NUMERO DE HORAS ASINCRONICAS DEL PROFESOR CON EL  ESTUDIANTE DEL PROGRAMA, esto se calcula teniendo en cuenta el campo numero_estrategias.');
            $table->tinyInteger('numero_programas')->nullable()->comment('OFERTA DE PROGRAMA ACADEMICO DE PREGRADO');
            $table->smallInteger('cupos_ofrecidos')->nullable()->comment('CUPOS OFRECIDOS CADA SEMESTRE EN EL PROGRAMA DE PREGRADO');
            $table->smallInteger('estudiantes_prueba_semestral')->nullable()->comment('NUMERO DE ESTUDIANTES EN PRUEBA SEMESTRAL');
            $table->smallInteger('estudiantes_reprobaron')->nullable()->comment('NUMERO DE ESTUDIANTES QUE REPROBARON MAS DE 3 MATERIAS');
            $table->tinyInteger('n_programas_posgrado')->nullable()->comment('NUMERO DE PROGRAMAS ACADEMICO DE POSGRADO');
            $table->tinyInteger('tasa_desersion')->nullable()->comment('TASA DE DESERCION SEMESTRAL (RESERVA DE CUPO)');
            $table->smallInteger('no_graduados')->nullable()->comment('egresados NO GRADUADOS');
            $table->smallInteger('graduados')->nullable()->comment('egresados titulados');
            $table->tinyInteger('profesor_no_carrera')->nullable()->comment('RELACION ESTUDIANTE POR PROFESOR NO PERTENECIENTE A LA CARRERA Y POR PROFESOR EN PROVISIONALIDAD Y DE CARRERA');
            $table->tinyInteger('profesor_provisional')->nullable();
            $table->tinyInteger('profesor_carrera')->nullable();
            $table->smallInteger('horas_docencia_directa')->nullable()->comment('NUMERO DE HORAS DICTADAS EN EL SEMESTRE POR PROGRAMA');
            $table->smallInteger('horas_docencia_indirectas')->nullable()->comment('NUMERO DE HORAS PROFESORES DE PREPARACION EN EL SEMESTRE');
            $table->smallInteger('horas_investigacion')->nullable()->comment('NUMERO DE HORAS DE INVESTIGACION ASIGNADAS POR SEMESTRE A PROFESORES CON DEDICACION TIEMPO COMPLETO');
            $table->smallInteger('horas_proyeccion_social')->nullable()->comment('NUMEROS DE HORAS DE PROYECCION SOCIAL ASIGNADAS ');
            $table->tinyInteger('num_inscritos')->nullable()->comment('se traen de otro sistema informacion');
            $table->tinyInteger('num_admitidos')->nullable();
            $table->tinyInteger('num_primer_curso')->nullable();
            $table->timestamp('fecha_reporte')->useCurrentOnUpdate()->useCurrent();
            $table->string('id_usuario', 45);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('datos');
    }
}
