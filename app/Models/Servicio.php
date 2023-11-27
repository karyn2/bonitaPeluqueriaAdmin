<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    use HasFactory;

    protected $table = 'procedimiento'; // Nombre de la tabla en la base de datos

    protected $primaryKey='id_procedimiento';

    public $timestamps = true;


}
