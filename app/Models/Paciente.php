<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    use HasFactory;
     //definir atributos de la entidad de db
     protected $fillable = ['documento', 'tipoDOcumento', 'nombres', 'apellidos', 'direccion', 'telefono', 'genero', 'fechaNacimiento', 'estadoCivil' ];
}
