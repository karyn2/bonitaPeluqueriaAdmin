<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipo_Egreso extends Model
{
    protected $table = 'tipos_egreso';

    protected $primaryKey = 'id';

    protected $fillable = [
        'nombre_tipo',
        'estado',
    ];

    public function egresos()
    {
        return $this->hasMany(Egreso::class, 'fk_tipo_egreso');
    }
}
