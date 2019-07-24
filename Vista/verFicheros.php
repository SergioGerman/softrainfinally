<?php
require('../modelo/conexion.php');
?>
<?php

$id_train=$_GET['id'];
    foreach ($conexion->query("SELECT *	from train where id='$id_train'") as $row2){
      $rutaFS=$row2["facSoftrain"];
      $rutaFA=$row2["facturaApoyo"];
?>
<form method="post" action="../controlador/subirFicheros.php" enctype="multipart/form-data" id="form_subir">
  <input type="hidden" name="id_train" value="<?php echo $id_train ?>">
    <?php
      if(!empty($rutaFS) && !empty($rutaFA)){ //estan las facturas llenas
    ?>
    <div class="box">
    <div class="container">
      <div class="notification">
        <p class="title">Factura Softrain</p>
        <nav class="level">
          <div class="level-left">
            <div class="level-item">
              <p class="subtitle has-text-info"><?php echo $rutaFS ?></p>
            </div>
            <div class="level-item">
              <a class="button is-small is-warning" href="../controlador/eliminarArchivo.php?idFS=<?php echo $row2['id']; ?>&rutaFS=<?php echo $row2['facSoftrain']; ?>">Eliminar</a>
            </div>
          </div>
        </nav>
        <iframe width="560" height="315" src="../Ficheros/<?php echo $rutaFS; ?>"></iframe>
      </div>
    </div>
    </div>
      <div class="box">
      <div class="container">
        <div class="notification">
          <p class="title">Factura Apoyo</p>
          <nav class="level">
            <div class="level-left">
              <div class="level-item">
                <p class="subtitle has-text-info"><?php echo $rutaFA; ?></p>
              </div>
              <div class="level-item">
                <a  class="button is-small is-warning" href="../controlador/eliminarArchivo.php?idFA=<?php echo $row2['id']; ?>&rutaFA=<?php echo $row2['facturaApoyo']; ?>">Eliminar</a>
              </div>
            </div>
          </nav>
          <iframe width="560" height="315" src="../Ficheros/<?php echo $rutaFA; ?>"></iframe>
          <p class="control">
          </p>
        </div>
      </div>
    </div>
    <?php
  }elseif(!empty($rutaFS) && empty($rutaFA) ){//si fac. apoyo esta vacio y fac. softrain esta llena
    ?>
    <div class="box">
      <div class="container">
        <div class="notification">
          <p class="title">Factura Softrain</p>
          <nav class="level">
            <div class="level-left">
              <div class="level-item">
                <p class="subtitle has-text-info"><?php echo $rutaFS; ?></p>
              </div>
              <div class="level-item">
                <a class="button is-small is-warning" href="../controlador/eliminarArchivo.php?idFS=<?php echo $row2['id']; ?>&rutaFS=<?php echo $row2['facSoftrain']; ?>">Eliminar</a>
              </div>
            </div>
          </nav>
          <iframe width="560" height="315" src="../Ficheros/<?php echo $rutaFS; ?>"></iframe>
          <p class="control">
        </p>
        </div>
      </div>
    </div>
    <div class="box">
      <div class="container">
        <div class="notification">
          <p class="title">Factura Apoyo</p>
          <p class="subtitle has-text-info">No existe ningun archivo.</p>
        </div>
      </div>
    </div>
    <?php
  }elseif(!empty($rutaFA) && empty($rutaFS)){//si fac. apoyo esta llena y fac. SofTrain esta vacia
    ?>
    <div class="box">
      <div class="container">
        <div class="notification">
          <p class="title">Factura SofTrain</p>
          <p class="subtitle has-text-info">No existe ningun archivo.</p>
        </div>
        </div>
      </div>
      <div class="box">
      <div class="container">
        <div class="notification">
          <p class="title">Factura Apoyo</p>
          <nav class="level">
          <div class="level-left">
            <div class="level-item">
              <p class="subtitle has-text-info"><?php echo $rutaFA; ?></p>
            </div>
            <div class="level-item">
              <a class="button is-small is-warning" href="../controlador/eliminarArchivo.php?idFA=<?php echo $row2['id']; ?>&rutaFA=<?php echo $row2['facturaApoyo']; ?>">eliminar</a>
            </div>
          </div>
        </nav>
          <iframe width="560" height="315" src="../Ficheros/<?php echo $rutaFA; ?>"></iframe>
        </div>
      </div>
    </div>
    <?php
  }else{//Cuando estan vacios las do facturas
    ?>
    <div class="box">
    <div class="container">
      <div class="notification">
        <p class="title">
          Factura Softrain
        </p>
        <p class="subtitle has-text-info">No existe ningun archivo.</p>
      </div>
    </div>
  </div>
  <div class="box">
    <div class="container">
      <div class="notification">
        <p class="title">
          Factura Apoyo
        </p>
        <p class="subtitle has-text-info">No existe ningun archivo.</p>
      </div>
    </div>
  </div>
<?php
  }
?>
    <?php
}
?>
<div class="box">
  <div class="container">
    <div class="notification">
      <p class="title">Bill of Landing</p>
      <div class="content">
        <ul class="">
      <?php
      $id_train=$_GET['id'];
      foreach ($conexion->query("SELECT *	from Ficheros where id_train='$id_train'") as $row){
        ?>
      <li>
        <nav class="level">
          <div class="level-left">
            <div class="level-item has-text-info">
              <a href="mostrarBill.php?id=<?php echo $row['id'] ?>"><?php echo $row['nombre']?></a>
            </div>
            <div class="level-item">
              <a class="button is-warning is-small" href="../controlador/eliminarArchivo.php?id=<?php echo $row['id']; ?>&ruta=<?php echo $row['ruta']; ?>&id_train=<?php echo $id_train; ?>">Eliminar</a>
            </div>
          </div>
        </nav>
      </li>
      <?php
    }
    ?>
  </ul>
      </div>
      <input type="file" name="fichero" />
    </div>
    <button class="button is-success">Subir el Bill Of Landing</button>
  </form>
  </div>
</div>
