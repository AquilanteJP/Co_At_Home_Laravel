@extends('layouts.app')

@section('content')



  <div class="d-flex flex-wrap justify-content-center">
    <div class="row no-gutters mr-3 col-lg-3 col-md-12 col-sm-12">
      <div class="w-25 text-center">
        <img src="./img/icons/logoGoogle.png" class="card-img rounded align-middle" alt="...">
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
          <div class="card-header">
            {{-- <div class="">
              <img src="" alt="">
            </div> --}}
            {{ Auth::user()->nombres." ".Auth::user()->apellidos }}
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
        </div>
      @endforeach
    </div>
  </div>

@endsection
