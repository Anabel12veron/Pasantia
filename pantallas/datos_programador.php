<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS v5.0.2 -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Datos Registrados</title>
</head>
<body>
    <h1 class="text-center">Datos Registrados</h1>
    <a name="" id="" class="btn btn-info" href="../index.php" role="button">Volver al Inicio</a>
    <div class="table-responsive">
        <?php 
            require ("../base_de_datos/Conexion.php");
            $sql= 'SELECT * FROM persona';
            $result= $mysqli->query($sql) or die ($mysqli->error);
        ?>
        <table class="table"><tr>
            <thead class="table-dark">
            <td class="ID_Persona">ID_Persona</td>
            <td class="Nombre">Nombre</td>
            <td class="Apellido">Apellido</td>
            <td class="F_Nacimiento">F_Nacimiento</td>
            <td class="DNI">DNI</td>
            <td class="Sexo">Sexo</td>
            <td></td>
            </thead>
        </tr>
        <tbody>
        <?php while ($programador=mysqli_fetch_assoc($result)){?>
            <tr>
                <td class="ID_Persona"><?php echo $programador["ID_Persona"]; ?></td>
                <td class="Nombre"><?php echo $programador["Nombre"]; ?></td>
                <td class="Apellido"><?php echo $programador["Apellido"]; ?></td>
                <td class="F_Nacimiento"><?php echo $programador["F_Nacimiento"]; ?></td>
                <td class="DNI"><?php echo $programador["DNI"]; ?></td>
                <td class="Sexo"><?php echo $programador["Sexo"]; ?></td>
            </tr>
        <?php
            }
        ?>
        </tbody>
        </table>
    </div>



<!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>