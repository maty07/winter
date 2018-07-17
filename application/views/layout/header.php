<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Winter | Movies and Series</title>
	<!-- CSS -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat|Poppins|Roboto" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo base_url(); ?>css/style.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.18/r-2.2.2/datatables.min.css"/>
</head>
<body>
	<nav class="navbar navbar-expand-md navbar-dark bg-dark">
		<div class="container">
      <a class="navbar-brand title" href="<?php echo base_url(); ?>">Winter</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExample04">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="https://example.com" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Explorar</a>
            <div class="dropdown-menu" aria-labelledby="dropdown04">
                <a class="dropdown-item" href="<?php echo base_url(); ?>genero/accion">Accion</a>
                <a class="dropdown-item" href="<?php echo base_url(); ?>genero/animacion">Animación</a>
                <a class="dropdown-item" href="<?php echo base_url(); ?>genero/aventura">Aventura</a>
                <a class="dropdown-item" href="<?php echo base_url(); ?>genero/belico">Bélico</a>
                <a class="dropdown-item" href="<?php echo base_url(); ?>genero/ciencia_ficcion">Ciencia Ficción</a>
                <a class="dropdown-item" href="<?php echo base_url(); ?>genero/comedia">Comedia</a>
                <a class="dropdown-item" href="<?php echo base_url(); ?>genero/documental">Documental</a>
                <a class="dropdown-item" href="<?php echo base_url(); ?>genero/drama">Drama</a>
                <a class="dropdown-item" href="<?php echo base_url(); ?>genero/fantastico">Fantastico</a>
                <a class="dropdown-item" href="<?php echo base_url(); ?>genero/infantil">Infantil</a>
                <a class="dropdown-item" href="<?php echo base_url(); ?>genero/musical">Musical</a>
                <a class="dropdown-item" href="<?php echo base_url(); ?>genero/romance">Romance</a>
                <a class="dropdown-item" href="<?php echo base_url(); ?>genero/terror">Terror</a>
            </div>
          </li>
            <li class="nav-item"><a class="nav-link oculto" style="display: none" href="<?php echo base_url(); ?>movieserie/index">Lista</a>
           </li>
        </ul>
       
        <form action="<?php echo base_url(); ?>home/busqueda" method="GET" class="form-inline my-2 my-md-0">
          <input class="form-control" type="text" name="buscar" placeholder="Buscar">   
          <button type="submit" class="btn btn-secondary"><i class="fas fa-search"></i></button>
        </form>
        <div class="mx-3">
          <a class="btn btn-outline-primary btn-sm logueado" href="<?php echo base_url(); ?>home/login">Iniciar Sesión</a>
          <a class="btn btn-outline-danger btn-sm oculto" style="display: none" href="<?php echo base_url(); ?>home/close_session">Cerrar Sesión</a>
        </div>
        
      </div>
      </div>
    </nav>






	


