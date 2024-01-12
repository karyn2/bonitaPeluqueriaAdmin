<?php

namespace App\Http\Controllers;

use App\Models\Cuentas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\QueryException;
use App\Models\Personal;
use App\Models\Procedimiento;
use Carbon\Carbon;
use Barryvdh\DomPDF\Facade\PDF;
use Illuminate\Support\Facades\Log;
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

    public function form_editar_ingreso($id_ingresos) {
        $cuenta = new Cuentas();
        $ingreso = $cuenta->mostrarServicioPersonalPorId($id_ingresos);
        $listaPersonal = Personal::all();
        $listaServicios = Procedimiento::all();
        return view('cuentas.form_editar', [
            'ingreso' => $ingreso,
            'listaPersonal' => $listaPersonal,
            'listaServicios' => $listaServicios,
        ]);
    }

    public function actualizar_ingreso(Request $request, $id_ingresos) {
        $request->validate([
            'pago' => 'required|numeric',
            'procedimiento' => 'required',
            'personal' => 'required'
        ]);

        try {
            $cuenta = Cuentas::find($id_ingresos);
            $cuenta->pago = floatval($request->input('pago'));
            $cuenta->fk_id_procedimiento = $request->input('procedimiento');
            $cuenta->fk_identificacion = $request->input('personal');
            $cuenta->save();
            return redirect()->route('listaCuentas');
        } catch (QueryException $e) {
            echo $e;
        }
    }

    public function eliminar_ingreso($id_ingresos) {
        try {
            $cuenta = Cuentas::find($id_ingresos);
            $cuenta->delete();
            return redirect()->route('listaCuentas');
        } catch (QueryException $e) {
            echo $e;
        }
    }

    public function informe(Request $request)
    {
        $cuenta = new Cuentas();
        $ingresos = $cuenta->mostrarServicioPersonal();

        if ($request->isMethod('GET')) {
            return view('cuentas.informeIngreso', ['listaIngresos' => $ingresos]);
        } elseif ($request->isMethod('POST')) {
            $request->validate([
                'fecha_inicio' => 'required|date_format:Y-m-d',
                'fecha_fin' => 'required|date_format:Y-m-d',
            ]);

            try {

                $fechaInicio = $request->input('fecha_inicio');
                $fechaFin = $request->input('fecha_fin') . ' 23:59:59';

                $ingresos = DB::table("ingresos")
                ->join('procedimiento', 'ingresos.fk_id_procedimiento', '=', 'procedimiento.id_procedimiento')
                ->join('personal', 'ingresos.fk_identificacion', '=', 'personal.identificacion')
                ->select('ingresos.*', 'procedimiento.nombre_procedimiento', 'personal.nombres', 'personal.apellidos')
                ->whereBetween('ingresos.fecha_pago', [$fechaInicio, $fechaFin])
                ->get();

                return view('cuentas.informeIngreso', ['listaIngresos' => $ingresos]);
            } catch (\Exception $e) {
                return redirect()->back()->with('error', 'Hubo un error al procesar la solicitud.');
            }
        }
    }

    public function generarPDF(Request $request) {
        $validator = $request->validate([
            'fecha_inicio' => 'required|date_format:Y-m-d',
            'fecha_fin' => 'required|date_format:Y-m-d',
        ]);

        try {
            $fechaInicio = $request->input('fecha_inicio');
            $fechaFin = $request->input('fecha_fin') . ' 23:59:59';

            $ingresos = DB::table("ingresos")
                ->join('procedimiento', 'ingresos.fk_id_procedimiento', '=', 'procedimiento.id_procedimiento')
                ->join('personal', 'ingresos.fk_identificacion', '=', 'personal.identificacion')
                ->select('ingresos.*', 'procedimiento.nombre_procedimiento', 'personal.nombres', 'personal.apellidos')
                ->whereBetween('ingresos.fecha_pago', [$fechaInicio, $fechaFin])
                ->get();

            Log::info('Ingresos: ' . $ingresos);

            $pdf = Pdf::loadView('cuentas.informePdf', ['listaIngresos' => $ingresos]);
            return $pdf->stream('informe_ingresos.pdf');

        } catch (\Exception $e) {
            echo $ingresos;
            Log::error("An error occurred: " . $e->getMessage());
            return redirect()->back()->with('error', 'Hubo un error al procesar la solicitud.');
        }
    }



}
