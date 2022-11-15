<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNivelFormacionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nivel_formacion', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->tinyInteger('codigo_nivel_estudio');
            $table->bigInteger('id_datos')->index('id_datos_nivel_idx');
            $table->smallInteger('cantidad')->comment('almacena la cantidad de docentes en pregrado, posgrado, teniendo en cuenta su nivel de estudio.');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nivel_formacion');
    }
}
