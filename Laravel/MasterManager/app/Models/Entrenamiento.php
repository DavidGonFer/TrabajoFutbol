<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entrenamiento extends Model
{
    use HasFactory;
    protected $fillable = [
        'cod_entrenamiento',
        'observaciones',
        'fecha_hora',
        'duracion',
    ];
    public function jugadores(){
        return $this->belongsTo(Entrenamiento::class,'cod_jugador');
    }

}
