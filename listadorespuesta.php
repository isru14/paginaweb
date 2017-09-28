<?php
include('conexion.php');
$id=$_GET['id'];
$res = $mysqli->query("SELECT * FROM pregunta WHERE id= $id");

foreach ($res as $r){
    ?>
<div style="border:1px solid #a9a9a9; padding:10px; margin:5px 5px 10px 5px;">
    <h2><?php echo $r['titulo']; ?></h2>
    <p><?php echo $r['pregunta']; ?></p>
</div>
    <?php   
}
?>

<form method="post" action="guardar_respuesta.php">
    <input type="text" name="respuesta" value="">
    <input type="hidden" name="pregunta" value="<?php echo $id; ?>">
    <input type="submit" name="submit" value="guardar comentario">
</form>
<?php
$respuestas = $mysqli->query("SELECT * FROM respuesta WHERE Pregunta= $id");

foreach ($respuestas as $r){
    ?>
<div style="border:1px solid #a9a9a9; padding:10px; margin:5px 5px 10px 5px;">
    <p><?php echo $r['respuesta']; ?></p>
    <small><?php echo $r['fecha'];?></small>
</div>
<?php
}
?>