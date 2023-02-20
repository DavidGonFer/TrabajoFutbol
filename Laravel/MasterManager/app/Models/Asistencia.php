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
        return $this->belongsTo(Jugadore::class);
    } 

    public function entrenamientos(){
        return $this->hasMany(Entrenamiento::class);
    }
}
