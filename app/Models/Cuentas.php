<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cuentas extends Model
{
    protected $table = 'ingresos'; // Nombre de la tabla en la base de datos

    protected $fillable = [

    ];

    public $timestamps = false; // Desactivar las marcas de tiempo

    use HasFactory;
}
