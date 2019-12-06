<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ToDo extends Model
{
    public function getUsuarioToDo(){
      return $this->belongsTo(Usuario::class,"user_id","id");
    }
}
