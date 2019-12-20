@extends('layouts.app')

@section('content')
<div class="d-flex flex-row flex-wrap justify-content-center">
  <div class="col-lg-6 col-md-12 col-sm-12 p-0">
    <div class="card mb-2 bg-light">
      <div class="input-group ml-3 my-3">
        @csrf
        <input class="rounded" type="text" class="form-control" placeholder="Buscas un amigo?" aria-label="Recipient's username" aria-describedby="button-addon2">
        <div class="input-group-append">
          <button class="btn btn-outline-secondary" type="button" id="button-addon2"><i class="fas fa-search"></i></button>
      </div>
      </div>
      {{-- <div class="d-flex align-items-end">
        <h6>Buscar Amigo: </h6>
      </div>
      <form class="form-inline">
        <input class="form-control mr-sm-2" type="search" placeholder="Nombre" aria-label="Search">
        <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit">Buscar</button>
      </form> --}}
    </div>
    @if($friends==null)
      <section class="w-100 bg-light p-3 border-bottom border-secondary">
        <p class="text-center">Al parecer no tenés amigos :(  ¡Probá agregar uno desde el buscador de arriba!</p>
      </section>
    @else
      @foreach ($friends as $friend)
        <div class="card border mb-3 shadow-lg" id="{{$friend->id}}">
          <div class="card-header d-flex">
            <div class="w-25 mr-3">
                <img src="storage\avatars\{{ $friend->foto_usuario }}" alt="" class="w-50 d-none d-lg-block rounded-circle">
                <img src="storage\avatars\{{ $friend->foto_usuario }}" alt="" class="w-100 d-lg-none d-sm-block rounded-circle">
            </div>
            <div class="w-50 pt-2 d-flex align-items-end list-group list-group-flush">
              <a href="#" class="list-group-item-action"><h5 class="font-weight-bolder">{{ $friend->nombres." ".$friend->apellidos }}</h5></a>
              <a href="#" class="list-group-item-action"><h6 class="font-weight-bolder muted">
                @if ($friend->tipo_registro == "1")
                {{"Docente"}}
              @elseif ($friend->tipo_registro == "2")
                {{"No Docente"}}
              @else
                {{"Estudiante"}}
              @endif</h6></a>
            </div>
          </div>
          <div class="card-body pl-5">
            <a href="#" class="text-decoration-none text-muted"><i class="fas fa-glasses"></i> Ver Perfil</a>
          </div>
          <div class="card-footer d-flex justify-content-between">

          </div>
        </div>
      @endforeach
      @endif
  </div>
</div>

@endsection()
