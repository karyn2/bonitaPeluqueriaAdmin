<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\QueryException;


class CuentasController extends Controller
{
    public function index() {
        $citas = DB::table("ingresos")->get();
        return view("cuentas.lista", ["listaCitas" => $citas]);
    }

    public function form_registro_ingreso(){
        return view("cuentas.form_registro");
    }


    public function registrar(Request $request){
        try {
           /*  $personal = new Personal();
            $personal->identificacion = $request->input('identificacion');
            $personal->nombres = $request->input('nombres');
            $personal->apellidos = $request->input('apellidos');
            $personal->correo = $request->input('correo');
            $personal->telefono = $request->input('telefono');
            $personal->cargo = $request->input('cargo');
            $personal->porcentaje_pago = $request->input('porcentaje_pago');
            $personal->save();
            return redirect()->route('listado_personal'); */
        } catch (QueryException $e) {
            // Captura la excepción y maneja el error
            //return redirect()->route('pagina_de_error')->with('error', $e->getMessage());
            //mostrar el error y exito en la pagina de lsitado
           /*  return redirect()->route('listado_personal'); */
        }
    }
}
