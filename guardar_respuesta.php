<?php
include('conexion.php');
$respuesta=$_POST['respuesta'];
$pregunta=$_POST['pregunta'];
$fecha=date('Y-m-d H:i:s');
$res=$mysqli->query("INSERT respuesta(pregunta,respuesta,fecha) VALUES('$pregunta','$respuesta','$fecha')");
//var_dump($res);
header("location:listadorespuesta.php?id=".$pregunta);


?>