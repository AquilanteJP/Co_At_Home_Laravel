@extends('layouts.app')

<div class="">

<nav class="navbar navbar-light bg-light w-100 mb-2">
  <a class="navbar-brand pl-5">Buscar Amigo:</a>
  <form class="form-inline">
    <input class="form-control mr-sm-2" type="search" placeholder="Nombre" aria-label="Search">
    <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit">Buscar</button>
  </form>
</nav>
<div class="d-flex flex-row flex-wrap w-100 justify-content-around">
@if ($condition)
  <section class="w-100 bg-light p-3 border-bottom border-secondary">
    <p class="text-center">Al parecer no tenés amigos :(  ¡Probá agregar uno desde el buscador de arriba!</p>
  </section>
@endif

<?php else: ?>
<?php foreach ($listaAmigos as $amigo):?>
  <div class="card mb-3" style="max-width: 540px;">
    <div class="row no-gutters">
      <div class="col-md-4">
        <img src="profilePics/<?=$amigo['foto_usuario']?$amigo['foto_usuario']:"generic.jpg"?>" class="card-img" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title"><?=$amigo['nombres']." ".$amigo['apellidos']?></h5>
          <p class="card-text">Curso:</p>
          <button type="button" class="btn btn-dark">Ver Amigo</button>
        </div>
      </div>
    </div>
  </div>
<?php endforeach; ?>
<?php endif; ?>
</div>