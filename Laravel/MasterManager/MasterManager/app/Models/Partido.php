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
        'logo',
        'logoadversario'
    ];
    
    public function equipos(){
        return $this->belongsTo(Equipo::class,'cod_equipo','cod_equipo');
    }

    public function adversarios(){
        return $this->belongsTo(Adversario::class,'cod_adversario','cod_adversario');
    }

    public function convocatorias(){
        return $this->belongsTo(Convocatoria::class);
    }
}
