<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tickets extends Model
{
    use HasFactory;
    protected $fillable = ['Nombre', 'Departamento', 'Edificio', 'Problema', 'Prioridad','Estado','Creacion','Termino'];
}
