<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\User;

class UsuarioController extends Controller
{
    public function index()
    {
        $usuarios = DB::table('users')->get(); 
        return view("users.listUsers", ['user'=> $usuarios]);
    }

    public function form_edicion($id){
        $usuario = User::findorFail($id);
        return view('users.form_edicion',compact('usuario'));
    }

    public function editar(Request $request, $id){
        $usuario = User::findorFail($id);
        $usuario->name=$request->input('name');
        $usuario->identificacion=$request->input('identificacion');
        $usuario->celular=$request->input('celular');
        $usuario->email=$request->input('email');
        $usuario->save();
        return redirect()->route('lista_usuarios')->with('success', 'Usuario actualizado.', 'ÉXITO');
    }

    public function eliminar($id){
        $usuario = User::findorFail($id);
        $usuario->delete();
        return redirect()->route('lista_usuarios')->with('success', 'Usuario eliminado.', 'ÉXITO');
    }
}
