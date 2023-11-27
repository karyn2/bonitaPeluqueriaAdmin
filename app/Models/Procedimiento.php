<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Procedimiento extends Model
{
    protected $table = 'procedimiento';

    protected $primaryKey = 'id_procedimiento';

    protected $fillable = [
        'nombre_procedimiento',
        'precio',
        'fk_id_tipo',
    ];

    public function tipo()
    {
        return $this->belongTo(Tipo_Procedimiento::class, 'fk_id_tipo');
    }
}
