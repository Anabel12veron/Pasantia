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

<!-- imprime el fonde de pantalla -->
<body class="fondo">
      <!-- titulo del inicio -->
    <h1 class="text-center"><strong> Datos Registrados </strong></h1>
      <!-- botón con la función de regresar a la pantalla de inicio -->
    <a name="" id="" class="btn btn-dark m-3" href="../index.php" role="button"><strong> 🡸 </strong></a>
    <div class="m-3">
        <div class="table-responsive" style="background-color: white; padding: 15px">
            <?php
            //Se autoinicia una sesión
            session_start();
            // incluye las funciones generales
            include "../utils/funciones.php";
            // imprime a la tabla con sus datos 
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

// la funcion que cumple es el de poder buscar los datos mas rapidos 
            $("#TABLA_PERSONAS").DataTable({
                "lengthMenu": [ 5,10, 25, 50, 75, 100 ],
                language: {
                    //son las caracteristicas del buscador
                    processing: "Tratamiento en curso...",
                    search: "Buscar&nbsp;:",
                    lengthMenu: "Mostrar _MENU_ Registros",
                    info: "Mostrando _START_ a _END_ del total de _TOTAL_ Registros",
                    infoEmpty: "Mostrando 0 elementos",
                    infoFiltered: "(Filtrado de _MAX_ elementos)",
                    infoPostFix: "",
                    loadingRecords: "Cargando Registros",
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