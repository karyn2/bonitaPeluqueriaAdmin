<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PresentacionServiciosController extends Controller
{
    public function index()
    {
        $images = [
            'images/img/mujer3.png',
            'images/img/mujer.png',
            'images/img/unas1.png',          
        ];
        return view("presentacionServicios.inicio" , ['images' => $images]);
    }

    public function damas(){
        $cortes = DB::table('tipos_procedimiento')
        ->join('procedimiento', 'tipos_procedimiento.id_tipo', '=', 'procedimiento.fk_id_tipo')
        ->where('tipos_procedimiento.nombre_tipo', '=', 'Cortes y Peinados Damas')
        ->get();

        $colores = DB::table('tipos_procedimiento')
        ->join('procedimiento', 'tipos_procedimiento.id_tipo', '=', 'procedimiento.fk_id_tipo')
        ->where('tipos_procedimiento.nombre_tipo', '=', 'Coloración')
        ->get();

        $lavados = DB::table('tipos_procedimiento')
        ->join('procedimiento', 'tipos_procedimiento.id_tipo', '=', 'procedimiento.fk_id_tipo')
        ->where('tipos_procedimiento.nombre_tipo', '=', 'Lavados')
        ->get();

        $manos = DB::table('tipos_procedimiento')
        ->join('procedimiento', 'tipos_procedimiento.id_tipo', '=', 'procedimiento.fk_id_tipo')
        ->where('tipos_procedimiento.nombre_tipo', '=', 'Manicure')
        ->get();

        $maquillajes = DB::table('tipos_procedimiento')
        ->join('procedimiento', 'tipos_procedimiento.id_tipo', '=', 'procedimiento.fk_id_tipo')
        ->where('tipos_procedimiento.nombre_tipo', '=', 'Maquillaje')
        ->get();

        $tratamientos = DB::table('tipos_procedimiento')
        ->join('procedimiento', 'tipos_procedimiento.id_tipo', '=', 'procedimiento.fk_id_tipo')
        ->where('tipos_procedimiento.nombre_tipo', '=', 'Tratamientos')
        ->get();

        return view ('presentacionServicios.damas', compact('cortes','colores','lavados','manos','maquillajes','tratamientos'));
    }
}
