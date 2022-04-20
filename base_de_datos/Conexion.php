<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conexion</title>
</head>
<body>
    <?php
    $servidor = 'localhost';
    $usuario = 'root';
    $password = '';
    $base_de_datos = "registro";

    $mysqli = new mysqli($servidor, $usuario, $password, $base_de_datos);

    if ($mysqli->connect_errno) {
        echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }
    ?>
</body> 
</html>