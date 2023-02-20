<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Convocatoria extends Model
{
    use HasFactory;
    use HasFactory;
    protected $fillable = [
        'cod_entrenador',
        'cod_jugador',
        'asistencia',
    ];
    public function jugadores(){
        return $this->belongsTo(Jugadore::class);
    }

    public function partidos(){
        return $this->belongsTo(Partido::class);
    }
}
