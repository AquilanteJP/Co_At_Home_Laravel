<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\URL;

use App\Post;
use App\User;
use App\Like;
class PostController extends Controller
{

  public function index(){
    $posts = Post::select('users.nombres','users.apellidos', 'users.tipo_registro','users.id', 'posts.id', 'users.foto_usuario','posts.titulo','posts.contenido','posts.user_id')
                           ->join('users','posts.user_id','=','users.id')
                          ->orderBy('posts.id','desc')
                          ->get();
                           // ->paginate(5);
                           $likes = Like::where('post_id', '37')
                                               ->inRandomOrder()
                                               ->take(3)
                                               ->get();
    return view('home')->with('posts', $posts)
                        ->with('likes', $likes);
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

  public function darMg($id){
    $post = Like::insert(
        [
          'post_id' => $id,
          'userMG' => Auth::user()->id
        ]
        );
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

  public function test(){
    // $posts = Post::all();
    // foreach ($posts as $post) {
    //   $datos = $post->likes;
    //   $idUser = $datos[0]['userMG'];
    //    $nombreUser = User::where('id', $idUser)
    //             ->select('users.nombres')
    //             ->get();
    //
    //   return $nombreUser[0]['nombres'];
    // }
    // return $likes = Like::where('post_id', '37')
    //                     ->inRandomOrder()
    //                     ->take(3)
    //                     ->get();
    $likes = Like::all()->groupBy('post_id');

                        // ->inRandomOrder()
                         // ->take(3);
    $posts = Post::select('users.nombres','users.apellidos', 'users.tipo_registro','users.id', 'posts.id', 'users.foto_usuario','posts.titulo','posts.contenido','posts.user_id')
                          ->join('users','posts.user_id','=','users.id')
                          // ->join('likes', function($join){
                          //   $join->on('posts.id', '=', 'likes.post_id')
                          //        ->inRandomOrder()
                          //       ->take(3);
                          // })
                                              // ->where('likes.post_id', 'posts.id')
                                              // ->inRandomOrder()
                                              // ->take(3)

                           ->orderBy('posts.id','desc')
                          ->get();
                           // ->paginate(5);
                           // $likes = Like::where('post_id', '37')
                           //
                           //                     ->get();
                           return view('home')->with('posts', $posts)
                                               ->with('likes', $likes);
                                               // return $likes["4"];
  }
}
