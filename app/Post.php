<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function getUsuarioPost(){
      return $this->belongsTo(Usuario::class,"user_id","id");
    }
}
