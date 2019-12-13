<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Amigo extends Model
{
    public function getUsuarioAmigo(){
      return $this->belongsTo(User::class,"user_id","id");
    }
}
