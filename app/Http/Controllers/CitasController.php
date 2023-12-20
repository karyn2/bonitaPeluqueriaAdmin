<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Citas;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;


class CitasController extends Controller
{
    public function citas(){

        $procedimiento = DB::table('tipos_procedimiento')->get();
        
        $fechaActual = now()->addDay()->toDateString();       
        return view("presentacionServicios.citas", compact('fechaActual', 'procedimiento'));
    }


    public function validarDisponibilidad(Request $request)
    {
        $fecha = $request->input('fecha');
        $hora = $request->input('hora');

        $fechaHoraSeleccionada = Carbon::createFromFormat('Y-m-d H:i', $fecha . ' ' . $hora);
        $horaActual = Carbon::now();

        if ($fechaHoraSeleccionada->lt($horaActual)) {
            return response()->json(['disponible' => false]);
        }

        $citaExistente = DB::table('citas')
            ->where('fecha', $fecha)
            ->where('hora', $hora)
            ->exists();

        if ($citaExistente) {
            return response()->json(['disponible' => false]);
        }

        return response()->json(['disponible' => true]);
    }

    public function form_reg_cita(Request $request){
        try {
            $guid = (string) Str::uuid();
            $cita= new Citas();
            $cita->identificacion = substr($guid, 0, 20);
            $cita->nombre = $request->input('nombres');
            $cita->correo = $request->input('correo');
            $cita->fecha = $request->input('fecha');
            $cita->hora = $request->input('hora');
            $cita->celular = $request->input('celular');
            $cita->procedimiento = $request->input('procedimiento');
            $cita->save();
            //toastr()->success('¡Operación exitosa!', 'success');

            return redirect()->route('bonita_citas')->with('success', 'La cita se registró exitosamente.', 'ÉXITO');
        } catch (QueryException $e) {
            return redirect()->route('bonita_citas')->with('danger', 'Ha ocurrido un error al registrar la cita');
        }
    }

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
