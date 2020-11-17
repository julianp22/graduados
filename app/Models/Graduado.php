<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Graduado extends Model
{
    protected $fillable = [
        'nombre', 'cedula', 'fecha_grado', 'email', 'num_celular', 'pais_residencia', 'foto'
    ];
}
