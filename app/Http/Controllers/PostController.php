<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Post;
use App\User;
class PostController extends Controller
{

  public function index(){
    $informacionPosts = DB::table('users')
                           ->select('users.nombres','users.apellidos','users.id', 'users.foto_usuario','posts.titulo','posts.contenido','posts.like')
                           ->join('posts','users.id','=','posts.user_id')
                           ->get();
    return view('home')->with('posts', $informacionPosts);
  }

  public function userPosts(){
    $informacionPosts = DB::table('users')
                           ->select('users.nombres','users.apellidos','users.id', 'users.foto_usuario','posts.titulo','posts.contenido','posts.like')
                           ->join('posts','users.id','=','posts.user_id')
                           ->get();
    return view('profile')->with('posts', $informacionPosts);
  }
}
