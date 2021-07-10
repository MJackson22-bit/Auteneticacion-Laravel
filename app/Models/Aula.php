<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Aula extends Model
{
    use HasFactory;
    public function clases() {
        return $this->belongsToMany(Clase::class,'impartes', 'a_idaula', 'c_codclase', 'id', 'id');
     }
  
     public function profesors() {
        return $this->belongsToMany(Profesor::class,'impartes', 'a_idaula', 'p_idprofesor', 'id', 'id');
     }
}
