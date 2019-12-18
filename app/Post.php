<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Post extends Model
{
    protected $guarded =[];

    public function getUsuarioPost(){
      return $this->belongsTo(User::class,"user_id","id");
    }
}
