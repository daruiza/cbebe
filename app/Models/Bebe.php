<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bebe extends Model
{
    protected $table = 'bebes';
    protected $fillable = [
        'id',
        'nombre',
        'identificacion',
        'fecha_nacimiento',
        'visible'
    ];
    use HasFactory;
}
