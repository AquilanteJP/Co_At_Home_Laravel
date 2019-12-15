@extends('layouts.app')

@section('content')
<div class="d-flex flex-row flex-wrap">
  <div class="col-lg-2 mr-5 d-none d-xl-block">
    <div class="position-fixed align-self-start col-lg-2 p-2 border bg-light rounded">
      <img class="w-50 mb-3 rounded-circle border border-secondary" src="./img/icons/logoGoogle.png" alt="">
      <h5 class="pl-2">{{Auth::user()->nombres." ".Auth::user()->apellidos}}</h5>
      <hr>
    </div>
  </div>
  <div class="col-lg-6 col-md-12 col-sm-12 p-0">
    <div class="card p-0 mb-3">
        <div class="card-header "> <h5 class="my-0">{{ __('Comparte con nosotros') }}</h5> </div>

        <div class="card-body">
            <form method="POST" action="" enctype="multipart/form-data" class="">
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
        <div class="card border mb-3">
          <div class="card-header">{{ $post->nombres." ".$post->apellidos }}</div>
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


</div>
@endsection
