<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jugadore extends Model
{
    use HasFactory;
    protected $fillable = [
        'cod_jugador',
        'cod_convocatoria',
        'observaciones',
        'telefono',
        'apellidos',
        'nombre',
        'fecha_nacimiento',
    ];
}
