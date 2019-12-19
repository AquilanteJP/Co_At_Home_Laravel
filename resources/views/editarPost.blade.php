@extends('layouts.app')

@section('content')
  <div class="mt-4 w-100 d-flex justify-content-center">
    <div class="col-lg-6 p-0 mt-5 m-3 w-100 bg-light shadow">

      <form class="p-3 d-flex flex-column" action="" method="post">
        <h5>Cambia el titulo de tu post aquí (no más de 30 caracteres):</h5>
        <input type="text" name="titulo" value="" placeholder="{{$post->titulo}}">
        <hr>
        <h5>Cambia el contenido de tu post aquí (no más de 800 caracteres):</h5>
        <textarea name="contenido" rows="5" cols="" placeholder="{{$post->contenido}}"></textarea>
        <input type="hidden" id="editAceptado" name="editAceptado" value="true">
        <button type="submit" name="editAceptado" class="btn w-25 mt-2 btn-outline-warning">Editar</button>
        <button type="button" class="btn w-25 mt-2  btn-danger" name="editCancelado"><a href="" class="text-decoration-none text-reset">Volver</a></button>

      </form>
    </div>
  </div>
@endsection
