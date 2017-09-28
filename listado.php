<body>
<center><h1>Preguntas</h1></center>
<p>Todas las preguntas las cuales los usuarios o personas que estn aqui pueden revisarlas todas, ya que 
algunas preguntas que tengan pueden ya estar aqui y resolverlas al igual de que puedan responder a las preguntas que 
hayan para asi poder ayudar a los demas.</p>
<?php
include('conexion.php');
$res=$mysqli->query("SELECT * FROM pregunta ORDER BY fecha DESC");
foreach ($res as $r){
?>
<div style="padding:5px; border:1px solid #a9a9a9; margin:10px 5px;">  
    <h3><?php echo $r['titulo']; ?></h3>
    <p><?php echo $r['pregunta']; ?></p>
    <p><?php echo $r['fecha']; ?></p>
    <a href="listadorespuesta.php?id=<?php echo $r['id']?>">Respuestas</a>
    </div>
    <?php
    ?>
<?php


}

?>