@extends('layouts.app')

@section('content')



  <div class="d-flex flex-wrap justify-content-center">
    <div class="row no-gutters mr-3 col-lg-3 col-md-12 col-sm-12">
      <div class="w-25 text-center">
        <img src="storage\avatars\{{ Auth::user()->foto_usuario }}" class="card-img rounded-circle align-middle" alt="...">
      </div>
      <div class="w-75">
        <div class="card-body">
          <h5 class="card-title">Nombre</h5>
          <p class="card-text"></p>
          <p class="card-text"><small class="text-muted">Editar Perfil</small></p>
        </div>
      </div>
    </div>
    <div class="col-lg-6 col-md-12 col-sm-12 p-0">
      @foreach ($posts as $post)
        <div class="card border mb-3">
          <div class="card-header d-flex">
            <div class="w-25 mr-3">
                <img src="storage\avatars\{{ $post->foto_usuario }}" alt="" class="w-50 d-none d-lg-block rounded-circle">
                <img src="storage\avatars\{{ $post->foto_usuario }}" alt="" class="w-100 d-lg-none d-sm-block rounded-circle">
            </div>
            <div class="w-75 pt-2 d-flex align-items-end list-group list-group-flush">
              <a href="#" class="list-group-item-action"><h5 class="font-weight-bolder">{{ $post->nombres." ".$post->apellidos }}</h5></a>
              <a href="#" class="list-group-item-action"><h6 class="font-weight-bolder muted">Curso Activo</h6></a>
            </div>
          </div>
          <div class="card-body">
            <h5 class="card-title">{{ $post->titulo }}</h5>
            <p class="card-text">{{ $post->contenido }}</p>
          </div>
          <div class="card-footer">
            <small class="text-muted">
              @if ($post->like == "0")
                {{"A nadie le gusta esto"}}
              @elseif ($post->like == "1")
                {{"A ".$post->like." persona le gusta esto"}}
              @else
                {{"A ".$post->like." personas le gusta esto"}}
              @endif
            </small>
          </div>
        </div
      @endforeach
    </div>
  </div>

@endsection
