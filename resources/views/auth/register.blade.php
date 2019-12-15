@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data" class="">
                        @csrf

                        <div class="form-group row">
                            <label for="nombres" class="col-md-4 col-form-label text-md-right">{{ __('Nombres') }}</label>

                            <div class="col-md-6 ">
                                <input id="nombres" type="text" class="form-control @error('name') is-invalid @enderror" name="nombres" value="{{ old('nombres') }}" autocomplete="nombres" >

                                @error('nombres')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="apellidos" class="col-md-4 col-form-label text-md-right">{{ __('Apellidos') }}</label>

                            <div class="col-md-6 ">
                                <input id="apellidos" type="text" class="form-control @error('apellidos') is-invalid @enderror" name="apellidos" value="{{ old('apellidos') }}" autocomplete="apellidos" >

                                @error('apellidos')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6 ">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="birthdate" class="col-md-4 col-form-label text-md-right">{{ __('Fecha de nacimiento') }}</label>

                            <div class="col-md-6 ">
                                <input id="birthdate" type="date" class="form-control @error('birthdate') is-invalid @enderror" name="birthdate" value="{{ old('birthdate') }}" autocomplete="birthdate" >

                                @error('birthdate')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="genero" class="col-md-4 col-form-label text-md-right">{{ __('Género') }}</label>

                            <div class="col-md-6 ">
                              <div class="form-check">
                                <label for="genero" class="form-check-label">{{ __('Masculino') }}</label>
                                <input id="genero" type="radio" class="@error('genero') is-invalid @enderror" name="genero" value="male" >
                              </div>

                              <div class="form-check ">
                                <label for="genero" class="form-check-label">{{ __('Femenino') }}</label>
                                <input id="genero" type="radio" class="@error('genero') is-invalid @enderror" name="genero" value="female">
                              </div>

                              <div class="form-check ">
                                <label for="genero" class="form-check-label">{{ __('No binario/otro') }}</label>
                                <input id="genero" type="radio" class="@error('genero') is-invalid @enderror" name="genero" value="other" >
                              </div>

                                @error('genero')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="tipoRegistro" class="col-md-4 col-form-label text-md-right">{{ __('Tipo de registro') }}</label>

                            <div class="col-md-6 ">
                              <div class="form-check">
                                <label for="tipoRegistro" class="form-check-label">{{ __('Docente') }}</label>
                                <input id="tipoRegistro" type="radio" class="@error('tipoRegistro') is-invalid @enderror" name="tipoRegistro" value="1" >
                              </div>

                              <div class="form-check ">
                                <label for="tipoRegistro" class="form-check-label">{{ __('No docente') }}</label>
                                <input id="tipoRegistro" type="radio" class="@error('tipoRegistro') is-invalid @enderror" name="tipoRegistro" value="2" >
                              </div>

                              <div class="form-check ">
                                <label for="tipoRegistro" class="form-check-label">{{ __('Estudiante') }}</label>
                                <input id="tipoRegistro" type="radio" class="@error('tipoRegistro') is-invalid @enderror" name="tipoRegistro" value="3">
                              </div>

                                @error('tipoRegistro')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6 ">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6 ">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="foto_usuario" class="col-md-4 col-form-label text-md-right">{{ __('Avatar (opcional)') }}</label>

                            <div class="col-md-6 ">
                                <input id="foto_usuario" type="file" class="form-control @error('foto_usuario') is-invalid @enderror" name="foto_usuario">

                                @error('foto_usuario')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4 ">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
