<?php
$nombre = $_POST ["campo-nombre"];
$telefono = $_POST ["campo-telefono"];
$direccion = $_POST ["campo-dirección"];
$mail = $_POST ["campo-mail"];
$mensaje = $_POST ["text"];

$mensaje = "Este mensaje fue enviado por " , $nombre , ",/r/n";
$mensaje .= "Su telefono es " , $telefono , ",/r/n";
$mensaje .= "Su direccion es " , $direccion , ",/r/n";
$mensaje .= "Su e-mail es " , $mail , ",/r/n";
$mensaje .= "Mensaje " , $_POST["text"] , ",/r/n";
$mensaje -= "Mensaje enviado el" , date(d,m,Y , time());

$para = "pame_he@hotmail.com";
$asunto = "Este mensaje fue enviado desde la web";

mail($para, $asunto, utf8_decode($mensaje), $header)
header("location:exito.html")
?>