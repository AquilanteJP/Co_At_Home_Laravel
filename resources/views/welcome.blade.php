@extends('layouts.app')

@section('content')
  <div class="d-flex flex-row flex-wrap justify-content-center">
    <section class="col-12">
      <div class="d-none d-xl-block jumbotron jumbotron-fluid p-4 p-md-5 text-white fondoJuan">
        <div class="col-md-6 px-0">
          <h1 class="display-4 text-body">Co Learning at Home</h1>
          <hr class="colorHr">
          <div class="fondo">
            <p class="lead  my-3">Somos una red social encargada de conectarte con el dia a dia de Digital House, encontra tus contactos, tus clases y tus profesores. <br>
            Todo en un solo lugar!</p>
          </div>
        </div>
      </div>
      <div class="row d-flex justify-content-around">
        <div class="d-xl-none col-lg-5 col-md-12 col-sm-12">
          <h1 class="display-4 text-body">Co Learning at Home</h1>
          <hr class="colorHr">
            <p class="lead  my-3">Somos una red social encargada de conectarte con el dia a dia de Digital House, encontra tus contactos, tus clases y tus profesores. <br>
            Todo en un solo lugar!</p>
            <br>
            <br>
        </div>
        <div class="bg-light rounded pt-3 pb-1 mb-3 col-lg-5 col-md-12 col-sm-12">
          <h5 id="preguntas">Preguntas Frecuentes</h5>
          <hr class="colorHr">
          <p class="colorParrafo mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
            commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
          </p>
        </div>
        <div class="bg-light rounded pt-3 pb-1 mb-3 col-lg-6 col-md-12 col-sm-12">
          <h5 id="nosotros">Nosotros</h5>
          <hr class="colorHr">
          <p class="colorParrafo mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
            commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
          </p>
        </div>
      </div>
    </section>
  </div>
@endsection()
