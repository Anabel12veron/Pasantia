<?php
//Se autoinicia una sesión
session_start();
//Llama a las funciones del modulo Funciones
include "./utils/funciones.php";

// Operador ternario

// if($_SESSION['rol'] == 1 ){
//     $rol = "Administrador";
// }else{
//     $rol = "Invitado" ;
// }

$rol_name = ($_SESSION['rol'] == 1) ? "Administrador" : "Invitado"; //Se obtiene el rol del usuario
$email = $_SESSION['email']; //Se obtiene el email del usuario



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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/estiloInicio.css">
    <!-- Bootstrap CSS v5.0.2 -->
    <!-- Clase de los iconos -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

</head>

<body class="fondo">

    <section>
        <div class="col col-md-1 col-lg-8 col-xl-5" style="width: 100%;">
            <div class="card" style="border-radius: 2px; background-color: #054000;">
                <div class="card-body p-1">
                    <div class="d-flex text-white" >
                        <div class="flex-shrink-0" data-bs-toggle="modal" data-bs-target="#modal-programadores" style="cursor: pointer">
                            <img src="./img/profile.jpg" class="img-fluid rounded-circle" alt="Generic placeholder image"  style="width: 50px; border-radius: 10px;">
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <h5 class="mb-1"> <?php echo $_SESSION["nombredelusuario"] ?> </h5>
                            <p class="mb-2 pb-1" style="color: white;"><?php echo $rol_name ?> </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </section>
    <!-- Modal Programadores -->
    <div class="modal fade" id="modal-programadores" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <section>
                        <div class="container py-5">
                            <div class="row d-flex justify-content-center align-items-center">
                                <div class="col-md-12">

                                    <div class="card" style="border-radius: 15px;">
                                        <div class="card-body text-center">
                                            <div class="mt-3 mb-4">

                                                <img src="./img/profile.jpg" class="rounded-circle img-fluid" style="width: 100px;" onclick="abrirFile()"/>
                                                    <input type="file" id="formFile" hidden>

                                            </div>
                                            <h4 class="mb-2"><?php echo $_SESSION["nombredelusuario"] ?></h4>
                                            <p class="text-muted mb-4"><?php echo $rol_name ?><span class="mx-2"></span> <a href="#!"><?php echo $email ?></a></p>
                                            <div class="mb-4 pb-2">
                                                <button type="button" class="btn btn-outline-primary btn-floating">
                                                    <i class="fab fa-facebook-f fa-lg"></i>
                                                </button>
                                                <button type="button" class="btn btn-outline-primary btn-floating">
                                                    <i class="fab fa-twitter fa-lg"></i>
                                                </button>
                                                <button type="button" class="btn btn-outline-primary btn-floating">
                                                    <i class="fab fa-skype fa-lg"></i>
                                                </button>
                                            </div>
                                            <div>
                                                <a class="btn btn-danger btn-rounded btn-lg" href="./pantallas/cerrar_sesion.php"><strong> Cerrar Sesión </strong></a>
                                                <input type="hidden" name="cerrar_sesion">
                                            </div>
                                            <!-- <div class="d-flex justify-content-between text-center mt-5 mb-2">
                                                <div>
                                                    <p class="mb-2 h5">8471</p>
                                                    <p class="text-muted mb-0">Wallets Balance</p>
                                                </div>
                                                <div class="px-3">
                                                    <p class="mb-2 h5">8512</p>
                                                    <p class="text-muted mb-0">Income amounts</p>
                                                </div>
                                                <div>
                                                    <p class="mb-2 h5">4751</p>
                                                    <p class="text-muted mb-0">Total Transactions</p>
                                                </div>
                                            </div> -->
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </section>

                </div>
            </div>
        </div>
    </div>
    <!-- Fin de Modal Programadores -->
    <!-- inicio de pentalla -->
    <h1 class="text-center border"><strong> INICIO </strong></h1>

    <nav class="navbar navbar-expand-sm|md|lg|-xl navbar-light bg-light">
        <div class="container">
            <h2 class="text-center"><strong> UPSTI "Unidad Provincial de Sistema y Tecnologia de Información" </strong> </h2>
            <a class="btn btn-dark" onclick="abrirMapa()"> Mapa🔻🗺 </a>
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

    <!-- Table JavaScript Libraries -->
    <script src="./jquery-3.5.1.js"></script>
    <script src="./jquery.dataTables.min.js"></script>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="./popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="./bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script>
        // Abrir File 
        function abrirFile(){
            // $("#formFile").click();
        }
        // Function para abrir el mapa
        function abrirMapa() {
            window.open("https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d895.105793957515!2d-58.165384170808984!3d-26.18290899896543!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x7f8ae2d86ad72516!2zMjbCsDEwJzU4LjUiUyA1OMKwMDknNTMuNCJX!5e0!3m2!1ses!2sar!4v1657117353068!5m2!1ses!2sar", "_blank");
        }

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