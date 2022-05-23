<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="../bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/estiloInicio.css">
    <link rel="stylesheet" href="../jquery.dataTables.min.css">
</head>

<body class="fondo">
    <h1 class="text-center"><strong> Comentarios Fijados </strong></h1>
    <a name="" id="" class="btn btn-dark m-3" href="../pantallas/comentario.php" role="button"><strong> Volver </strong></a>
    <div class="container">
        <div class="table-responsive" style="background-color: white; padding: 10px">
            <?php
            require("../base_de_datos/Conexion.php");
            $sql = 'SELECT * FROM comentario';
            $result = $mysqli->query($sql) or die($mysqli->error);
            ?>
            <table class="table">
                <thead>
                    <tr>
                        <th hidden>id</th>
                        <th><strong> Nombre </strong></th>
                        <th><strong>Comentarios</strong></th>
                        <th></th>

                    </tr>
                </thead>

                <tbody>
                    <?php while ($programador = mysqli_fetch_assoc($result)) { ?>
                        <tr id="<?php $programador['ID_Comentario']; ?>">
                            <td hidden><?php echo $programador["ID_Comentario"]; ?></td>
                            <td><?php echo $programador["Nombre_Usuario"]; ?></td>
                            <td><?php echo $programador["Comentario"]; ?></td>
                            <td>
                                <a href="<?php echo "../base_de_datos/eliminarComentario.php?id=", $programador['ID_Comentario']; ?>">
                                    <button class="btn btn-danger"><strong> Eliminar </strong></button>
                                </a>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>

        </div>
    </div>
    
    <!-- Table JavaScript Libraries -->
    <script src="../jquery-3.5.1.js"></script>
    <script src="../jquery.dataTables.min.js"></script>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="../popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="../bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>