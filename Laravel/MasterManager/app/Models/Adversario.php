<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adversario extends Model
{
    use HasFactory;
    protected $fillable = [
        'clubs',
        'categoria',
        'deporte',
        'temporada',
    ];
    public function adversarios(){
        return $this->hasMany(Partido::class);
    }
}
