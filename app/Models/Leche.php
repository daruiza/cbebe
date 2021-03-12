<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Leche extends Model
{
    protected $table = 'leches';
    protected $fillable= [
        'id',
        'nombre',
        'marca',
        'visible',
    ];
    use HasFactory;
}
