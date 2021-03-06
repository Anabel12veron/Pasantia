<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio del Proyecto</title>
    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/estiloInicio.css">
</head>
<body class="fondo">
<div class="container">
    <div>
    <h1 class="text-center">Proyecto</h1>
    <a name="" id="" class="btn btn-dark m-3" href="../index.php" role="button">Volver al Inicio</a>
    <a name="" id="" class="btn btn-primary m-3" href="../pantallas/proyecto.php" role="button">Agregar Proyecto</a>
    <a name="" id="" class="btn btn-primary m-3" href="../pantallas/modulo.php" role="button">Agregar Modulo</a>
    </div>


        <div class="table table-success table-striped">
            <?php
            require("../base_de_datos/Conexion.php");
            $sql = 'SELECT * FROM proyecto';
            $result = $mysqli->query($sql) or die($mysqli->error);
            ?>
            <table class="table" style="background-color: #ffffff;">
                <tr>
                    <thead class="table table-success table-striped">
                        <td class="ID_Proyecto" hidden>ID_Proyecto</td>
                        <td class="ID_Modulo"><strong>Modulo</strong></td>
                        <td class="ID_Persona"><strong>Persona</strong></td>
                        <td class="" colspan="2"></td>
                    </thead>
                    
                </tr>
                <tbody>
                    <?php while ($programador = mysqli_fetch_assoc($result)) { ?>
                        <tr>
                            <td class="ID_Proyecto" hidden><?php echo $programador["ID_Proyecto"]; ?></td>
                            <td class="ID_Modulo"><?php echo $programador["ID_Modulo"]; ?></td>
                            <td class="ID_Persona"><?php echo $programador["ID_Persona"]; ?></td>
                            <td class="btn-group">
                                <a href="<?php echo "../base_de_datos/eliminarProyecto.php?id=", $programador['ID_Proyecto']; ?>">
                                <button class="btn btn-danger">Eliminar</button>
                                </a>
                            </td>
                            <td class="btn-group">
                                <a href="<?php echo "../base_de_datos/modificarProyecto.php?id=", $programador['ID_Proyecto']; ?>">
                                    <button class="btn btn-primary">Modificar</button>
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

        <div class="table table-success table-striped">
            <?php
            require("../base_de_datos/Conexion.php");
            $sql = 'SELECT * FROM modulo';
            $result = $mysqli->query($sql) or die($mysqli->error);
            ?>
            <table class="table" style="background-color: #ffffff;">
                <tr>
                    <thead class="table table-success table-striped">
                        <td class="ID_Modulo"><strong>Modulo</strong></td>
                        <td class="Nombre_Modulo"><strong>Nombre del Modulo</strong></td>
                        <td class="Descripcion"><strong>Descripcion</strong></td>
                        <td class="Sistema"><strong>Sistema</strong></td>
                        <td class="Estado"><strong>Estado</strong></td>
                        <td class="" colspan="2"></td>
                    </thead>
                    
                </tr>
                <tbody>
                    <?php while ($programador = mysqli_fetch_assoc($result)) { ?>
                        <tr>
                            <td class="ID_Modulo"><?php echo $programador["ID_Modulo"]; ?></td>
                            <td class="Nombre_Modulo"><?php echo $programador["Nombre_Modulo"]; ?></td>
                            <td class="Descripcion"><?php echo $programador["Descripcion"]; ?></td>
                            <td class="Sistema"><?php echo $programador["Sistema"]; ?></td>
                            <td class="Estado"><?php echo $programador["Estado"]; ?></td>
                            <td class="btn-group">
                                <a href="<?php echo "../base_de_datos/eliminarModulo.php?id=", $programador['ID_Modulo']; ?>">
                                <button class="btn btn-danger">Eliminar</button>
                                </a>
                            </td>
                            <td class="btn-group">
                                <a href="<?php echo "../base_de_datos/modificarModulo.php?id=", $programador['ID_Modulo']; ?>">
                                    <button class="btn btn-primary">Modificar</button>
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

    
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>
</html>