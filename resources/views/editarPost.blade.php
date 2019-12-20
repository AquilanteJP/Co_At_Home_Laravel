@extends('layouts.app')

@section('content')
  <div class="d-flex flex-row flex-wrap justify-content-center">
    <div class="col-lg-6 col-md-12 col-sm-12 p-0">
      <div class="card p-0 mb-3">
          <div class="card-header "> <h5 class="my-0">{{ __('Editar Post') }}</h5> </div>

          <div class="card-body">
              <form method="POST" action="{{ route('actualizarPost') }}" enctype="multipart/form-data" class="">
                  @csrf
                  <div class="form-group column">
                      <label for="titulo" class=" col-form-label text-md-right">{{ __('Titulo') }} </label>

                      <div class="">
                          <input id="titulo" type="text" class="form-control form-control-sm" name="titulo"  autocomplete="titulo" placeholder="{{$post->titulo}}">
                          {{-- @error('titulo')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror --}}
                      </div>
                  </div>
                  <div class="form-group column">
                      <label for="contenido" class="col-form-label text-md-right">{{ __('Contenido') }}</label>
                      <div class="">
                          <input id="contenido" type="text" class="form-control form-control-sm @error('contenido') is-invalid @enderror" name="contenido"  autocomplete="contenido" placeholder="{{$post->contenido}}" >

                          {{-- @error('contenido')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror --}}

                          <input id="user_id" type="hidden" name="user_id" value={{  Auth::user()->id }}>
                          <input id="like" type="hidden" name="like" value= {{$post->like}}>
                          <input type="hidden" id="id" name="id" value={{$post->id}}>
                      </div>
                  </div>
                  <div class="form-group mb-0">
                      <div class="">
                          <button type="submit" class="btn btn-primary">
                              {{ __('Guardar') }}
                          </button>
                      </div>
                  </div>
              </form>
          </div>
      </div>
    </div>
  </div>
@endsection
