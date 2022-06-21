<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos Registrados</title>
    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="../jquery.dataTables.min.css">
    <link rel="stylesheet" href="../assets/estiloInicio.css">
</head>

<body class="fondo">
    <h1 class="text-center"><strong> Datos Registrados </strong></h1>
    <a name="" id="" class="btn btn-dark m-3" href="../index.php" role="button"><strong> 🡸 </strong></a>
    <div class="m-3">
        <div class="table-responsive" style="background-color: white; padding: 15px">
            <?php
            session_start();
            include "../utils/funciones.php";
            generarTablaPersona();
            ?>


           
        </div>
    </div>
    <!-- Table JavaScript Libraries -->
    <script src="../jquery-3.5.1.js"></script>
    <script src="../jquery.dataTables.min.js"></script>
    <!-- Bootstrap JavaScript Libraries -->
    <!-- Bootstrap JavaScript Libraries -->
    <script src="../popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="../bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

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

            // <?php if ($_SESSION['rol'] != 1) { ?>
            //     var table = $('#TABLA_PERSONAS').DataTable();
            //     table.column(6).visible(false); //Columna de Eliminar
            //     table.column(7).visible(false); //Columna de Modificar
            // <?php } ?>

        });
    </script>
</body>

</html>