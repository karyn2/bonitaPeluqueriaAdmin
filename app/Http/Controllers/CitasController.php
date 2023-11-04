<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Citas;
use Illuminate\Support\Facades\DB;

class CitasController extends Controller
{
    public function store(Request $request)
    {
        try {
            // Validar los datos de entrada
            $request->validate([
                'nombres' => 'required',
                'correo' => 'required|email',
                'celular' => 'required',
                'fecha' => 'required',
                'hora' => 'required',
                'procedimiento' => 'required',
            ]);

            $nombre = $request->input('nombres');
            $correo = $request->input('correo');
            $celular = $request->input('celular');
            $fecha = $request->input('fecha');
            $hora = $request->input('hora');
            $procedimiento = $request->input('procedimiento');
            //Guardar la cita en la base de datos
            DB::insert('INSERT INTO citas (nombre, correo, celular, fecha, hora, procedimiento) VALUES (?, ?, ?, ?, ?, ?)', [
                $nombre, $correo, $celular, $fecha, $hora, $procedimiento
            ]);

            return response()->json(['success' => 1, 'message' => 'Su cita ha sido registrada de manera exitosa, 
            Nuestro personal se comunicará con usted un día antes para confirmar la cita o cancelarla, 
            si desea cancelar la cita puede comunicarse a nuestro WhatsApp']);
        } catch (\Exception $e) {
            return response()->json(['success' => 0, 'message' => 'Error al agendar la cita : ' . $e->getMessage()]);
        }
    }
}
