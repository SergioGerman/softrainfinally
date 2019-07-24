<?php

$nombre= $_POST['nombre'];
$email= $_POST['email'];
$telefono= $_POST['telefono'];
$mensaje=$_POST['mensaje'];

$destinatario="calleluna.sergiogerman@gmail.com";
$asunto="Contacto dese nuestro Sitio Web";

$carta="De: $nombre \n";
$carta .="Correo: $email \n";
$carta .="Telefono: $telefono \n";
$carta .="Mensaje: $mensaje";

mail($destinatario, $asunto, $carta);

?>
