<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;
use App\Models\Procedimiento;

class ServiciosController extends Controller
{
    public function index(){
        $servicios = DB::table('tipos_procedimiento')
        ->join('procedimiento', 'tipos_procedimiento.id_tipo', '=', 'procedimiento.fk_id_tipo')
        ->get();
        $tipo_procedimiento = DB::table('tipos_procedimiento')->get();
        return view ('servicios.listarServicio', compact('servicios', 'tipo_procedimiento'));
    }

    public function form_registrar(Request $request)
    {
        if($request->method() === 'GET'){
            $tipo_procedimiento = DB::table('tipos_procedimiento')->get();
            return view('servicios.registrarServicio', compact('tipo_procedimiento'));
        }elseif($request->method() === 'POST'){

                $validator = $request->validate([
                    'nombre_procedimiento' => 'required|string|max:100',
                    'precio' => 'required|integer|gt:0',
                    'fk_id_tipo' => 'required',
                ], [
                    'nombre_procedimiento.required' => 'El campo Nombre del procedimiento es obligatorio.',
                    'nombre_procedimiento.string' => 'El campo Nombre del procedimiento debe ser una cadena de caracteres.',
                    'nombre_procedimiento.max' => 'El campo Nombre del procedimiento no debe exceder los 100 caracteres.',

                    'precio.required' => 'El campo Precio es obligatorio.',
                    'precio.integer' => 'El campo Precio debe ser un número entero.',
                    'precio.gt' => 'El campo Precio debe ser mayor que cero.',

                    'fk_id_tipo.required' => 'Seleccione un tipo de Servicio porfavor!.',
                ]);
                $procedimiento = new Procedimiento();
                $procedimiento->nombre_procedimiento=$request->input('nombre_procedimiento');
                $procedimiento->precio=$request->input('precio');
                $procedimiento->fk_id_tipo=$request->input('fk_id_tipo');
            try{
                $procedimiento->save();
                return redirect()->route('servicios')->with('success', 'Servicio registrado exitosamente');

            }catch(\Exception $e){
                return redirect()->route('form_registrar_servicio')->with('error', 'Ocurrio un error, intentelo de nuevo');
            }

        }
    }

    public function modal_editar(Request $request, $id_procedimiento){
        if($request->method() === 'POST'){
            try{
            $validator = $request->validate([
                'nombre_procedimiento' => 'required|string|max:100',
                'precio' => 'required|integer|gt:0',
                'fk_id_tipo' => 'required',
            ], [
                'nombre_procedimiento.required' => 'El campo Nombre del procedimiento es obligatorio.',
                'nombre_procedimiento.string' => 'El campo Nombre del procedimiento debe ser una cadena de caracteres.',
                'nombre_procedimiento.max' => 'El campo Nombre del procedimiento no debe exceder los 100 caracteres.',

                'precio.required' => 'El campo Precio es obligatorio.',
                'precio.integer' => 'El campo Precio debe ser un número entero.',
                'precio.gt' => 'El campo Precio debe ser mayor que cero.',

                'fk_id_tipo.required' => 'Seleccione un tipo de Servicio porfavor!.',
            ]);
            $procedimiento = Procedimiento::find($id_procedimiento);
            $procedimiento->nombre_procedimiento=$request->input('nombre_procedimiento');
            $procedimiento->precio=$request->input('precio');
            $procedimiento->fk_id_tipo=$request->input('fk_id_tipo');
            
                $procedimiento->save();
                return redirect()->route('servicios')->with('success', 'Servicio actualizado exitosamente');

            } catch (ValidationException $e) {
                return redirect()->route('servicios')->withErrors($e->errors())->withInput();
            } catch (\Exception $e) {
                return redirect()->route('servicios')->with('error', 'Ocurrió un error, inténtelo de nuevo');
            }
        }
    }

}
