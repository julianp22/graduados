<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experiencia extends Model
{
    protected $fillable = [
        'graduado_id', 'url_video', 'descripcion'
    ];
}
