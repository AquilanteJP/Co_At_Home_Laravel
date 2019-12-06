@extends('layouts.app')

@section('content')
  <div class="container-fluid m-0 p-0 d-flex flex-row flex-wrap -all">
  <section class="col-9 d-none d-md-block d-lg-block vh-100 mt-5 p-auto shadow imagen fondoJuan">
    <!-- <img class="w-75 ml-4 mt-3 dh" src="img/logo-DH.png" alt=""> -->
    <article class="pl-5 pt-5 mt-5 mr-5">
      <div class="w-50 mt-5 colearning">
        <h1 class="subTitulo">Colearning at Home</h1>
      </div>
      <div class="w-75 primeraInfo">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
          Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </div>
    </article>
  </section>
  <header class="col-lg-3 col-md-3 col-sm-12 p-3 mt-5 vh-100 bg-light shadow info">
    <hr>
    <h2 class="	d-md-none d-lg-none subTitulo">Colearning at Home</h2>
    <br>
    <h5>Log In</h5>
      <div class="">
        <form method="POST" action="{{ route('login') }}">
          @csrf
          <div class="form-group">
            <label for="email">Email</label>
            <div class="">
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
            <div class="">
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
            <div class="mx-3">
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
    <div>
      <li class="noPunto"><a class="opcionesfooter" href="#preguntas">Preguntas Frecuentes</a></li>
      <li class="noPunto"><a class="opcionesfooter" href="#nosotros">Nosotros</a></li>
      <li class="noPunto"><a class="opcionesfooter" href="#contacto">Contacto</a></li>
    </div>
    <br>
    <hr>
  </header>
  <section class="clearflix row p-3 m-0 border-top fAQ">
    <div class="col-lg-6 col-md-12 col-sm-12">
      <h5 id="preguntas">Preguntas Frecuentes</h5>
      <hr class="colorHr">
      <p class="colorParrafo">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
        commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        <a href="#">Volver</a>
      </p>
    </div>
    <div class="col-lg-6 col-md-12 col-sm-12">
      <h5 id="nosotros">Nosotros</h5>
      <hr class="colorHr">
      <p class="colorParrafo">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
        commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        <a href="#">Volver</a>
      </p>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12">
      <h5 id="contacto">Contacto</h5>
      <hr class="colorHr">
      <p class="colorParrafo">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
        commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        <a href="#">Volver</a>
      </p>
      <form class="p-3 colorParrafo ">
        <div class="form-group px-auto d-flex flex-wrap justify-content-center">
          <label for="email" class="w-100">Email</label>
          <input type="email" class="form-control w-75" id="email" placeholder="Email">
        </div>
        <div class="d-flex flex-wrap justify-content-center">
          <label for="contact" class="w-100">Contactanos</label>
          <textarea name="contact" class="form-control w-75" rows="8" cols="80"></textarea>
        </div>
        <br>
        <button type="submit" class="w-75 m-auto botonJuan rounded py-2 d-flex flex-wrap justify-content-center">Enviar</button>
      </form>
    </div>
  </section>
</div>
@endsection()
