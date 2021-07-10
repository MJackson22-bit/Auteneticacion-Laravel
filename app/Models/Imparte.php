<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\Pivot;

class Imparte extends Pivot
{
    use HasFactory;
    protected $table = "impartes";

    public function profesor() {
      return $this->belongsTo(Profesor::class, 'p_idprofesor', 'id');
    }

    public function clase() {
      return $this->belongsTo(Clase::class, 'c_codclase', 'id');
   }

   public function aula() {
      return $this->belongsTo(Aula::class, 'a_idaula', 'id');
   }
}
