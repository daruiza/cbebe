<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BebeLeche extends Model
{
    protected $table = 'bebe_leche';
    protected $fillable= [
        'id',
        'peso',
        'estatura',
        'cantidad',
        'visible',
        'bebe_id',
        'leche_id',
    ];
    use HasFactory;
}
