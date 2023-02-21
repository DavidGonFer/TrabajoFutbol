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
    ];
    public function jugadores(){
        return $this->hasOne(Jugadore::class,'cod_jugador','cod_jugador');
    } 

    public function entrenamientos(){
        return $this->hasOne(Entrenamiento::class,'cod_entrenamiento','cod_entrenamiento');
    }
}
