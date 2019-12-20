<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\URL;
use App\Post;
use App\User;
class PostController extends Controller
{

  public function index(){
    $informacionPosts = DB::table('users')
                           ->select('users.nombres','users.apellidos', 'users.tipo_registro','users.id', 'posts.id', 'users.foto_usuario','posts.titulo','posts.contenido','posts.like','posts.user_id')
                           ->join('posts','users.id','=','posts.user_id')
                           ->orderBy('posts.id','desc')
                           ->get();
    return view('home')->with('posts', $informacionPosts);
  }

  public function userPosts(){

     $id = Auth::user()->id;
     $posts = DB::table('posts')
                ->select('users.nombres','users.apellidos', 'users.tipo_registro','users.id', 'posts.id', 'users.foto_usuario','posts.titulo','posts.contenido','posts.like','posts.user_id')
                ->join('users','users.id','=','posts.user_id')
                ->where('user_id', '=', $id)
                ->orderBy('posts.id','desc')
                ->get();
     return view('profile')->with('posts', $posts);
  }

  public function borradoDePost($id){
    $varBorrado = DB::table('posts')
                    ->where('id',$id)
                    ->delete();

    return response()->json($varBorrado);

  }

  public function darMg($id, $likes){
      $post = DB::table('posts')
                ->where('id', $id)
                ->update(['like' => $likes+1]);

      return response()->json($post);
  }

  public function crearPost(Request $request){

    $reglasValidacion = [
      'titulo'=> 'required',
      'contenido' => 'required',
      'user_id' => 'required'
    ];
    $mensajesError = [
        'titulo' => 'El título del post no puede estar vacío.',
        'contenido' => 'El contenido del post no puede estar vacío.'

    ];

    $this->validate($request,$reglasValidacion,$mensajesError);
    //dd(Auth::user()->id);
    $postNuevo = new Post($request->all());
    $postNuevo->save();
    return redirect('/home');
  }

  public function returnEditView($id){
    $post = Post::find($id);
    return view('editarPost')->with('post',$post);
  }

  public function actualizarPost(Request $request){
    $datos = $request;
    $post = DB::table('posts')
              ->where('id', $datos->id)
              ->update(['titulo' => $datos->titulo,
                        'contenido' => $datos->contenido
                      ]);
                      return redirect('/home');

  }
}
