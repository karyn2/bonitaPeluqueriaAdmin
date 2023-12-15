<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Personal;
use Illuminate\Database\QueryException;

class PersonalController extends Controller
{
    
    //funcion permite que debe estar autenticado para acceder a este controlador y sus vistas
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $personal = DB::table('personal')->get(); 
        return view("personal.listado", ['personals'=> $personal]);
    }

    public function form_registro_personal(){

        return view("personal.form_registro",);
    }

    public function registrar(Request $request){
        try {
            $personal = new Personal();
            $personal->identificacion = $request->input('identificacion');
            $personal->nombres = $request->input('nombres');
            $personal->apellidos = $request->input('apellidos');
            $personal->correo = $request->input('correo');
            $personal->telefono = $request->input('telefono');
            $personal->cargo = $request->input('cargo');
            $personal->porcentaje_pago = $request->input('porcentaje_pago');
            $personal->save();
            return redirect()->route('listado_personal');
        } catch (QueryException $e) {
            return redirect()->route('listado_personal');
        }
    }

}
