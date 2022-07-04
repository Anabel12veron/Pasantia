<?php
        //Esta funcion hace que si no inicias sesion no te permite estar en el index
verificar_sesion();
/**
 * Esta functión genera la verificacion de inicio sesion. 
 * Retorna un HTML de la tabla
 */
function verificar_sesion()
{
    if (!isset($_SESSION['registro_usuario'])) {

        //Si la dirección del php al INDEX entonces, pido iniciar sesión. 
        if (basename($_SERVER['PHP_SELF'], ".php") == 'index') {
            echo '
            <script>
                alert ("POR FAVOR DEBES INICIAR SESIÓN");
                window.location = "./pantallas/iniciar_sesion.php";
            </script>
         ';
        } else {
            // Sino también voy al iniciar sesión, pero estoy en otra pantalla.
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


    //COMIENZO DE LA TABLA PERSONA
/**
* Esta functión genera la tabla de persona. 
* Retorna un HTML de la tabla
*/
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
        //print_r($programador);
    //Verificamos si es Admin para agregarle los botones de Eliminar y Modificar
        if ($_SESSION['rol'] == 1) {
            $botonesAdmin = "

                <td>
                    <a href='../base_de_datos/eliminarDatos.php?id=" . $programador['ID_Persona'] . "'>
                        <button class='btn btn-danger rounded-pill'><strong> Eliminar </strong></button>
                    </a>
                </td>
                <td>
                    <a href='../base_de_datos/modificarDatos.php?id=" . $programador['ID_Persona'] . "'>
                        <button class='btn btn-primary rounded-pill'><strong> Modificar </strong></button>
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
        <table class='table  table-hover order-column' id='$id_tabla'>
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

    //FIN DE LA PANTALLA PERSONA
}




//COMIENZO DE LA PANTALLA MODULO
/**
 * Esta functión genera la tabla de modulos. 
 * Retorna un HTML de la tabla
 */
function generarTablaModulo()
{
//Incluye la conexión a la base de datos
include "../base_de_datos/sql_conection.php";
    
//Seteo las variables antes de usarlas
    $headersAdmin = "";
    $botonesAdmin = "";
    $trData = "";
    $id_tabla = "TABLA_MODULO";

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
            <th hidden> Modulo</th>
            <th> Nombre del Módulo</th>
            <th> Descripción</th>
            <th> Sistema</th>
            <th> Estado</th>
            $headersAdmin
        </tr>";

        $sql = 'SELECT * FROM modulo';
        $result = $mysqli->query($sql) or die($mysqli->error); 

        while ($MODULO = mysqli_fetch_assoc($result)) {

//Verificamos si es Admin para agregarle los botones de Eliminar y Modificar
            if ($_SESSION['rol'] == 1) {
                $botonesAdmin = "
                    <td>
                    <a href='../base_de_datos/eliminarModulo.php?id=". $MODULO['ID_Modulo']. "'>
                        <button class='btn btn-danger rounded-pill'><strong> Eliminar </strong></button>
                    </a>
                    </td>
                    <td>
                        <a href= '../base_de_datos/modificarModulo.php?id=". $MODULO['ID_Modulo']."'>
                            <button class='btn btn-primary rounded-pill'><strong> Modificar </strong></button>
                        </a>
                    </td>

                    ";
            }
//Genereamos los datos para mostrar en la tabla
            $trData .= "
                <tr id=" . $MODULO['ID_Modulo'] . ">

                    <td hidden>" . $MODULO["ID_Modulo"]. "</td>
                    <td>" . $MODULO["Nombre_Modulo"]. "</td>
                    <td>" . $MODULO["Descripcion"]. "</td>
                    <td>" . $MODULO["Sistema"]. "</td>
                    <td>" . $MODULO["Estado"]. "</td>
                    $botonesAdmin

                    ";


        }
//Juntamos todo lo anterior para generar la tabla.
    $strTabla = "
    <table class='table  table-hover order-column' id='$id_tabla'>
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

//FIN DE LA PANTALLA MODULO
}




//COMIENZO DE LA PANTALLA PROYECTO
/**
 * Esta functión genera la tabla de proyectos. 
 * Retorna un HTML de la tabla
 */

function generarTablaProyecto()
{
        //Incluye la conexión a la base de datos
    require("../base_de_datos/sql_conection.php");

        //Seteo las variables antes de usarlas
    $headersAdmin = "";
    $botonesAdmin = "";
    $trData = "";
    $id_tabla = "TABLA_PROYECTO";
    $MODULO_DESCRI= "";

        //Verifico si es Admin para poner las opciones de Eliminar y Modificar
    if ($_SESSION['rol'] == 1) {

        $headersAdmin = "
        <th>Eliminar</th>
        ";
    }
        //Creamos una variable que contenga los encabezados de la tabla 
    $headers = "   
    <tr>
        <th hidden>ID_Proyecto</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>DNI</th>
        <th>Nombre del Módulo</th>
        <th>Descripción del Módulo</th>
        <th>Estado del Módulo</th>
        $headersAdmin
    </tr>";

    $sql = 'SELECT * FROM vista_proyecto';
    $result = $mysqli->query($sql) or die($mysqli->error);

    while ($PROYECTO = mysqli_fetch_assoc($result)) { 

       //print_r($PROYECTO); exit;


        //Verificamos si es Admin para agregarle los botones de Eliminar y Modificar
        if ($_SESSION['rol'] == 1) {
            $botonesAdmin = "
            <td>
                <a href='../base_de_datos/eliminarProyecto.php?id=". $PROYECTO[ 'ID_Proyecto']. "'>
                    <button class='btn btn-danger rounded-pill'><strong> Eliminar </strong></button>
                </a>
            </td>

            ";
        }


       // echo "strlen: ".$PROYECTO["MODULO_DESCRI"]; exit;
        if(strlen($PROYECTO["MODULO_DESCRI"]) > 50 ){
                $MODULO_DESCRI = substr($PROYECTO["MODULO_DESCRI"], 0 ,50)."...";
        }else{
                $MODULO_DESCRI = $PROYECTO["MODULO_DESCRI"];
        }



        //Genereamos los datos para mostrar en la tabla
        $trData .= "

        <tr id=" . $PROYECTO['ID_Proyecto'] . ">

            <td hidden>" .$PROYECTO["ID_Proyecto"]. "</td>
            <td>" .$PROYECTO["NOMBRE_PERSONA"]. "</td>
            <td>" .$PROYECTO["APELLIDO_PERSONA"]. "</td>
            <td>" .$PROYECTO["DNI_PERSONA"]. "</td>
            <td data-bs-toggle='tooltip'  title='".$PROYECTO["MODULO_NOMBRE"]."' >" .$PROYECTO["MODULO_NOMBRE"]. "</td>
            <td data-bs-toggle='tooltip' title='".$PROYECTO["MODULO_DESCRI"]."' >" .$MODULO_DESCRI. "</td> 
            <td>" .$PROYECTO["MODULO_ESTADO"]. "</td>   
            $botonesAdmin

            ";
    }
        //Juntamos todo lo anterior para generar la tabla.
$strTabla = "
<table class='table  table-hover order-column' id='$id_tabla'>
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

        //FIN DE LA PANTALLA PROYECTO
}
