<?php
include('conexion.php');
$respuesta$_POST['respuesta'];
$res=$mysqli->query("INSERT respuesta VALUES('$respuesta')");
var_dump($res);
header("location:Paginas/respuestas.html");





?>