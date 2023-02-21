<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partido extends Model
{
    use HasFactory;
    protected $fillable = [
        'cod_convocatoria',
        'observaciones',
        'duracion',
        'fecha_hora',
    ];
    
    public function equipos(){
        return $this->hasOne(Equipo::class,'id','id');
    }

    public function adversarios(){
        return $this->hasOne(Adversario::class,'id','id');
    }

    public function convocatorias(){
        return $this->hasMany(Convocatoria::class);
    }
}
