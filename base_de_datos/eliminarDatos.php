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
    
    session_start();
//conexion con la base de datos
    require "../base_de_datos/sql_conection.php";
//selecciona y pregunta 
	$id_persona=$_GET["id"];
    $eliminar_sql = "SELECT * FROM proyecto WHERE ID_Persona = $id_persona";
    $resultado=$mysqli->query($eliminar_sql);

// Si el módulo está relacionado a un proyecto no se le deja eliminar.
    if ($resultado->{"num_rows"} > 0) {
    ?>
        <div class="alert alert-danger d-flex align-items-center " role="alert">
            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"></svg>
            <div>
                No se puede eliminar porque tiene relacionado un proyecto. Verifique.
            </div>
        </div>
    <?php
    } else {
        $eliminar = "DELETE FROM persona WHERE ID_Persona = $id_persona";
        $resultado=$mysqli->query($eliminar);
// Si no está relacionado, se puede eliminar el registro.
    ?>
        <div class="alert alert-success d-flex align-items-center" role="alert">
            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="success:"></svg>
            <div>
                Se ha eliminado un Programador ✔
            </div>
        </div>
    <?php
    }
    ?>
<!-- Boton para ir a la paguina de nuevo  -->
    <a href="../pantallas/datos_programador.php"><button class="btn btn-success"><strong> Ir a la Lista </strong></button></a>

<!-- Bootstrap JavaScript Libraries -->
<script src="../popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="../bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>