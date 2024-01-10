<?php

namespace App\Http\Controllers;

use App\Models\Citas;
use App\Models\User;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class CitasAdminController extends Controller
{
    public function index() {
        $citas = Citas::join('users', 'citas.identificacion', '=', 'users.identificacion')
        ->join('procedimiento', 'citas.id_procedimiento', '=', 'procedimiento.id_procedimiento')
        ->get();

        return view("citas.lista", ["listaCitas" => $citas]);
    }

    public function form_registro_cita() {
        $servicios = DB::table("procedimiento")->select("id_procedimiento","nombre_procedimiento")->get();
        return view("citas.form_registro", ["listaServicios" => $servicios]);
    }

    public function registrar_cita(Request $request){
        try {
            $cita = new Citas();
            $cita->identificacion = $request->input('identificacion');
            $cita->nombre = $request->input('nombre');
            $cita->correo = $request->input('correo');
            $cita->fecha = $request->input('fecha');
            $cita->hora = $request->input('hora');
            $cita->celular = $request->input('celular');
            $cita->procedimiento = $request->input('procedimiento');
            $cita->save();
            return redirect()->route('listaCitas');
        } catch (QueryException $e) {
            // Captura la excepción y maneja el error

        }

        return redirect()->route('listaCuentas');
    }

}
