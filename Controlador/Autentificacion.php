<?php require('../modelo/conexion.php'); ?>
<!DOCTYPE html>
<html lang="es"
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../css/bulma.min.css">
	<link rel="stylesheet" href="../css/bulma.css.map">
	<link rel="stylesheet" href="../css/bulma.css">
	<link rel="stylesheet" href="../css/icons/material-design-iconic-font.css">

	<!--link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css"-->
	<title>Inicio de Usuario</title>
</head>
<body class="layout-default">
	<section class="hero is-fullheight is-medium has-background-imagen is-bold">
		<div class="hero-body">
			<div class="container">
				<div class="columns is-centered">
					<article class="card is-rounded">
						<div class="card-content">
							<h1 class="title">
								<img src="../css/img/logotipo.jpg" alt="logo" width="250">
							</h1>
							<form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
								<p class="content control has-icons-left">
									<input id="usuario" name="usuario" type="text" class="input is-primary" placeholder="Usuario">
									<span class="icon is-small is-left">
										<i class="zmdi zmdi-check"></i>
									</span>
								</p>
								<p class="content control has-icons-left">
									<input id="password" name="password" type="password" class="input is-primary" placeholder="Password">
									<span class="icon is-small is-left">
      							<i class="zmdi zmdi-check-all"></i>
    							</span>
								</p>
								<p class="control has-icons-left">
									<button class="button is-link is-medium is-fullwidth is-outlined">Ingresar</button>
									<span class="icon is-small is-left">
									<i class=""></i>
								</span>
								</p>
							</form>
						</div>
					</article>
				</div>
			</div>
		</div>
	</section>
</body>
</html>
<?php
	session_start();

	if(isset($_SESSION["usuario"])){
		header("Location: controlador/Formulario.php");
	}

	if(!empty($_POST))
	{
		$usuario = mysqli_real_escape_string($conexion,$_POST['usuario']);
		$password = mysqli_real_escape_string($conexion,$_POST['password']);
		$error = '';

		//$sha1_pass = sha1($password);

		$sql = "SELECT usuario, password FROM usuarios WHERE usuario = '$usuario' AND password = '$password'";
		$result=$conexion->query($sql);
		$rows = $result->num_rows;

		if($rows > 0) {
			$row = $result->fetch_assoc();
			$_SESSION['usuario'] = $row['usuario'];
			$_SESSION['pass'] = $row['password'];

			header("location: Formulario.php");
			} else {
			$error = "El nombre o contraseña son incorrectos";
			echo($error);
		}
	}
?>
