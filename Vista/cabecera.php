<?php
require ("../modelo/conexion.php");
session_start();
if(!isset($_SESSION['usuario'])){
	header('location: ../index.php');
}
//recuperando los datos de la session
$usuario=$_SESSION['usuario'];
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="../css/bulma.min.css">
  	<link rel="stylesheet" href="../css/bulma.css.map">
  	<link rel="stylesheet" href="../css/bulma.css">
  	<link rel="stylesheet" href="../css/css/material-design-iconic-font.css">
  	<link rel="stylesheet" href="../css/css/material-design-iconic-font.min.css">
    <!--script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script-->
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    <!--script src="//ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script-->
    <script>window.jQuery || document.write(unescape('%3Cscript src="/js_folder/jquery-1.6.1.min.js"%3E%3C/script%3E'))</script>
    <title>SOFTRAIN</title>
    <link type="image/x-icon" href="../css/img/softrainicon.png" rel="icon" />
  </head>

	<section class="hero">
  <div class="hero-head">
  <nav class="navbar is-transparent" role="navigation" aria-label="main navigation">
  	<div class="navbar-brand">
    	<a class="navbar-item" href="">
      	<img src="../css/img/logotipo.jpg" width="112" height="28">
    	</a>
    	<div class="card">
  			<header class="card-header">
    			<p class="card-header-title">
      			<?php echo $usuario ?>
    			</p>
  			</header>
			</div>
			<a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
    </a>
  </div>
  <div id="navbarBasicExample" class="navbar-menu">
    <div class="navbar-start">
    </div>
    <div class="navbar-end">
      <div class="navbar-item">
        <div class="buttons">
          <a class="button is-link" href="../controlador/logout.php">
            <strong>Salir del Sistema</strong>
          </a>
        </div>
      </div>
    </div>
  </div>
</nav>
    </div>
      <div class="hero-body">
