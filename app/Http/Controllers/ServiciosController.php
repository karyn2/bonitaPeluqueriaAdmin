<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Models\Procedimiento;

class ServiciosController extends Controller
{
    public function index(){
        $servicios = DB::table('tipos_procedimiento')
        ->join('procedimiento', 'tipos_procedimiento.id_tipo', '=', 'procedimiento.fk_id_tipo')
        ->get();
        return view ('servicios.listarServicio', compact('servicios'));
    }

    public function form_registrar(Request $request){
        if($request->method() === 'GET'){
            $tipo_procedimiento = DB::table('tipos_procedimiento')->get();
            return view('servicios.registrarServicio', compact('tipo_procedimiento'));
        }elseif($request->method() === 'POST'){
            $validator = $request->validate([
                'id_procedimiento' => 'required|max:3|unique:Procedimiento,id_procedimiento',
                'nombre_procedimiento' => 'required|string|max:100',
                'precio' => 'required|integer',
                'fk_id_tipo' => 'required',
            ]);

            if($validator->fails()){
                return redirect()->route('form_registrar_servicio')
                ->withErrors($validator)
                ->withInput();
            }

            $procedimiento = new Procedimiento();
            $procedimiento->id_procedimiento=$request->input('id_procedimiento');
            $procedimiento->nombre_procedimiento=$request->input('nombre_procedimiento');
            $procedimiento->precio=$request->input('precio');
            $procedimiento->fk_id_tipo=$request->input('fk_id_tipo');
            $procedimiento->save();
            return redirect()->route('servicios');
        }
    }
}
