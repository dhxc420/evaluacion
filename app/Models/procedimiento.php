<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class procedimiento extends Model
{
    
    use HasFactory;
     //definir atributos de la entidad de db
     protected $fillable = ['id', 'nombre', 'precio' ];
}

