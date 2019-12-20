<nav class="navbar navbar-expand-md py-0 shadow-sm border bg-light fixed-top">
  <div id="mySidebar" class="sidebar">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">x</a>
    @guest
    <a class="" href="{{ route('login') }}"><i class="fas fa-sign-in-alt mr-2"></i>Log In</a>
    <a class="" href="{{ route('register') }}"><i class="fas fa-plus-square mr-2"></i>Registrate</a>
    @else
    <a class="" href="{{ route('home') }}"><i class="fas fa-home mr-2"></i>Inicio</a>
    <a class="" href="{{ route('profile')}}"><i class="fas fa-user mr-2"></i>Mi Perfil</a>
    <a class="" href="#"><i class="fas fa-users mr-2"></i>Mis Cursos</a>
    <a class="" href="{{ route('friends')}}"><i class="fas fa-chalkboard-teacher mr-2"></i>Mis Amigos</a>
    <div class="input-group mx-3 pl-3 d-flex">
      @csrf
      <input class="w-50 rounded" type="text" class="form-control" placeholder="Usuario, Curso..." aria-label="Recipient's username" aria-describedby="button-addon2">
      <div class="input-group-append">
        <button class="btn btn-outline-secondary" type="button" id="button-addon2"><i class="fas fa-search"></i></button>
    </div>
    </div>
    <br>
    <a class="" href="{{ route('logout') }}"
       onclick="event.preventDefault();
                document.getElementById('logout-form').submit();"><i class="fas fa-sign-out-alt mr-2"></i>
       {{ __('Logout') }}
    </a>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
          @csrf
    </form>

    @endguest
  </div>

  <a class="d-none d-xl-block" href="{{ route('welcome') }}"><img id="logo1" class="d-none d-xl-block" src="./img/logo-DH.png" width="225" height="70" alt=""></a>
  <button class="navbar-toggler " type="button" onclick="openNav()" aria-label="Toggle navigation">
    <i class="fas fa-list py-3"></i>
  </button>
  <div class="collapse navbar-collapse" id="navbarGrande">
    @guest

      <a class="text-decoration-none text-secondary ml-3" href="{{ route('login') }}"><i class="fas fa-sign-in-alt mr-2"></i>Log In</a>
      <a class="text-decoration-none text-secondary ml-3"href="{{ route('register') }}"><i class="fas fa-plus-square mr-2"></i>Registrate</a>
    @else
      <a class="text-decoration-none text-secondary ml-3" href="{{ route('home') }}"><i class="fas fa-home mr-2"></i>Inicio</a>
      <a class="text-decoration-none text-secondary ml-3" href="{{ route('profile')}}"><i class="fas fa-user mr-2"></i>Mi Perfil</a>
      <a class="text-decoration-none text-secondary ml-3" href="#"><i class="fas fa-users mr-2"></i>Mis Cursos</a>
      <a class="text-decoration-none text-secondary ml-3" href="{{ route('friends')}}"><i class="fas fa-chalkboard-teacher mr-2"></i>Mis Amigos</a>
      <div class="input-group input-group-sm ml-3 w-50">
        @csrf
        <input class="rounded" type="text" class="form-control" placeholder="Usuario, Curso..." aria-label="Recipient's username" aria-describedby="button-addon2">
        <div class="input-group-append">
          <button class="btn btn-outline-secondary" type="button" id="button-addon2"><i class="fas fa-search"></i></button>
      </div>
      </div>
      <a class="text-decoration-none text-secondary ml-3" href="{{ route('logout') }}"
         onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();"><i class="fas fa-sign-out-alt mr-2"></i>
         {{ __('Logout') }}
      </a>
      {{-- <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
      </form> --}}
    @endguest
  </div>
</nav>
