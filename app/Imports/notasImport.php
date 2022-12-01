<?php

namespace App\Imports;

use App\Models\resumen_historico_notas;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class notasImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new resumen_historico_notas([
            'id_programa_resumen' => $row['codigo_programa'],
            'documento_estudiante' => $row['identificacion'],
            'nivel' => $row['nivel'],
            'promedio' => $row['prom'],
            'periodo_academico' => 1,
            'id_usuario_cargue' => 6,
        ]);
    }
}
