<?php
$destino="isru17.h@gmail.com";
$correo= $_POST["correo"];
$pais= $_POST["pais"];
$mensaje= $_POST["mensaje"];
$contenido= "correo" .$correo. "\npais:" .$pais . "\nmensaje:" .$mensaje;
mail($destino,"contacto",$contenido);
header("location:../index.html");
?>