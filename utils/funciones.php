<?php


verificar_sesion();

function verificar_sesion()
{
    if (!isset($_SESSION['registro_usuario'])) {

        //Si la dirección del php al INDEX entonces, pido iniciar sesión. 
        // [ ESTOY USANDO UN SOLO PUNTO EN EL WINDOW.LOCATION ]
        if (basename($_SERVER['PHP_SELF'], ".php") == 'index') {
            echo '
            <script>
                alert ("POR FAVOR DEBES INICIAR SESIÓN");
                window.location = "./pantallas/iniciar_sesion.php";
            </script>
         ';
        } else {
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
        die();
    }
}



function generarTablaPersona()
{
    //Incluye la conexión a la base de datos
    include "../base_de_datos/sql_conection.php";
    
    //Seteo las variables antes de usarlas
    $headersAdmin = "";
    $botonesAdmin = "";
    $trData = "";
    $id_tabla = "TABLA_PERSONAS";

    
    //Verifico si es Admin para poner las opciones de Eliminar y Modificar
    if ($_SESSION['rol'] == 1) {

        $headersAdmin = "
        <th>Eliminar</th>
        <th>Modificar</th>
        ";
    }

    //Creamos una variable que contenga los encabezados de la tabla 
    $headers = "    
    <tr>
        <th hidden>id</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Fecha Nac.</th>
        <th>DNI</th>
        <th>Sexo</th>
        $headersAdmin
    </tr>";

    $sql = 'SELECT * FROM persona';
    $result = $mysqli->query($sql) or die($mysqli->error);

    while ($programador = mysqli_fetch_assoc($result)) {

        //Verificamos si es Admin para agregarle los botones de Eliminar y Modificar
        if ($_SESSION['rol'] == 1) {
            $botonesAdmin = "

                <td>
                    <a href='../base_de_datos/eliminarDatos.php?id='" . $programador['ID_Persona'] . "'>
                        <button class='btn btn-danger'><strong> Eliminar </strong></button>
                    </a>
                </td>
                <td>
                    <a href='../base_de_datos/modificarDatos.php?id=" . $programador['ID_Persona'] . "'>
                        <button class='btn btn-primary'><strong> Modificar </strong></button>
                    </a>
                </td>

                ";
        }

        //Genereamos los datos para mostrar en la tabla
        $trData .= "
            <tr id=" . $programador['ID_Persona'] . ">

                <td hidden>" . $programador["ID_Persona"] . "</td>
                <td>" . $programador["Nombre"] . "</td>
                <td>" . $programador["Apellido"] . "</td>
                <td>" . date("d-m-Y", strtotime($programador['F_Nacimiento'])) . "</td>
                <td>" . $programador["DNI"] . "</td>
                <td>" . $programador["Sexo"] . "</td>
                $botonesAdmin

            ";
    }
    //Juntamos todo lo anterior para generar la tabla.
    $strTabla = "
        <table class='table table-striped' id='$id_tabla'>
        <thead>
            <tr>
                $headers
            </tr>
        </thead>

        <tbody>
            $trData
        </tbody>
        </table>
    ";
//Imprimimos la tabla
    echo $strTabla;
}