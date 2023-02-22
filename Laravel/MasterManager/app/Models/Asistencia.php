<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asistencia extends Model
{
    use HasFactory;
    protected $fillable = [
        'cod_entrenamiento',
        'cod_jugador',
        'asistencia',
        'asistencia_nojustificada'
    ];
    public function jugadores(){
        return $this->belongsTo(Jugadore::class,'cod_jugador','cod_jugador');
    } 

    public function entrenamientos(){
        return $this->belongsTo(Entrenamiento::class,'cod_entrenamiento','cod_entrenamiento');
    }
}
