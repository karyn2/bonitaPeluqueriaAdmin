<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personal extends Model
{
    protected $table = 'personal';
    protected $primaryKey='identificacion';
    public $timestamps = 'true';
    use HasFactory;

    protected $fillable = [
        'identificacion',
        'nombres',
        'apellidos',
        'correo',
        'telefono',
        'cargo',
        'porcentaje_pago'
    ];

    protected $casts = [
        'porcentaje_pago' => 'float',
    ];
}
