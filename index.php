<?php
//Se autoinicia una sesión
session_start();
//Llama a las funciones del modulo Funciones
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
    <!-- Bootstrap CSS v5.2.0-beta1 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"  integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/estiloInicio.css">
    <!-- Bootstrap CSS v5.0.2 -->
    <!-- Clase de los iconos -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

</head>

<body class="fondo">
<!-- inicio de pentalla -->
    <h1 class="text-center border"><strong> INICIO </strong></h1>

    <nav class="navbar navbar-expand-sm|md|lg|-xl navbar-light bg-light">
        <div class="container">
            <h2 class="text-center"><strong> UPSTI "Unidad Provincial de Sistema y Tecnologia de Información" </strong> </h2>
            <a class="btn btn-dark" href="./pantallas/mapa.php"> Mapa🔻🗺 </a>
        </div>
    </nav>
    <!-- ********* -->
    <!-- Boton de menu -->
    <div id="menu-button" class="menu-button m-1" onclick="mostrarOcultarMenu()">
        <i id="menu-icon" class="fa fa-bars fa-2x m-1"></i>
    </div>
    <!--  -->

    <!-- Menu -->
    <div class="" style="display: flex; flex-direction: row;">
        <div id="menu" class="btn-group-vertical border border-dark menu" role="group" aria-label="Basic example" style="background-color: white ">
            <div class="d-grid gap-4 col-8 mx-auto m-3 ">
                <a class="btn btn-outline-secondary text-info rounded-pill" style="color:#5ea45c !important; -webkit-box-shadow: 1px 14px 6px 0px rgba(0,0,0,0.53); 
                box-shadow: 1px 8px 6px 0px rgba(0,0,0,0.53);" href="./pantallas/informacio.php"><strong> Información 📄 </strong></a>
                <div style="border-bottom: 2px solid black; "></div>
                <a class="btn btn-outline-secondary text-info rounded-pill" style="color:#5ea45c !important; -webkit-box-shadow: 1px 14px 6px 0px rgba(0,0,0,0.53); 
                box-shadow: 1px 8px 6px 0px rgba(0,0,0,0.53);" href="./pantallas/persona.php"><strong> Registrar ✏ </strong></a>
                <div style="border-bottom: 2px solid black; height:4px;"></div>
                <a class="btn btn-outline-secondary text-info rounded-pill" style="color:#5ea45c !important; -webkit-box-shadow: 1px 14px 6px 0px rgba(0,0,0,0.53); 
                box-shadow: 1px 8px 6px 0px rgba(0,0,0,0.53);;" href="./pantallas/datos_programador.php"><strong> Registros del Programador 📝 </strong></a>
                <div style="border-bottom: 2px solid black; height:4px;"></div>
                <a class="btn btn-outline-secondary text-info rounded-pill" style="color:#5ea45c !important; -webkit-box-shadow: 1px 14px 6px 0px rgba(0,0,0,0.53); 
                box-shadow: 1px 8px 6px 0px rgba(0,0,0,0.53);" href="./pantallas/datosProyecto.php"><strong> Proyectos 📋 </strong></a>
            </div>
        </div>
        <!--  -->

        <!-- Logo -->
        <div class=" mx-auto m-2 ">
            <img src="./img/logo-white.png" class="rounded position-absolute " style="left: 38% !important;">
        </div>
    </div>
    <div class="position-absolute bottom-0 end-0 m-2">
        <a class="btn btn-info border border-3" href="./pantallas/comentario.php"><strong> Comentarios 📧 </strong></a>
    </div>
    <div class="position-absolute top-0 end-0 m-1">
        <a class="btn btn-danger border border-3" href="./pantallas/cerrar_sesion.php"><strong> ❎ Cerrar Sesión </strong></a>
        <input type="hidden" name="cerrar_sesion">
    </div>
        <!-- Table JavaScript Libraries -->
        <script src="./jquery-3.5.1.js"></script>
    <script src="./jquery.dataTables.min.js"></script>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="./popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="./bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script>
        function mostrarOcultarMenu() {

            let estado = document.getElementById("menu").style.animationName

            if (estado == "mostrar") {

                document.getElementById("menu").style.animationName = "ocultar"
                // De minimizar
                $("#menu-icon").removeClass("fa-minus");
                // A barras
                $("#menu-icon").addClass("fa-bars");

            } else {
                document.getElementById("menu").style.animationName = "mostrar"
                // Cambio el icono
                // De barras
                $("#menu-icon").removeClass("fa-bars");
                // A minimizar
                $("#menu-icon").addClass("fa fa-minus");
            }


        }
    </script>
</body>
</html>