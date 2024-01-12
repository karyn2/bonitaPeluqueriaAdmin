<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Cuentas extends Model
{
    protected $table = 'ingresos'; // Nombre de la tabla en la base de datos

    protected $primaryKey='id_ingresos';

    protected $fillable = [
        'pago',
        'fk_id_procedimiento',
        'fk_id_identificacion',
    ];

    public $timestamps = false;

    use HasFactory;

    public function personal() {
        return $this->belongsTo(Personal::class, 'fk_identificacion', 'identificacion');
    }

    public function servicio() {
        return $this->belongsTo(Servicio::class, 'fk_id_procedimiento', 'id_procedimiento');
    }

    public function mostrarServicioPersonal () {
        $ingresos = DB::table("ingresos")
        ->join('procedimiento', 'ingresos.fk_id_procedimiento', '=', 'procedimiento.id_procedimiento')
        ->join('personal', 'ingresos.fk_identificacion', '=', 'personal.identificacion')
        ->select('ingresos.*', 'procedimiento.nombre_procedimiento', 'personal.nombres', 'personal.apellidos')
        ->get();
        return $ingresos;
    }

    public function mostrarServicioPersonalPorId($id_ingreso) {
        $ingreso = DB::table("ingresos")
            ->join('procedimiento', 'ingresos.fk_id_procedimiento', '=', 'procedimiento.id_procedimiento')
            ->join('personal', 'ingresos.fk_identificacion', '=', 'personal.identificacion')
            ->select('ingresos.*', 'procedimiento.nombre_procedimiento', 'personal.nombres', 'personal.apellidos')
            ->where('ingresos.id_ingresos', $id_ingreso)
            ->first();
        return $ingreso;
    }


}
