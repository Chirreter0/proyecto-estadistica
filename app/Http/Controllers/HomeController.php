<?php

namespace App\Http\Controllers;

use App\Models\resumen_historico_notas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
        /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        //dashboard
        $doc = DB::table('resumen_historico_notas')->pluck('documento_estudiante');
        $prom = DB::table('resumen_historico_notas')->pluck('promedio');


        return view('pages.dashboard',['doc'=>$doc, 'prom'=>$prom] );
    }
}
