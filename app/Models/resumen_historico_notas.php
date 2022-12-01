<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class resumen_historico_notas extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_programa_resumen',
        'documento_estudiante',
        'nivel',
        'promedio',
        'periodo_academico',
        'id_usuario_cargue',
    ];
    public $timestamps = false;
}
