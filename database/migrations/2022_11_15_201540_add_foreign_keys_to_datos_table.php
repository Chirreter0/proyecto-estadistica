<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToDatosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('datos', function (Blueprint $table) {
            $table->foreign(['id_periodo_academico'], 'id_periodo_academico')->references(['id'])->on('periodo_academico')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('datos', function (Blueprint $table) {
            $table->dropForeign('id_periodo_academico');
        });
    }
}
