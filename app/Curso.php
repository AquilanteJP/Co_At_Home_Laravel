<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Curso extends Model
{
   public function getAlumnosCurso(){
     return $this->hasMany(Alumno::class,"user_id","id");
   }

}
