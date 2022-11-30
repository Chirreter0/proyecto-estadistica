<?php

namespace App\Imports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class UsersImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new User([
            'id_programa_resumen' => $row['codigo_programa'],
            'documento_estudiante' => $row['identificacion'],
            'nivel' => $row['nivel'],
            'promedio' => $row['prom'],
            'periodo_academico' => 1,
        ]);
    }
}
