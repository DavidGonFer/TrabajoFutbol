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
        'asistencia_nojustificada'
    ];
    public function jugadores(){
        return $this->hasOne(Jugadore::class,'cod_jugador','cod_jugador');
    }

    public function partidos(){
        return $this->hasOne(Partido::class,'cod_convocatoria','cod_jugador');
    }
}
