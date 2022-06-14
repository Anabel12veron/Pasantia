<?php 
verificar_sesion();

function verificar_sesion(){
    if (!isset($_SESSION['registro_usuario'])){

        //Si la dirección del php al INDEX entonces, pido iniciar sesión. 
        // [ ESTOY USANDO UN SOLO PUNTO EN EL WINDOW.LOCATION ]
        if (basename($_SERVER['PHP_SELF'], ".php") == 'index'){
            echo '
            <script>
                alert ("POR FAVOR DEBES INICIAR SESIÓN");
                window.location = "./pantallas/iniciar_sesion.php";
            </script>
         ';
        }else{
            // Sino también voy al iniciar sesión, pero estoy en otra pantalla.
            // [ ESTOY USANDO DOS PUNTOS EN EL WINDOW.LOCATION ]
            echo '
            <script>
                alert ("POR FAVOR DEBES INICIAR SESIÓN");
                window.location = "../pantallas/iniciar_sesion.php";
            </script>
         ';
        }


       session_destroy();
       die ();
    }
}



?>