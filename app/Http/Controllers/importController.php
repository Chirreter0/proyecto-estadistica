<?php

namespace App\Http\Controllers;

use App\Imports\notasImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;


class importController extends Controller
{
    public function import()
    {
        Excel::import(new notasImport(), request()->file('file'));


        return redirect('/')->with('success', 'Datos importados');
    }
}
