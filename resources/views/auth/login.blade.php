@extends('layouts.app')

@section('content')
<div class="container .fondoJuan">
    <div class="row justify-content-center">
        <div class="col-md-8">
          <br><br><br>
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <br>
                <div class="form-group row mb-0">
                    <div class="col-md-8 offset-md-4">
                        <p>¿Todavía no estas registrado? <a href="{{ route('register') }}">Registrate.</a></p>
                    </div>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group">
                          <label for="email">Email</label>
                          <div class="col-md-6">
                            <input type="email" value="" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" id="email" required placeholder="Email">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                          </div>
                        </div>

                        <div class="form-group">
                          <label for="password">Contraseña</label>
                          <div class="col-md-6">
                            <input type="password" value="" class="form-control @error('password') is-invalid @enderror" name="password" value="{{ old('password') }}" id="password" required placeholder="Contraseña">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                          </div>
                        </div>

                        <div class="form-group form-check">
                          <input type="checkbox" class="form-check-input" name="recuerdame" id="recuerdame">
                          <label class="form-check-label" for="recuerdame">Recuerdame</label>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">Entrar</button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">¿Olvidaste tu contraseña?<a>
                                @endif
                            </div>
                        </div>
                        <br>
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <p>¿Todavía no estas registrado? <a href="{{ route('register') }}">Registrate.</a></p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
