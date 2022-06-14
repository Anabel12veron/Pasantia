<?php
session_start();
include "../utils/funciones.php"; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información</title>
    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="../bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/estiloInicio.css">
</head>
<body class="fondo">
    <div>
    <h1 class="text-center"><strong> Información </strong></h1>
    <a name="" id="" class="btn btn-dark m-3" href="../index.php" role="button"><strong> Volver al Inicio </strong></a>
    </div>
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="../img/registro1.PNG" class="d-md-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h3><strong> "Registrar" </strong></h3>
                    <p>Has clik en el boton "Registrar" si quiere registar sus datos.</p>
                </div>
            </div>
        <div class="carousel-item">
            <img src="../img/Captura6.PNG" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h4><strong> "Registros del Programador" </strong></h4>
                <p>Selecione el boton "Resgistro del Programador" si desea visualizar los datos de los Programadores.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="../img/proyecto4.PNG" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h4><strong> "Proyectos" </strong></h4>
                <p>Si desea ver los Proyectos Actuales de cada Programador has clik en el boton "Proyectos".</p>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    </div>

<div style="display: flex; flex-direction: row;" >

<div class="card" style="width: 19rem;">
        <img src="../img/upsti10.PNG" class="card-img-top" alt="...">
        <div class="card-body">
            <p class="card-text">"Unidad Provincial de Sistemas y Tecnologías de Información" (UPSTI)</p> 
            <p class="cardt-text">La UPSTI es un Organismo (Subsecretaría) que depende directamente del Ministerio de Economía, Hacienda y Finanzas. 
                La UPSTI participa activamente en los proyectos de desarrollo, innovación, implementación, compatibilización e integración de las tecnologías de la información en el ámbito de la Administración Pública del gobierno.</p>
        </div>
    </div>
    <div class="card" style="width: 19rem;">
        <img src="../img/registro1.PNG" class="card-img-top" alt="">
        <div class="card-body">
            <p class="card-text"><p><strong>REGISTRAR:</strong></p></p> 
            <p class="cardt-text">Si decea registrarse debe precionar el botón <strong>"Registrar"</strong> que se encuentra en la página inicial. Al precionarlo visualizará un formulario que solicitará su:</p>
            <p class="cardt-text"><strong>-Nombre</strong></p>
            <p class="cardt-text"><strong>-Apellido</strong></p>
            <p class="cardt-text"><strong>-Fecha de Nacimiento</strong></p>
            <p class="cardt-text"><strong>-DNI</strong></p>
            <p class="cardt-text"><strong>-Sexo</strong></p>
            <p class="cardt-text">Si rellena todos esos datos debe precionar el botón <strong>'Guardar'</strong>, en cambio, si decea abandonar la pantalla de registro debe precionar en el botón <strong>'Cancelar'</strong>.</p>
        </div>
    </div>

    <div class="card" style="width: 19rem;">
        <img src="../img/Captura6.PNG" class="card-img-top" alt="">
        <div class="card-body">
            <p class="card-text"><p><strong>REGISTROS DEL PROGRAMADOR:</strong></p></p> 
            <p class="cardt-text">Si decea ver los datos guardados has click en el botón <strong>"Registros del Programador"</strong> que se encuentra a lado del botón <strong>'Registrar'</strong> ubicado en la pantalla de Inicio. Al precionarlo visualizará todos datos ya registardos por el formulario.</p>
            <p class="cardt-text">Si quiere modificar alguno de los datos ya cargados, precione el botón <strong>'Modificar'</strong> que se encuentra ubicada a la derecha de la infomacion que quiere modificar. Al terminar de modificarlo precione el botón <strong>'Guardar'</strong>, de lo contrario precione el botón <strong>'Cancelar'</strong>.</p>
            <p class="cardt-text">Si quiere eliminar algun registro precione el botón <strong>'Eliminar'</strong> que se encuentra ubicada a lado del botón <strong>'Modificar'</strong>.</p>
            <p class="cardt-text"> Si desea buscar un programador de foma rapida, lo puede buscar en el buscador que se encuentra encima de la tabla</p>
        </div>
    </div>
    <div class="card" style="width: 19rem;">
        <img src="../img/proyecto4.PNG" class="card-img-top" alt="">
        <div class="card-body">
            <p class="card-text"><p><strong>PROYECTO:</strong></p></p>
            <p class="cardt-text">Si decea ver los Proyectos de cada uno de los programdores, pulse el botón <strong>"Proyectos"</strong> que se encuentra en la pantalla de inicio. Si desea buscar un proyecto o modulo especifico lo puede buscar en el buscador que se encuentra encima de la tabla </p> 
            <p class="cardt-text">Si desea modificar algunos de los datos de la tabla "Modulo" o "Proyecto", precione el botón <strong>'Modificar'</strong>. Al terminar de modificarlo precione el botón <strong>'Guardar'</strong>, de lo contrario precione el botón <strong>'Cancelar'</strong>.</p>
            <p class="cardt-text">Si quiere eliminar algunos datos de la tabla "Modulo" o "Proyecto", precione el botón <strong>'Eliminar'</strong> que se encuentra ubicada a lado del botón <strong>'Modificar'</strong>.</p>
            <p class="cardt-text">Si desea agregar un Modulo o Proyecto hacer click en donde dice <strong>'Agregar Modulo'</strong> o <strong>'Agregar Proyecto'</strong>. </p>
        </div>
    </div>

    <div class="card" style="width: 19rem;">
        <img src="../img/comentario3.PNG" class="card-img-top" alt="">
        <div class="card-body">
            <p class="card-text"><p><strong>COMENTARIOS:</strong></p></p>
            <p class="cardt-text">Si decea escribir un comentario en relación con nuestra página web, precione en el botón <strong> "Comentario" </strong> que se encuentra en la pantalla de inicio.</p>
            <p class="cardt-text">Luego de ingresar a la misma, introdusca un "Nombre de Usuario" y debajo su comentario que desea fijar.</p>
        </div>
    </div>

</div>
   

    <!-- Bootstrap JavaScript Libraries -->
    <script src="../popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="../bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>