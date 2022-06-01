<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="../bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Agregado</title>
</head>

<body>
    <div class="alert alert-success d-flex align-items-center" role="alert">
        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"></svg>
        <div>
            Se ha iniciado correctamente ✔
        </div>
    </div>
    <?php

    require("../base_de_datos/sql_conection.php");
    session_start();
    //print_r($_POST);
    $usuario = (isset($_POST["Nombre_Usuario"])) ? $_POST["Nombre_Usuario"] : '';
    $Celular = $_POST['Celular'];
    $Correo = $_POST['Correo'];
    $Fecha_Nac = $_POST['Fecha_Nac'];
    $Contrasena = password_hash($_POST['Contrasena'], PASSWORD_BCRYPT);


    $agregar = "INSERT INTO registro_usuario (Nombre_Usuario, Celular, Correo, Fecha_Nac, Contrasena) VALUES ('$usuario', '$Celular', '$Correo', '$Fecha_Nac', '$Contrasena')";
    $resultado = $mysqli->query($agregar) or die($mysqli->error);
    ?>
    <!-- <a href="../index.php"><button class="btn btn-success"><strong> Ir a la página </strong></button></a> -->
    <script>
        window.location = "../index.php";
    </script>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="../popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="../bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>