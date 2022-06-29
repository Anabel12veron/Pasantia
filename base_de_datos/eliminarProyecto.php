<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Eliminar</title>
</head>
<body>
    <?php
//Se autoinicia una sesión
    session_start();
//conexion con la base de datos
    require "../base_de_datos/sql_conection.php";
	$programador=$_GET["id"];
//Elimina
    $eliminar= "DELETE FROM proyecto Where ID_Proyecto = $programador";
    $resultado=$mysqli->query($eliminar);
    echo '
    <script>
        alert ("¡Se elimino Correctamente!");
        window.location = "../pantallas/datosProyecto.php";
    </script>
    ';
    ?>

<!-- Bootstrap JavaScript Libraries -->
<script src="../popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="../bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>