<?php 
session_start();
require("../base_de_datos/sql_conection.php");


// Datos del proyecto
$Nombre = (isset($_POST['Nombre_Modulo']))? $_POST['Nombre_Modulo'] : "";
$Descripcion = (isset($_POST['Descripcion']))? $_POST['Descripcion'] : "";
$Sistema = (isset($_POST['Sistema']))? $_POST['Sistema'] : "";
$Estado = (isset($_POST['Estado']))? $_POST['Estado'] : "";

$ID_Modulo = "";

if(isset($_POST['Nombre_Modulo']))

if ($_POST['action'] != 'insert'){
    $ID_Modulo = $_GET["id"];
}

// Validaciones

if (isset($_POST['action'])) {

    if ($ID_Modulo == "") {
        // insert
        $agregar = "INSERT INTO modulo (Nombre_Modulo, Descripcion, Sistema, Estado) VALUES ('$Nombre', '$Descripcion','$Sistema', '$Estado')";
        $resultado = $mysqli->query($agregar) or die ($mysqli->error);
        $mensaje_de_exito = 'Se agrego con éxito';
    } else {
        // update
        $actualizar = "UPDATE modulo SET
                                Nombre_Modulo = '$Nombre', 
                                Descripcion = '$Descripcion', 
                                Sistema = '$Sistema', 
                                Estado = '$Estado'
                       WHERE ID_Modulo =  $ID_Modulo";

        $resultado = $mysqli->query($actualizar) or die ($mysqli->error);
        $mensaje_de_exito = 'Se modificó con exito';
    }
} else {
    // delete
    
    $eliminar= "DELETE FROM modulo Where ID_Modulo = $ID_Modulo";
    $resultado=$mysqli->query($eliminar);
    $mensaje_de_exito = 'Se eliminó con exito';
}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Datos</title>
</head>
<body>

    <div class="alert alert-success d-flex align-items-center" role="alert">
        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="../pantallas/eliminarDatos.php"/></svg>
    <div>
        <?php echo $mensaje_de_exito?>
    </div>
    </div>

    <a href="../pantallas/datosProyecto.php"><button class="btn btn-success">Ir a la Lista</button></a>
<!-- Bootstrap JavaScript Libraries -->
<script src="../popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="../bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>

