<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\UsersImport;

class importController extends Controller
{
    public function import()
    {
        Excel::import(new UsersImport, request()->file('file'));


        return redirect('/')->with('success', 'Datos importados');
    }
}
