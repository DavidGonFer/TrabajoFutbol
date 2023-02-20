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
    
    public function equipo(){
        return $this->belongsTo(Equipo::class);
    }

    public function adversario(){
        return $this->belongsTo(Adversario::class);
    }

    public function convocatorias(){
        return $this->hasMany(Convocatoria::class,'cod_convocatoria');
    }
}
