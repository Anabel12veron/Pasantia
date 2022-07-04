<?php
session_start();
include "./utils/funciones.php";
?>

    <!-- Siempre que quieran entarar a la pantalla principal sin iniciar sesion le mandara una alerta  -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina Principal</title>
    <link rel="stylesheet" href="./assets/estiloInicio.css">
    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="./bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body class="fondo">

<h1 class="text-center"><strong> INICIO </strong></h1>

    <nav class="navbar navbar-expand-sm|md|lg|-xl navbar-light bg-light">
    <div class="container">
    <h2 class="text-center"><strong> UPSTI "Unidad Provincial de Sistema y Tecnologia de Información" </strong></h2>

    </div>
    </nav>
    <div class="text-center mx-auto m-2 ">
        <img src="./img/logo_upsti.png" class="rounded border border-2" alt="...">

    <div class="btn-group-vertical border border-3" role="group" aria-label="Basic example">
    <div class="d-grid gap-4 col-8 mx-auto m-3">
        <a class="btn btn-outline-secondary text-info rounded-pill" href="./pantallas/informacio.php"><strong> Información </strong></a>
        <a class="btn btn-outline-secondary text-info rounded-pill" href="./pantallas/persona.php"><strong> Registrar </strong></a>
        <a class="btn btn-outline-secondary text-info rounded-pill" href="./pantallas/datos_programador.php"><strong> Registros del Programador </strong></a>
        <a class="btn btn-outline-secondary text-info rounded-pill" href="./pantallas/datosProyecto.php"><strong> Proyectos </strong></a>
    </div>
    </div>
    

<div class="position-absolute bottom-0 end-0 m-2">
    <a class="btn btn-info" href="./pantallas/comentario.php"><strong> Comentarios </strong></a>
</div>
<div class="position-absolute top-0 end-0 m-2">
    <a class="btn btn-danger" href="./pantallas/cerrar_sesion.php"><strong> Cerrar Sesión </strong></a>
    <input type="hidden" name="cerrar_sesion">
</div>
<!-- Bootstrap JavaScript Libraries -->
    <script src="./popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="./bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>