<?php

$destinatario = 'eddiesantiago122007@gmail.com'
//Correo Al que se Enviara el Mensaje
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];

$header = "Enviado desde la Pagina de Aprende Codigo";
$mensajecompleto = $mensaje . "\nAtentamente: " . $nombre;

mail($destinatario, $email, $mensajecompleto, $header);
echo "<script>alert('correo enviado exitosamente')</script>";
echo "<script> setTimeout(\"location.href='../index.html'\",1000)</script>";
?>