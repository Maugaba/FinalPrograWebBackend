<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tarea extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'descripcion', 'curso', 'fecha_entrega', 'estado'];

    public function setNombreAttribute($value)
    {
        $this->attributes['nombre'] = strtoupper($value);
    }

    public function getDescripcionAttribute($value)
    {
        return ucfirst($value);
    }
}
