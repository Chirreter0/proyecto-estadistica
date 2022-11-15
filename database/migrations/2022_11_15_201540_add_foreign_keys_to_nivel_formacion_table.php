<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToNivelFormacionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('nivel_formacion', function (Blueprint $table) {
            $table->foreign(['id_datos'], 'id_datos_nivel')->references(['id'])->on('datos')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('nivel_formacion', function (Blueprint $table) {
            $table->dropForeign('id_datos_nivel');
        });
    }
}
