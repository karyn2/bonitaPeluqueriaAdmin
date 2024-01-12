<?php

namespace App\Http\Controllers;

use App\Models\Citas;
use App\Models\User;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Log;

class CitasAdminController extends Controller
{
    public function index() {
        $citas = Citas::join('users', 'citas.identificacion', '=', 'users.identificacion')
                       ->join('procedimiento', 'citas.id_procedimiento', '=', 'procedimiento.id_procedimiento')
                       ->select('citas.*', 'users.name', 'users.celular','procedimiento.nombre_procedimiento')
                       ->get();

        return view("citas.lista", ["listaCitas" => $citas]);
    }


    public function form_registro_cita() {
        $servicios = DB::table("procedimiento")->select("id_procedimiento","nombre_procedimiento")->get();
        $usuarios = DB::table("users")->select("identificacion","name")->get();
        return view("citas.form_registro", ["listaServicios" => $servicios], ["listaUsuarios" => $usuarios]);
    }

    public function registrar_cita(Request $request){
        try {
            //validaciones
            $request->validate([
                'usuario' => 'required',
                'fecha' => 'required',
                'hora' => 'required',
                'procedimiento' => 'required',
            ]);

            // Obtener la identificación del usuario seleccionado
            $identificacionUsuario = $request->input('usuario');

            // Buscar al usuario por su identificación
            $usuario = User::where('identificacion', $identificacionUsuario)->first();

            $cita = new Citas();

            // Asignar los valores del usuario a la cita
            $cita->identificacion = $usuario->identificacion;

            //Asignar cita
            $cita->fecha = $request->input('fecha');
            $cita->hora = $request->input('hora');
            $cita->id_procedimiento = $request->input('procedimiento');
            $cita->estado_cita = 0;

            $cita->save();
            return redirect()->route('listaCitas')->with('success', 'La cita se registró exitosamente.', 'ÉXITO');

        } catch (QueryException $e) {
            Log::error($e->getMessage()); // Registrar el error
            return redirect()->back()->with('error', 'Hubo un problema al guardar la cita.');
        }
    }

    public function form_editar_cita($id) {
        $cita = Citas::findOrFail($id);
        $servicios = DB::table("procedimiento")->select("id_procedimiento","nombre_procedimiento")->get();
        $usuarios = DB::table("users")->select("identificacion","name")->get();
        return view("citas.form_editar", [
            "cita" => $cita,
            "listaServicios" => $servicios,
            "listaUsuarios" => $usuarios
        ]);
    }

    public function actualizar_cita(Request $request, $id) {
        try {
            //validaciones
            $request->validate([
                'usuario' => 'required',
                'fecha' => 'required',
                'hora' => 'required',
                'procedimiento' => 'required',
                'estado' => 'required',
            ]);

            // Obtener la identificación del usuario seleccionado
            $identificacionUsuario = $request->input('usuario');

            // Buscar al usuario por su identificación
            $usuario = User::where('identificacion', $identificacionUsuario)->first();

            $cita = Citas::findOrFail($id);

            // Asignar los valores del usuario a la cita
            $cita->identificacion = $usuario->identificacion;

            //Asignar cita
            $cita->fecha = $request->input('fecha');
            $cita->hora = $request->input('hora');
            $cita->id_procedimiento = $request->input('procedimiento');
            $cita->estado_cita = $request->input('estado');

            $cita->save();
            return redirect()->route('listaCitas')->with('success', 'La cita se actualizó exitosamente.', 'ÉXITO');

        } catch (QueryException $e) {
            Log::error($e->getMessage()); // Registrar el error
            return redirect()->back()->with('error', 'Hubo un problema al guardar la cita.');
        }
    }

    public function eliminar_cita($id) {
        try {
            $cita = Citas::findOrFail($id);
            $cita->delete();
            return redirect()->route('listaCitas')->with('success', 'La cita se elimino', 'ÉXITO');
        } catch (QueryException $e) {
            Log::error($e->getMessage()); // Registrar el error
            return redirect()->back()->with('error', 'Hubo un problema al eliminar la cita.');
        }
    }

}
