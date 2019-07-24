<?php
require('../modelo/conexion.php');
$id=$_GET['id'];
foreach ($conexion->query("SELECT * from train where id='$id'") as $row){
?>
<!--?php
session_start();
if(!isset($_SESSION['usuario'])){
	header('location: ../index.php');
}
  ?-->
	<html>
  <head>
		<title>subir ficheros</title>
    <link rel="stylesheet" href="../css/upload.css">
	</head>
	<body>
  <table align="center" border='1'>
    <tr>
			<td>Cliente</td>
			<td><?php echo $row['cliente']?></td>
    </tr>
    <tr>
      <td>Consignatario</td>
      <td><?php echo $row['remitConsig']?></td>
    </tr>
    <tr>
      <td>Nro. Registro</td>
      <td><?php echo $row['numRegistro']?></td>
    </tr>
  </table>
  <form method="post" action="../controlador/subirFicheros.php" enctype="multipart/form-data" id="form_subir">
    <input type="hidden" name="id_train" value="<?php echo $row['id'] ?>">
<?php	}?>

    <label for="">Bill of Landing:</label>
    <input type="file" name="fichero" /><br/>

    <div class="barra_azul" id="barra_estado">
      <span></span>
    </div>

<input type="submit" class="btn" value="Enviar"/>
<input type="button" class="cancel" id="cancelar" value="Cancelar"/>
</form>
</body>
<!--script src="../js/upload.js"></script-->
</html>
