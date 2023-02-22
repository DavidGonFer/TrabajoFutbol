<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    use HasFactory;
    protected $fillable = [
        'cod_equipo',
        'club',
        'categoria',
        'deporte',
        'temporada',
    ];
    public function jugadores(){
        return $this->hasMany(Jugadore::class);
    }
    public function partidos(){
        return $this->belongsTo(Partido::class);
    }
}
