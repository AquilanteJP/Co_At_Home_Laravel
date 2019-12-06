<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Post;
use App\Amigo;

class Usuario extends Model
{
    public function getPosts(){
      return $this->hasMany(Post::class,"user_id","id");
    }
    public function getAmigos(){
      return $this->hasMany(Amigo::class,"usuario1_id","id");
    }
}
