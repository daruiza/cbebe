<?php

namespace App\Models;

use Carbon\Carbon;
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

    public function setBebe($request){
        $this->nombre = $request->input('nombre') ? $request->input('nombre') : $this->nombre;
        $this->identificacion = $request->input('identificacion') ? $request->input('identificacion') : $this->identificacion;
        $this->fecha_nacimiento = $request->input('fecha_nacimiento') ? $request->input('fecha_nacimiento') : $this->fecha_nacimiento;
        $this->visible = $request->input('visible') ? $request->input('visible') : $this->visible;
    }
}
