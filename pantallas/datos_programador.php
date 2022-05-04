<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos Registrados</title>
    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/estiloInicio.css">
    <link rel="stylesheet" href="../jquery.dataTables.min.css">
</head>

<body class="fondo">
    <h1 class="text-center">Datos Registrados</h1>
    <a name="" id="" class="btn btn-dark m-3" href="../index.php" role="button">Volver al Inicio</a>
    <div class="container">
        <div class="table-responsive" style="background-color: white; padding: 15px">
            <?php
            require("../base_de_datos/Conexion.php");
            $sql = 'SELECT * FROM persona';
            $result = $mysqli->query($sql) or die($mysqli->error);
            ?>


            <table class="table table-striped" id="TABLA_PERSONAS">
                <thead>
                    <tr>
                        <th hidden>id</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Fecha Nac.</th>
                        <th>DNI</th>
                        <th>Sexo</th>
                        <th>Eliminar</th>
                        <th>Modificar</th>
                    </tr>
                </thead>

                <tbody>
                    <?php while ($programador = mysqli_fetch_assoc($result)) { ?>
                        <tr id="<?php $programador['ID_Persona']; ?>">
                            <td hidden><?php echo $programador["ID_Persona"]; ?></td>
                            <td><?php echo $programador["Nombre"]; ?></td>
                            <td><?php echo $programador["Apellido"]; ?></td>
                            <td><?php echo date("d-m-Y", strtotime($programador['F_Nacimiento'])); ?></td>
                            <td><?php echo $programador["DNI"]; ?></td>
                            <td><?php echo $programador["Sexo"]; ?></td>
                            <td>
                                <a href="<?php echo "../base_de_datos/eliminarDatos.php?id=", $programador['ID_Persona']; ?>">
                                    <button class="btn btn-danger">Eliminar</button>
                                </a>
                            </td>
                            <td>
                                <a href="<?php echo "../base_de_datos/modificarDatos.php?id=", $programador['ID_Persona']; ?>">
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
    <!-- Table JavaScript Libraries -->
    <script src="../jquery-3.5.1.js"></script>
    <script src="../jquery.dataTables.min.js"></script>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

    <script>
        $(document).ready(function() {


            $("#TABLA_PERSONAS").DataTable({
                language: {
                    processing: "Traitement en cours...",
                    search: "Buscar&nbsp;:",
                    lengthMenu: "Mostrar _MENU_ registros",
                    info: "Mostrando _START_ a _END_ del total de _TOTAL_ registros",
                    infoEmpty: "Affichage de l'&eacute;lement 0 &agrave; 0 sur 0 &eacute;l&eacute;ments",
                    infoFiltered: "(filtr&eacute; de _MAX_ &eacute;l&eacute;ments au total)",
                    infoPostFix: "",
                    loadingRecords: "Cargando registros",
                    zeroRecords: "No se encuentran registros",
                    emptyTable: "La tabla está vacia",
                    paginate: {
                        first: "Primero",
                        previous: "Previo",
                        next: "Siguiente",
                        last: "Último"
                    },
                    aria: {
                        sortAscending: ": activer pour trier la colonne par ordre croissant",
                        sortDescending: ": activer pour trier la colonne par ordre décroissant"
                    }
                }
            });

        });
    </script>
</body>

</html>