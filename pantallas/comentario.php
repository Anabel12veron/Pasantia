<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comentarios</title>
    <link rel="stylesheet" href="../bootstrap.min.css">
    <link rel="stylesheet" href="../assets/estiloInicio.css">
</head>

<body class="fondo">
    <a name="" id="" class="btn btn-dark m-3" href="../index.php" role="button"><strong> Volver al Inicio </strong></a>
    
<div class="container" style="background-color: #ffffff; padding: 10px">
<?php
    session_start();
    require("../base_de_datos/sql_conection.php");
    include "../utils/funciones.php"; 
    $sql = 'SELECT * FROM comentario';
    $result = $mysqli->query($sql) or die($mysqli->error);
?>

<div class="container" style="background-color: #ffffff; padding: 10px">
<div class="alert alert-light"><h2><strong> Comentarios </strong></h2></div>
    <!-- La apariencia que tendrá el formulario -->
    <div class="col-md-6 pane">
    <!-- <Formulatio y Dirección donde se hace el registro --> 
    <form action="../base_de_datos/agregarComentario.php"  method="POST" >
    <input type="text" class="form-control" hidden name="action" id="action" value="insert">
      <div class="mb-3 row">
        <label for="Nombre_Usuario" class="col-sm-1-12 col-form-label"><strong>Nombre del Usuaio</strong></label>
        <div class="col-sm-11">
          <input type="text" class="form-control" name="Nombre_Usuario" id="Nombre_Usuario" placeholder="Ingrese el nombre de usuario con el que se quiere registar">
        </div>
      </div>
      <div class="mb-3 row">
        <label for="Comentario" class="col-sm-1-12 col-form-label"><strong> Comentario </strong></label>
        <div class="col-sm-11">
          <input type="text" class="form-control" name="Comentario" id="Comentario" placeholder="Ingrese un comentario">
        </div>
        <div class="m-3 row">
        <div class="text-center">
        <a name="" id="" class="btn btn-primary m-3" href="../pantallas/datos_comentario.php" role="button"><strong> Ver Comentarios </strong></a>
          <button class="btn btn-success" role="button"><strong> Fijar Comentario </strong></button>
        </div>
</div>
</div>




<!-- Bootstrap JavaScript Libraries -->
  <script src="../jquery/3.3.1/jquery.min.js"></script>
  <script src="../bootstrap.bundle.min.js"></script>
 
	<script src="../assets/script.js"></script>
	</div>
	</div>
</body>
</html>
