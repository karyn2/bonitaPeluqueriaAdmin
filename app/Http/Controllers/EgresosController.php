<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\Egreso;
use Carbon\Carbon;

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
}

