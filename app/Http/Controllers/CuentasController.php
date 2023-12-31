<?php

namespace App\Http\Controllers;

use App\Models\Cuentas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\QueryException;


class CuentasController extends Controller
{
    public function index() {
        //$ingresos = Cuentas::with('personal', 'servicio')->get();
        $cuenta = new Cuentas();
        $ingresos = $cuenta->mostrarServicioPersonal();
        return view("cuentas.lista", ["listaIngresos" => $ingresos]);
    }

    public function form_registro_ingreso(){
        $servicios = DB::table("procedimiento")->select("id_procedimiento","nombre_procedimiento")->get();
        $personal = DB::table("personal")->select("identificacion","nombres", "apellidos")->get();
        return view("cuentas.form_registro", ["listaServicios" => $servicios], ["listaPersonal" => $personal]);
    }


    public function registrar_ingreso(Request $request){

        $request->validate([
            'pago' => 'required|numeric',
            'procedimiento' => 'required',
            'personal' => 'required'
        ]);

        try {
            $cuenta = new Cuentas();
            $cuenta->pago = floatval($request->input('pago'));
            $cuenta->fk_id_procedimiento = $request->input('procedimiento');
            $cuenta->fk_identificacion = $request->input('personal');
            $cuenta->save();
            return redirect()->route('listaCuentas');
        } catch (QueryException $e) {

           echo $cuenta;
           echo $e;
        }
    }
}
