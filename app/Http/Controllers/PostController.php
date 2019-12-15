<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;
class PostController extends Controller
{

  public function index(){
    $posts = Post::all();
    $usuarios = User::pluck('id', 'nombres', 'apellidos');
    return view('home')->with('posts', $posts);
  }
  
}
