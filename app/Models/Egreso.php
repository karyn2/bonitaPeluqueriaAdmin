<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Egreso extends Model
{
    protected $table = 'egreso';

    protected $primaryKey = 'id';

    protected $fillable = [
        'fk_tipo_egreso',
        'descripcion_egreso',
        'fecha_hora',
        'fk_users',
        'a_quien_se_dio',
        'valor',
    ];

    public function tipo()
    {
        return $this->belongTo(Tipo_Egreso::class, 'fk_tipo_egreso');
    }
}
