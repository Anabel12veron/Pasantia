<?php

require("../base_de_datos/Conexion.php");


// Datos de la persona
$Nombre = (isset($_POST['Nombre']))? $_POST['Nombre'] : "";
$Apellido = (isset($_POST['Apellido']))? $_POST['Apellido'] : "";
$F_Nacimiento = (isset($_POST['F_Nacimiento']))? $_POST['F_Nacimiento'] : "";
$DNI = (isset($_POST['DNI']))? $_POST['DNI'] : "";
$Sexo = (isset($_POST['Sexo']))? $_POST['Sexo'] : "";

$ID_Persona = "";

if(isset($_POST['Nombre']))

if ($_POST['action'] != 'insert'){
    $ID_Persona = $_GET["id"];
}

// Validaciones


// 


if (isset($_POST['action'])) {

    if ($ID_Persona == "") {
        // insert
        $agregar = "INSERT INTO persona (Nombre, Apellido, F_Nacimiento, DNI, Sexo) VALUES ('$Nombre', '$Apellido', '$F_Nacimiento', $DNI, '$Sexo')";
        $resultado = $mysqli->query($agregar) or die ($mysqli->error);
        $mensaje_de_exito = 'Se agrego con éxito';
    } else {
        // update
        $actualizar = "UPDATE persona SET
                       Nombre = '$Nombre', Apellido = '$Apellido', F_Nacimiento = '$F_Nacimiento', DNI = $DNI, Sexo = '$Sexo'
                       WHERE ID_Persona =  $ID_Persona";
        $resultado = $mysqli->query($actualizar) or die ($mysqli->error);
        $mensaje_de_exito = 'Se modificó con exito';
    }
} else {
    // delete
    
    $eliminar= "DELETE FROM persona Where ID_Persona = $ID_Persona";
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Datos de Programador</title>
</head>
<body>

    <div class="alert alert-success d-flex align-items-center" role="alert">
        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="../pantallas/eliminarDatos.php"/></svg>
    <div>
        <?php echo $mensaje_de_exito?>
    </div>
    </div>

    <a href="../pantallas/datos_programador.php"><button class="btn btn-success">Ir a la Lista</button></a>
<!-- Bootstrap JavaScript Libraries -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>




