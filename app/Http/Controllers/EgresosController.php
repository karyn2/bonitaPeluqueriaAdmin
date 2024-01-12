<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\Egreso;
use Carbon\Carbon;
use Barryvdh\DomPDF\Facade\PDF;

class EgresosController extends Controller
{
    public function index()
    {
        return view('egresos.index');
    }

    public function list()
    {
        $egresos = DB::table('egreso')
            ->join('tipos_egreso', 'egreso.fk_tipo_egreso', '=', 'tipos_egreso.id')
            ->join('users', 'egreso.fk_users', '=', 'users.id')
            ->get();

        return view('egresos.list_Egreso', compact('egresos'));
    }

    public function form_registrar(Request $request)
    {
        if ($request->method() === 'GET') {
            $tipo_egreso = DB::table('tipos_egreso')->get();
            return view('egresos.registrarEgreso', compact('tipo_egreso'));
        } elseif ($request->method() === 'POST') {
            $validator = $request->validate([
                'fk_tipo_egreso' => 'required',
                'descripcion_egreso' => 'required|string',
                #'fecha_hora' => 'required|date',
                #'fk_users' => 'required',
                'valor' => 'required|integer|min:0',
                'a_quien_se_dio' => 'required|string',
            ]);

            $egreso = new Egreso();
            $egreso->fk_tipo_egreso = $request->input('fk_tipo_egreso');
            $egreso->descripcion_egreso = $request->input('descripcion_egreso');
            $egreso->fecha_hora = Carbon::now();
            $egreso->fk_users = Auth::user()->id;
            $egreso->valor = $request->input('valor');
            $egreso->a_quien_se_dio = $request->input('a_quien_se_dio');
            try {
                $egreso->save();
                return redirect()->route('listar_egresos')->with('success', 'Egreso registrado exitosamente');
            } catch (\Exception $e) {
                return redirect()->route('form_registrar_egreso')->with('error', 'Error al registrar el egreso: ' . $e->getMessage())->withInput()->with('toast_duration', 50000);
            }
        }
    }

    public function informe(Request $request)
    {
        $tipo_egreso = DB::table('tipos_egreso')->get();
        if ($request->isMethod('GET')) {

            return view('egresos.informeEgreso', compact('tipo_egreso'));
        } elseif ($request->isMethod('POST')) {
            $validator = $request->validate([
                'fk_tipo_egreso' => 'required',
                'fecha_inicio' => 'required|date_format:Y-m-d',
                'fecha_fin' => 'required|date_format:Y-m-d',
            ]);

            try {
                $fkTipoEgreso = $request->input('fk_tipo_egreso');
                $fechaInicio = $request->input('fecha_inicio');

                // Establecer la fecha de fin al final del día
                $fechaFin = $request->input('fecha_fin') . ' 23:59:59';

                $egresos = DB::table('egreso')
                    ->join('tipos_egreso', 'egreso.fk_tipo_egreso', '=', 'tipos_egreso.id')
                    ->join('users', 'egreso.fk_users', '=', 'users.id')
                    ->where('egreso.fk_tipo_egreso', '=', $fkTipoEgreso)
                    ->whereBetween('egreso.fecha_hora', [$fechaInicio, $fechaFin])
                    ->get();

                return view('egresos.informeEgreso', compact('egresos', 'tipo_egreso'));
            } catch (\Exception $e) {
                return redirect()->back()->with('error', 'Hubo un error al procesar la solicitud.');
            }
        }
    }

public function generarPDF(Request $request)
{
    $validator = $request->validate([
        'fk_tipo_egreso' => 'required',
        'fecha_inicio' => 'required|date_format:Y-m-d',
        'fecha_fin' => 'required|date_format:Y-m-d',
    ]);

    try {
        $fkTipoEgreso = $request->input('fk_tipo_egreso');
        $fechaInicio = $request->input('fecha_inicio');

        // Establecer la fecha de fin al final del día
        $fechaFin = $request->input('fecha_fin') . ' 23:59:59';

        $egresos = DB::table('egreso')
            ->join('tipos_egreso', 'egreso.fk_tipo_egreso', '=', 'tipos_egreso.id')
            ->join('users', 'egreso.fk_users', '=', 'users.id')
            ->where('egreso.fk_tipo_egreso', '=', $fkTipoEgreso)
            ->whereBetween('egreso.fecha_hora', [$fechaInicio, $fechaFin])
            ->get();
        $pdf = Pdf::loadView('egresos.informePdf', compact('egresos'));
        return $pdf->stream('informe_egresos.pdf');
    } catch (\Exception $e) {
        return redirect()->back()->with('error', 'Hubo un error al procesar la solicitud.');
    }
}



}

