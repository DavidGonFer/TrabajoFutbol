<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partido extends Model
{
    use HasFactory;
    protected $fillable = [
        'cod_convocatoria',
        'cod_equipo',
        'cod_adversario',
        'observaciones',
        'duracion',
        'fecha_hora',
    ];
    
    public function equipos(){
        return $this->hasOne(Equipo::class,'cod_equipo','cod_equipo');
    }

    public function adversarios(){
        return $this->hasOne(Adversario::class,'cod_adversario','cod_adversario');
    }

    public function convocatorias(){
        return $this->hasMany(Convocatoria::class);
    }
}
