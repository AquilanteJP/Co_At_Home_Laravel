<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Collection;
use App\User;

class Post extends Model
{
    protected $guarded =[];

    public function likes(){
      return $this->hasMany('App\Like');
    }

    public function getUsuarioPost(){
      return $this->belongsTo(User::class,"user_id","id");
    }
}
