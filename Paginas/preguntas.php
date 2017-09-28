<!doctype html>                
<html>
<head>
<title>Preguntas</title>
       <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body background="fondo.png">
    <div id="general" >
<div class="container" id="contenido">
         <div class="well">
         <h1>Preguntas</h1>
         </div>
         <FORM method=GET action="http://www.google.es/search"> 
    <fieldset> 
        <input type=hidden name=ie value=UTF-8 /> 
        <input type=hidden name=oe value=UTF-8 /> 
                         
        <INPUT TYPE=text id="s" name="q" value="" size="50" /> 
        <font size=-1> 
             <INPUT type=submit  id="x" name=btnG VALUE="Buscar" /> 
        </font> 
    </fieldset> 
    </FORM>
    <div class="container">              
  <ul class="breadcrumb">
            <li><a link href="../index.html">Inicio</a></li>
            <li><a link href="juegos.html">Juegos</a></li>
            <li><a link href="comunidades.html">Comunidades</a></li>
            <li><a link href="http://www.vandal.net/noticias/videojuegos" target="_black">Novedades</a></li>
            <li><a title="Conferencia mundial de videojuegos" link href="https://www.e3expo.com/" target="_black">E3</a></li>
            <li><a link href="informacion.html">Informacion</a></li>
            <li><a link href="https://www.facebook.com/isru17/?ref=bookmarks" target="_black">Facebook</a></li>
            <li><a link href="canales.html">Canales</a></li>   
  </ul>
</div>
         
         <section class="main">

                <form action="guardar.php" method="post" enctype="multipart/form-data">
               <center><input name="titulo" type="text" class="form-control" id="titulo" placeholder="Escriba el titulo" required></center>
         <aside class="col-mod-12">
             <center><input class="form-control"  name="pregunta" id="pregunta" rows="15" cols="90" placeholder="Escriba su Pregunta" required></center>
         </aside>
     <center><input name="fecha" type="text" class="form-control" id="fecha" placeholder="Ingrese la fecha"></center>
               <center><button>Guardar</button></center>
             <center><a link href="../comunidades.html"><button>Regresar</button></a></center>
             </form>
    </section>
        </div>
    </div>

</body>
</html>