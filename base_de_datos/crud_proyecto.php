<?php

require("../base_de_datos/Conexion.php");


// Datos del proyecto
$Nombre_Apellido = (isset($_POST['Dato_Programador']))? $_POST['Dato_Programador'] : "";
$Nombre = (isset($_POST['Nombre_Modulo']))? $_POST['Nombre_Modulo'] : "";
$Descripcion = (isset($_POST['Descripcion']))? $_POST['Descripcion'] : "";
$Sistema = (isset($_POST['Sistema']))? $_POST['Sistema'] : "";
$Estado = (isset($_POST['Estado']))? $_POST['Estado'] : "";
$Tarea = (isset($_POST['Tarea']))? $_POST['Tarea'] : "";

$ID_Modulo = "";
$ID_Proyecto = "";

if(isset($_POST['Dato_Programador']))

if ($_POST['action'] != 'insert'){
    $ID_Modulo = $_GET["id"];
    $ID_Proyecto = $_GET["id"];
}

// Validaciones

if (isset($_POST['action'])) {

    if ($ID_Modulo == "") {
        // insert
        $agregar = "INSERT INTO modulo, proyecto (Nombre_Apellido, Nombre_Modulo, Descripcion, Sistema, Estado, Tarea) VALUES ('$Nombre_Apellido', '$Nombre', '$Descripcion','$Sistema', '$Estado', '$Tarea')";
        $resultado = $mysqli->query($agregar) or die ($mysqli->error);
        $mensaje_de_exito = 'Se agrego con éxito';
    } else {
        // update
        $actualizar = "UPDATE modulo, proyecto SET
                       Nombre_Apellido = '$Nombre_Apellido', Nombre_Modulo = '$Nombre', Descripcion = '$Descripcion', Sistema = '$Sistema' Estado = '$Estado', Tarea = '$Tarea'
                       WHERE ID_Modulo, ID_Proyecto =  $ID_Modulo, $ID_Proyecto";
        $resultado = $mysqli->query($actualizar) or die ($mysqli->error);
        $mensaje_de_exito = 'Se modificó con exito';
    }
} else {
    // delete
    
    $eliminar= "DELETE FROM modulo, proyecto Where ID_Modulo = $ID_Modulo, ID_Proyecto = $ID_Proyecto";
    $resultado=$mysqli->query($eliminar);
    $mensaje_de_exito = 'Se eliminó con exito';
}

?>

