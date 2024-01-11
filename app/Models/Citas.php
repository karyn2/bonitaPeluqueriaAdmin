<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Citas extends Model
{
    protected $table = 'citas'; // Nombre de la tabla en la base de datos

    protected $fillable = [
        'identificacion',
        'fecha',
        'hora',
        'id_procedimiento',
        'estado_cita'
    ];

    public $timestamps = true;

    public function fkprocedimiento()
    {
        return $this->belongsTo(Procedimiento::class, 'Procedimiento', 'id_procedimiento');
    }

}
