<?php
include('../conexion.php');
$titulo=$_POST['titulo'];
$pregunta=$_POST['pregunta'];
$fecha=date('Y-m-d H:i:s');
$res=$mysqli->query("INSERT pregunta(titulo,pregunta,fecha) VALUES('$titulo','$pregunta','$fecha')");
var_dump($res);
header("location:preguntas.html");
?>