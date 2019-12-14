<nav class="navbar navbar-expand-md py-0 shadow-sm border bg-light" id="navegador">
  <div id="mySidebar" class="sidebar">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">x</a>
    @guest
    <a class="" href="#logIn">Log In</a>
    <br>
    <a class="" href="#preguntas">Preguntas</a>
    <a class="" href="#nosotros">Nosotros</a>
    <a class="" href="#contacto">Contacto</a>
    <a class=""href="./registro.php">Registrate</a>
    @else
    <a class="" href="inicio.php">Inicio</a>
    <a class="" href="profile.php">Mi Perfil</a>
    <a class="" href="#">Mis Cursos</a>
    <a class="" href="misAmigos.php">Mis Amigos</a>
    <a class="" href="#buscar">Buscar</a>
    <br>
    <a class="" href="logOut.php">Logout</a>
    @endguest
  </div>
  <img id="logo1" class="d-none d-xl-block" src="./img/logo-DH.png" width="225" height="70" alt="">
  <button class="navbar-toggler " type="button" onclick="openNav()" aria-label="Toggle navigation">
    <i class="fas fa-list py-3"></i>
  </button>
  <div class="collapse navbar-collapse" id="navbarGrande">
    @guest
      <a class="text-decoration-none text-secondary ml-3" href="#logIn">Log In</a>
      <a class="text-decoration-none text-secondary ml-3" href="#preguntas">Preguntas</a>
      <a class="text-decoration-none text-secondary ml-3" href="#nosotros">Nosotros</a>
      <a class="text-decoration-none text-secondary ml-3" href="#contacto">Contacto</a>
      <a class="text-decoration-none text-secondary ml-3"href="./registro.php">Registrate</a>
    @else
    <a class="text-decoration-none text-secondary ml-3" href="inicio.php">Inicio</a>
    <a class="text-decoration-none text-secondary ml-3" href="profile.php">Mi Perfil</a>
    <a class="text-decoration-none text-secondary ml-3" href="#">Mis Cursos</a>
    <a class="text-decoration-none text-secondary ml-3" href="misAmigos.php">Mis Amigos</a>
    <form class="form-inline mb-0">
      <input class="col-form-label-sm form-control mr-sm-2" type="text" placeholder="Usuario,Curso..." aria-label="">
      <button type="submit" class="m-auto botonJuan rounded py-1 d-flex flex-wrap justify-content-center">Buscar</button>
    </form>
    <div class="pl-3 pt-1">
      <a class="text-decoration-none text-secondary" href="logOut.php">Logout</a>
    </div>
  @endguest
  </div>
</nav>
