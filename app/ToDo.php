<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class ToDo extends Model
{
    public function getUsuarioToDo(){
      return $this->belongsTo(User::class,"user_id","id");
    }
}
