<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    protected $fillable = [
        'titulo', 'descripcion', 'fecha_inicio', 'fecha_fin', 'foto'
    ];
}
