<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ServiciosController extends Controller
{
    public function index(){
        $servicios = DB::table('tipos_procedimiento')
        ->join('procedimiento', 'tipos_procedimiento.id_tipo', '=', 'procedimiento.fk_id_tipo')
        ->get();
        return view ('servicios.listarServicio', compact('servicios'));
    }
}
