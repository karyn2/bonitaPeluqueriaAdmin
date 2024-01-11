<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Validator;


class PresentacionServiciosController extends Controller
{
    public function index()
    {
        $images = [
            'images/img/mujer3.png',
            'images/img/mujer.png',
            'images/img/unas1.png',          
        ];
        return view("presentacionServicios.inicio" , ['images' => $images]);
    }

    public function damas(){
        $cortes = DB::table('tipos_procedimiento')
        ->join('procedimiento', 'tipos_procedimiento.id_tipo', '=', 'procedimiento.fk_id_tipo')
        ->where('tipos_procedimiento.nombre_tipo', '=', 'Cortes y Peinados Damas')
        ->get();

        $colores = DB::table('tipos_procedimiento')
        ->join('procedimiento', 'tipos_procedimiento.id_tipo', '=', 'procedimiento.fk_id_tipo')
        ->where('tipos_procedimiento.nombre_tipo', '=', 'Coloración')
        ->get();

        $lavados = DB::table('tipos_procedimiento')
        ->join('procedimiento', 'tipos_procedimiento.id_tipo', '=', 'procedimiento.fk_id_tipo')
        ->where('tipos_procedimiento.nombre_tipo', '=', 'Lavados')
        ->get();

        $manos = DB::table('tipos_procedimiento')
        ->join('procedimiento', 'tipos_procedimiento.id_tipo', '=', 'procedimiento.fk_id_tipo')
        ->where('tipos_procedimiento.nombre_tipo', '=', 'Manicure')
        ->get();

        $maquillajes = DB::table('tipos_procedimiento')
        ->join('procedimiento', 'tipos_procedimiento.id_tipo', '=', 'procedimiento.fk_id_tipo')
        ->where('tipos_procedimiento.nombre_tipo', '=', 'Maquillaje')
        ->get();

        $tratamientos = DB::table('tipos_procedimiento')
        ->join('procedimiento', 'tipos_procedimiento.id_tipo', '=', 'procedimiento.fk_id_tipo')
        ->where('tipos_procedimiento.nombre_tipo', '=', 'Tratamientos')
        ->get();

        return view ('presentacionServicios.damas', compact('cortes','colores','lavados','manos','maquillajes','tratamientos'));
    }

    public function caballeros()
    {
        return view("presentacionServicios.caballeros");
    }

    public function maquillaje()
    {
        $manicure = DB::table('tipos_procedimiento')
        ->join('procedimiento', 'tipos_procedimiento.id_tipo', '=', 'procedimiento.fk_id_tipo')
        ->where('tipos_procedimiento.nombre_tipo', '=', 'Manicure')
        ->get();

        $maquillaje = DB::table('tipos_procedimiento')
        ->join('procedimiento', 'tipos_procedimiento.id_tipo', '=', 'procedimiento.fk_id_tipo')
        ->where('tipos_procedimiento.nombre_tipo', '=', 'Maquillaje')
        ->get();

        return view ('presentacionServicios.maquillaje', compact('manicure','maquillaje'));
    }

    public function RegistroCliente(){

        return view('presentacionServicios.registroCliente');
    }

    public function registrar(Request $request)
    {
        try {
            $mensajes = [
                'identificacion.unique' => 'La identificación ya está registrada.',
                'email.unique' => 'El correo electrónico ya está registrado.',
            ];

            $request->validate([
            'identificacion' => 'unique:users',
            'email' => 'unique:users',
            ], $mensajes);

            $usuario = new User();
            $usuario->identificacion = $request->input('identificacion');
            $usuario->name = $request->input('name');
            $usuario->email = $request->input('email');
            $usuario->password = Hash::make($request['password']);
            $usuario->celular = $request->input('celular');
            $usuario->role = "user";
            $usuario->save();

            // Iniciar sesión automáticamente después del registro
            Auth::login($usuario);
            return redirect()->route('bonita_inicio')->with('success', 'Su cuenta ha sido creada de manera exitosa', 'ÉXITO');
        } catch (ValidationException $e) {
            return redirect()->route('bonita_registrarme')->withErrors($e->errors())->with('danger', 'Ha ocurrido un error en el registro', 'ERROR');
        }
    }

    
   
}
