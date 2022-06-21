<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio del Proyecto</title>
    <!-- Bootstrap CSS v5.0.2 -->
    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../jquery.dataTables.min.css">
    <link rel="stylesheet" href="../assets/estiloInicio.css">
  
</head>
<body class="fondo">

<div class="container mb-5">
<h1 class="text-center"><strong> Módulos </strong></h1>
<a name="" id="" class="btn btn-dark m-3" href="../index.php" role="button"><strong> 🡸 </strong></a>
<a name="" id="" class="btn btn-primary m-3" href="../pantallas/modulo.php" role="button"><strong> Agregar Módulo </strong></a>
        <div class= "table-responsive" style="background-color: white; padding: 10px">
            <?php
            session_start();
            require("../base_de_datos/sql_conection.php");
            include "../utils/funciones.php"; 
            $sql = 'SELECT * FROM modulo';
            $result = $mysqli->query($sql) or die($mysqli->error);
            ?>
            <table class="table table-striped" id="TABLA_MODULO">
                <thead>
                    <tr>
                        <th hidden> <strong>Modulo</strong></th>
                        <th> <strong>Nombre del Módulo</strong></th>
                        <th> <strong>Descripción</strong></th>
                        <th> <strong>Sistema</strong></th>
                        <th> <strong>Estado</strong></th>
                        <th> <strong>Eliminar</strong></th>
                        <th> <strong>Modificar</strong></th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($programador = mysqli_fetch_assoc($result)) { ?>
                        <tr>
                            <td hidden><?php echo $programador["ID_Modulo"]; ?></td>
                            <td><?php echo $programador["Nombre_Modulo"]; ?></td>
                            <td><?php echo $programador["Descripcion"]; ?></td>
                            <td><?php echo $programador["Sistema"]; ?></td>
                            <td><?php echo $programador["Estado"]; ?></td>
                            <td>
                                <a href="<?php echo "../base_de_datos/eliminarModulo.php?id=", $programador['ID_Modulo']; ?>">
                                    <button class="btn btn-danger"><strong> Eliminar </strong></button>
                                </a>
                            </td>
                            <td>
                                <a href="<?php echo "../base_de_datos/modificarModulo.php?id=", $programador['ID_Modulo']; ?>">
                                    <button class="btn btn-primary"><strong> Modificar </strong></button>
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

<div>
    <h1 class="text-center"> <strong> Proyectos </strong></h1>
</div>

<div class="container mb-5">
<a name="" id="" class="btn btn-primary m-3" href="../pantallas/proyecto.php" role="button"><strong> Agregar Proyecto </strong></a>
        <div class="table-responsive" style="background-color: white; padding: 10px">
            <?php
            require("../base_de_datos/sql_conection.php");
            $sql = 'SELECT * FROM vista_proyecto';
            $result = $mysqli->query($sql) or die($mysqli->error);

            ?>

            <table class="table table-striped" id="TABLA_PROYECTO">
                <thead>
                    <tr>
                        <th hidden><strong>ID_Proyecto</strong></th>
                        <th><strong>Nombre</strong></th>
                        <th><strong>Apellido</strong></th>
                        <th><strong>DNI</strong></th>
                        <th><strong>Nombre del Módulo</strong></th>
                        <th><strong>Descripción del Módulo</strong></th>
                        <th><strong>Estado del Módulo</strong></th>
                        <th><strong>Eliminar</strong></th>

                    </tr>
                </thead>
                <tbody>
                    <?php while ($programador = mysqli_fetch_assoc($result)) { 
                        
                        if(strlen($programador["MODULO_DESCRI"]) >50 ){
                            $MODULO_DESCRI = substr($programador["MODULO_DESCRI"], 0 ,50)."...";
                        }else{
                            $MODULO_DESCRI = $programador["MODULO_DESCRI"];
                        }
                    ?>
                        <tr id="<?php $programador['ID_Proyecto']; ?>">
                            <td hidden><?php echo $programador["ID_Proyecto"]; ?></td>
                            <td><?php echo $programador["NOMBRE_PERSONA"]; ?></td>
                            <td><?php echo $programador["APELLIDO_PERSONA"]; ?></td>
                            <td><?php echo $programador["DNI_PERSONA"]; ?></td>
                            <td><?php echo $programador["MODULO_NOMBRE"]; ?></td>
                            <td><?php echo  $MODULO_DESCRI ?></td>
                            <td><?php echo $programador["MODULO_ESTADO"]; ?></td>   
                            <td>
                                <a href="<?php echo "../base_de_datos/eliminarProyecto.php?id=".$programador[ 'ID_Proyecto']; ?>">
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
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

    <script>
        $(document).ready(function() {

            $("#TABLA_PROYECTO").DataTable({
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
        <script>
        $(document).ready(function() {

            $("#TABLA_MODULO").DataTable({
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