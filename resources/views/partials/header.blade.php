<nav class="navbar navbar-expand-md py-0 shadow-sm border bg-light fixed-top">
  <div id="mySidebar" class="sidebar">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">x</a>
    @guest
      <a class="" href="{{ route('welcome') }}">Inicio</a>
      <br>
    <a class="" href="{{ route('login') }}">Log In</a>
    {{-- <a class="" href="#preguntas">Preguntas</a>
    <a class="" href="#nosotros">Nosotros</a>
    <a class="" href="#contacto">Contacto</a> --}}
    <a class="" href="{{ route('register') }}">Registrate</a>
    @else
    <a class="" href="inicio.php">Inicio</a>
    <a class="" href="profile.php">Mi Perfil</a>
    <a class="" href="#">Mis Cursos</a>
    <a class="" href="misAmigos.php">Mis Amigos</a>
    <a class="" href="#buscar">Buscar</a>
    <br>
    <a class="" href="{{ route('logout') }}"
       onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
       {{ __('Logout') }}
    </a>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
          @csrf
    </form>
    <form class="form-inline ml-3">
      @csrf
      <input class="col-form-label-sm form-control mr-sm-2" type="text" placeholder="Usuario,Curso..." aria-label="">
      <button type="submit" class="m-auto botonJuan rounded py-1 d-flex flex-wrap justify-content-center">Buscar</button>
    </form>
    @endguest
  </div>

  <a class="d-none d-xl-block" href="{{ route('welcome') }}"><img id="logo1" class="d-none d-xl-block" src="./img/logo-DH.png" width="225" height="70" alt=""></a>
  <button class="navbar-toggler " type="button" onclick="openNav()" aria-label="Toggle navigation">
    <i class="fas fa-list py-3"></i>
  </button>
  <div class="collapse navbar-collapse" id="navbarGrande">
    @guest

      <a class="text-decoration-none text-secondary ml-3" href="{{ route('login') }}">Log In</a>
      {{-- <a class="text-decoration-none text-secondary ml-3" href="#preguntas">Preguntas</a>
      <a class="text-decoration-none text-secondary ml-3" href="#nosotros">Nosotros</a>
      <a class="text-decoration-none text-secondary ml-3" href="#contacto">Contacto</a> --}}
      <a class="text-decoration-none text-secondary ml-3"href="{{ route('register') }}">Registrate</a>
    @else
      <a class="text-decoration-none text-secondary ml-3" href="{{ route('home') }}">Inicio</a>
      <a class="text-decoration-none text-secondary ml-3" href="profile.php">Mi Perfil</a>
      <a class="text-decoration-none text-secondary ml-3" href="#">Mis Cursos</a>
      <a class="text-decoration-none text-secondary ml-3" href="misAmigos.php">Mis Amigos</a>
      <a class="text-decoration-none text-secondary ml-3" href="{{ route('logout') }}"
         onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">
         {{ __('Logout') }}
      </a>
      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
      </form>
      <form class="form-inline ml-3">
        @csrf
        <input class="col-form-label-sm form-control mr-sm-2" type="text" placeholder="Usuario,Curso..." aria-label="">
        <button type="submit" class="m-auto botonJuan rounded py-1 d-flex flex-wrap justify-content-center">Buscar</button>
      </form>
      <!--<a id="" class="nav-link dropdown-tog" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
              <img width="40px" style="border-radius:40%" src="{{--asset('storage/avatars/'.Auth::user()->avatar)--}}" alt="Avatar">
          {{-- Auth::user()->nombres." ".Auth::user()->apellidos --}} <span class="caret"></span>
      </a>-->
    @endguest
  </div>
</nav>
