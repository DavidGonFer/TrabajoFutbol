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
    public function equipos(){
        return $this->belongsTo(Equipo::class);
    }
    public function asistencia(){
        return $this->hasMany(Asistencia::class, 'cod_jugador');
    }

    public function convocatoria(){
        return $this->hasMany(Convocatoria::class, 'cod_convocatoria');
    }
    public function entrenamientos(){
        return $this->belongsTo(Entrenamiento::class,'cod_entrenamiento');
    }

}
