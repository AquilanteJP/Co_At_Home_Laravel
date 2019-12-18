<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
  public function getCursoAlumno(){
    return $this->belongsTo(Curso::class,"curso_id","id");
  }
}
