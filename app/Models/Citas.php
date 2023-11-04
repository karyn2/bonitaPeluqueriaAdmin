<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Citas extends Model
{
    protected $table = 'citas'; // Nombre de la tabla en la base de datos

    protected $fillable = [
        'nombre',
        'correo',
        'celular',
        'fecha',
        'hora',
        'procedimiento',
    ];

    public $timestamps = false; // Desactivar las marcas de tiempo
}
