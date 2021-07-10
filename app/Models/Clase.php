<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Clase extends Model
{
    use HasFactory;
    public function profesors() {
        return $this->belongsToMany(Profesor::class,'impartes', 'c_codclase', 'p_idprofesor', 'id', 'id');
     }
  
     public function aulas() {
        return $this->belongsToMany(Aula::class,'impartes', 'c_codclase', 'a_idaula', 'id', 'id');
     }
}
