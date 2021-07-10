<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Profesor extends Model
{
    use HasFactory;
 
    public function clases() {
       return $this->belongsToMany(Clase::class,'impartes', 'p_idprofesor', 'c_codclase', 'id', 'id');
    }
 
    public function aulas() {
       return $this->belongsToMany(Aula::class,'impartes', 'p_idprofesor', 'a_idaula', 'id', 'id');
    }
}
