<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Colearning At Home') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://kit.fontawesome.com/64db3b546b.js"></script>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Open+Sans|Roboto&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Open+Sans|Roboto&display=swap" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/footer.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top py-0 shadow-sm">
          <a class="navbar-brand py-0" href="./logIn.php">
            <img src="./img/logo-DH.png" width="225" height="70" alt="">
          </a>
          <div class="d-flex flex-row justify-content-end">
           @guest
            <div class="d-flex flex-row justify-content-end">
              <div class="px-3">
                <a class="text-decoration-none text-secondary" href="#preguntas">Preguntas</a>
              </div>
              <div class="px-3">
                <a class="text-decoration-none text-secondary" href="#nosotros">Nosotros</a>
              </div>
              <div class="px-3">
                <a class="text-decoration-none text-secondary" href="#contacto">Contacto</a>
              </div>
            </div>
            <div class="w-75">
              <div class="w-50 text-right">
                <a class="text-decoration-none text-secondary"href="./registro.php">Registrate</a>
              </div>
            </div>
           @else
             <div class="px-3">
               <a class="text-decoration-none text-secondary" href="inicio.php">Inicio</a>
             </div>
             <div class="px-3">
               <a class="text-decoration-none text-secondary" href="profile.php">Mi Perfil</a>
             </div>
             <div class="px-3">
               <a class="text-decoration-none text-secondary" href="#">Mis Cursos</a>
             </div>
             <div class="px-3">
               <a class="text-decoration-none text-secondary" href="misAmigos.php">Mis Amigos</a>
             </div>
           </div>
           <div class="px-3  d-flex flex-row justify-content-end flex-grow-1">
             <div class="pl-5">
               <form class="form-inline mb-0">
                 <input class="col-form-label-sm form-control mr-sm-2" type="text" placeholder="Usuario,Curso..." aria-label="">
                 <button type="submit" class="m-auto botonJuan rounded py-1 d-flex flex-wrap justify-content-center">Buscar</button>
               </form>
             </div>
             <div class="pl-3 pt-1">
               <a class="text-decoration-none text-secondary" href="logOut.php">Logout</a>
             </div>
           </div>
           @endguest
        </nav>
                      {{--  @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
               --}}
        <main class="py-4">
            @yield('content')
        </main>
        <footer class="position-static col-12 pt-4 footerJuan">
          <div class="d-flex justify-content-around flex-wrap">
            <div class="col-lg-3 col-md-12 col-sm-12 text-white text-justify">
              <h6 id="nosotros">Nosotros</h6>
              <hr class="">
              <p>
                <small class=""> Somos una red social encargada de conectarte con el dia a dia de Digital House, encontra tus contactos, tus clases y tus profesores, todo en un solo lugar.</small>
              </p>
            </div>
            <div class="col-lg-2 col-md-12 col-sm-12 text-white">
              <h6>Nuestras Redes</h6>
              <hr class="">
              <div class="mb-2">
                <i><img class="icons" src='img/icons/logoFacebook.png' alt=""></i>
                <i><img class="icons" src="img/icons/logoTwitter.png" alt=""></i>
              </div>
              <div class="">
                <i><img class="icons" src="img/icons/logoLinkedin.png" alt=""></i>
                <i><img class="icons" src="img/icons/logoInstagram.png" alt=""></i>
              </div>
            </div>
            <div class="col-lg-7 col-md-12 col-sm-12 text-white text-justify">
              <h6 id="contacto">Contactanos</h6>
              <hr class="">
              <p>
                <small>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                  commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</small>
              </p>
            </div>
          </div>
          <div>
            <hr class="">
              <small>todos los derechos reservados</small>
          </div>
        </footer>
    </div>
</body>
</html>
