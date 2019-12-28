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
                           // $likes = Like::select('userMG')
                           // ->groupBy('post_id');
  //return view('home')->with('posts', $posts);
    //                     ->with('likes', $likes);
    foreach ($posts as $post) {

      if (count($post->likes) !== 0) {
        $arrayDatos = [];
          for ($i=0; $i <count($post->likes) ; $i++) {
            $userLike = $post->likes[$i]["userMG"];
            $datosUser = User::select('nombres', 'apellidos', 'foto_usuario')->where('id', $userLike)->get();
            $arrayDeUser = [
              'nombres' => $datosUser[0]['nombres'],
              'apellidos' => $datosUser[0]['apellidos'],
              'foto' => $datosUser[0]['foto_usuario']
            ];
            array_push($arrayDatos, $arrayDeUser);

            }
            $post->likes = $arrayDatos;
          //   var_dump($post->likes);
          // echo "fin del post <br>";
        }
        // elseif (count($post->likes) !== 0 && count($post->likes) < 3) {
        //   $arrayDatos = [];
        //     for ($i=0; $i <1 ; $i++) {
        //       $userLike = $post->likes[$i]["userMG"];
        //       $datosUser = User::select('nombres', 'apellidos', 'foto_usuario')->where('id', $userLike)->get();
        //       $arrayDeUser = [
        //         'nombres' => $datosUser[0]['nombres'],
        //         'apellidos' => $datosUser[0]['apellidos'],
        //         'foto' => $datosUser[0]['foto_usuario']
        //       ];
        //       array_push($arrayDatos, $arrayDeUser);
        //
        //       }
        //       $post->likes = $arrayDatos;
        //       // var_dump($post->likes);
        //       // echo "fin del post <br>";
        // }
       else {
         // echo "post sin likes <br>";
      }

    }
    return view('home')->with('posts', $posts);
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

  public function likes($likes){

    if (count($post->likes) !== 0 && count($post->likes) > 3) {
      $arrayDatos = [];
        for ($i=0; $i <3 ; $i++) {
          $userLike = $post->likes[$i]["userMG"];
          $datosUser = User::select('nombres', 'apellidos', 'foto_usuario')->where('id', $userLike)->get();
          $arrayDatos = array_push($arrayDatos, $datosUser);
        }
        var_dump($arrayDatos);
      }
      elseif (count($post->likes) !== 0 && count($post->likes) < 3) {
        for ($i=0; $i <1 ; $i++) {
          $userLike = $post->likes[$i]["userMG"];
          echo  User::select('nombres', 'apellidos', 'foto_usuario')->where('id', $userLike)->get();
        }
        echo "<br>";
      }
     else {

    }
   }
}
