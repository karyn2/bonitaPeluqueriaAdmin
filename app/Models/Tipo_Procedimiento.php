<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipo_Procedimiento extends Model
{
    protected $table = 'tipos_procedimiento';
    
    protected $primaryKey = 'id_tipo';

    protected $fillable = [
        'nombre_tipo',
    ];

    public function procedimientos()
    {
        return $this->hasMany(Procedimiento::class, 'fk_id_tipo');
    }
}
