@extends('layouts.app')

@section('content')
<div class="d-flex flex-row flex-wrap justify-content-center">
  {{-- <div class="col-lg-2 mr-5 d-none d-xl-block">
    <div class="position-fixed align-self-start col-lg-2 p-2 border bg-light rounded">
      <img class="w-50 mb-3 rounded-circle border border-secondary" src="./img/icons/logoGoogle.png" alt="">
      <h5 class="pl-2">{{Auth::user()->nombres." ".Auth::user()->apellidos}}</h5>
      <hr>
    </div>
  </div> --}}
  <div class="col-lg-6 col-md-12 col-sm-12 p-0">
    <div class="card p-0 mb-3">
        <div class="card-header "> <h5 class="my-0">{{ __('Comparte con nosotros') }}</h5> </div>

        <div class="card-body">
            <form method="POST" action="{{ route('crearPost') }}" enctype="multipart/form-data" class="">
                @csrf
                <div class="form-group column">
                    <label for="titulo" class=" col-form-label text-md-right">{{ __('Titulo') }} </label>

                    <div class="">
                        <input id="titulo" type="text" class="form-control form-control-sm @error('titulo') is-invalid @enderror" name="titulo" value="{{ old('titulo') }}" autocomplete="titulo" >
                        @error('titulo')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group column">
                    <label for="contenido" class="col-form-label text-md-right">{{ __('Contenido') }}</label>
                    <div class="">
                        <input id="contenido" type="text" class="form-control form-control-sm @error('contenido') is-invalid @enderror" name="contenido" value="{{ old('contenido') }}" autocomplete="contenido" >

                        @error('contenido')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                        <input id="user_id" type="hidden" name="user_id" value={{  Auth::user()->id }}>
                        <input id="like" type="hidden" name="like" value=0>
                    </div>
                </div>
                <div class="form-group mb-0">
                    <div class="">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Compartir') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="">
      {{-- listado de posts --}}

      @foreach ($posts as $post)
        <div class="card border mb-3 shadow-lg" id="{{$post->id}}">
          <div class="card-header d-flex">
            <div class="w-25 mr-3">
                <img src="storage\avatars\{{ $post->foto_usuario }}" alt="" class="w-50 d-none d-lg-block rounded-circle">
                <img src="storage\avatars\{{ $post->foto_usuario }}" alt="" class="w-100 d-lg-none d-sm-block rounded-circle">
            </div>
            <div class="w-50 pt-2 d-flex align-items-end list-group list-group-flush">
              <a href="#" class="list-group-item-action"><h5 class="font-weight-bolder">{{ $post->nombres." ".$post->apellidos }}</h5></a>
              <a href="#" class="list-group-item-action"><h6 class="font-weight-bolder muted">
                @if ($post->tipo_registro == "1")
                {{"Docente"}}
              @elseif ($post->tipo_registro == "2")
                {{"No Docente"}}
              @else
                {{"Estudiante"}}
              @endif</h6></a>
            </div>
          </div>
          <div class="card-body">
            <h5 class="card-title">{{ $post->titulo }}</h5>
            <p class="card-text">{{ $post->contenido }}</p>
          </div>
          <div class="card-footer d-flex justify-content-between">
            <small class="text-muted enterleave">
              @if (count($post->likes) == 0 || $post->likes == null)
                {{"A nadie le gusta esto"}}
              @elseif (count($post->likes) == 1)
                A <a href="#">{{$post->likes[0]['nombres']." ".$post->likes[0]['apellidos']}}</a> le gusta esto
              @else
                 <a href="#"> <div class="w-25">
                  <img src="storage\avatars\{{ $post->likes[0]['foto'] }}" class="w-25 rounded-circle" alt="">y {{count($post->likes) - 1}} personas mas
                </div> </a> les gusta esto
              @endif
            </small>
            <div class="d-flex align-items-center">
              <a href="javascript:void(0)" class="text-muted" onclick="darMg({{$post->id}}, {{$post->like}})"><i class="far fa-heart"></i></a>
            </div>
            @if ($post->user_id == Auth::user()->id)
            <div class="d-flex align-items-center">
              <a href="/editarPost{{$post->id}}"  class="text-muted"><i class="far fa-edit"></i></a>
            </div>
            <div class="d-flex align-items-center">
              <a href="javascript:void(0)" onclick="borrarPost({{$post->id}})" class="text-muted"><i class="far fa-trash-alt"></i></a>
            </div>
            @else
            @endif
          </div>
        </div>
      @endforeach
    </div>
    {{-- <div class="">
      {{$posts->links()}}
    </div> --}}
  </div>

</div>
@endsection
