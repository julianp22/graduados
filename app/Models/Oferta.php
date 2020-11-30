<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Oferta extends Model
{
    protected $fillable = [
        'cargo', 'empresa', 'descripcion', 'salario', 'url'
    ];
}
