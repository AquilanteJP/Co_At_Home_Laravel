<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Amigo;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class AmigoController extends Controller
{
    public function mostrarAmigos(){
      $id = Auth::user()->id;
      $friends = DB::table('users')
                  ->leftJoin('amigos','users.id', '=', 'amigos.usuario2_id')
                  ->where('amigos.usuario1_id', '=' ,$id)
                  ->get();
      return view('friends')->with('friends',$friends);
    }
}
