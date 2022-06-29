<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio del Proyecto</title>
    <!-- Bootstrap CSS v5.0.2 -->
    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../jquery.dataTables.min.css">
    <link rel="stylesheet" href="../assets/estiloInicio.css">

</head>

<body class="fondo">

    <div class="container mb-5">
        <!-- titulo de inicio de la tabla -->
        <h1 class="text-center"><strong> Módulos </strong></h1>
        <!-- botón con la función de regresar a la pantalla de inicio -->
        <a name="" id="" class="btn btn-dark m-3" href="../index.php" role="button"><strong> 🡸 </strong></a>
        <!-- botón que cumple la función de agregar un nuevo Módulo -->
        <a name="" id="" class="btn btn-primary m-3" href="../pantallas/modulo.php" role="button"><strong> Agregar Módulo </strong></a>
        <div class="table-responsive" style="background-color: white; padding: 10px">
            <?php
            session_start();
            // incluye las funciones generales
            include "../utils/funciones.php";
            // imprime la tabla modilo con sus datos
            generarTablaModulo()
            ?>

        </div>

    </div>

    <div>
<!-- titulo de inicio de la tabla -->
        <h1 class="text-center"> <strong> Proyectos </strong></h1>
    </div>

    <div class="container mb-5">
<!-- botón que cumple la función de agregar un nuevo proyecto  -->
        <a name="" id="" class="btn btn-primary m-3" href="../pantallas/proyecto.php" role="button"><strong> Agregar Proyecto </strong></a>
        <div class="table-responsive" style="background-color: white; padding: 10px">
            <?php
// imprime la tabla proyecto con sus datos
            generarTablaProyecto()
            
            ?>

        </div>
    </div>
<!-- Table JavaScript Libraries -->
    <script src="../jquery-3.5.1.js"></script>
    <script src="../jquery.dataTables.min.js"></script>
<!-- Bootstrap JavaScript Libraries -->
    <script src="../popper.min.js"></script>
<!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

    <script>
        $(document).ready(function() {

            //Ayudas para datos con descripción muy larga.
            var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
            var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
                return new bootstrap.Tooltip(tooltipTriggerEl)
            })

// la funcion que cumple es el de poder buscar los datos mas rapidos 
            $("#TABLA_PROYECTO").DataTable({
                "lengthMenu": [ 5,10, 25, 50, 75, 100 ],
                language: {
                    //son las caracteristicas del buscador
                    processing: "Tratamiento en curso...",
                    search: "Buscar&nbsp;:",
                    lengthMenu: "Mostrar _MENU_ Registros",
                    info: "Mostrando _START_ a _END_ del total de _TOTAL_ Registros",
                    infoEmpty: "No se encuentra datos con estas caracteristicas",
                    infoFiltered: "(Filtrado _MAX_ elementos)",
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
    <script>
        $(document).ready(function() {
// la funcion que cumple es el de poder buscar los datos mas rapidos 
            $("#TABLA_MODULO").DataTable({
                "lengthMenu": [ 5,10, 25, 50, 75, 100 ],
                language: {
                    //son las caracteristicas del buscador
                    processing: "Tratamiento en curso...",
                    search: "Buscar&nbsp;:",
                    lengthMenu: "Mostrar _MENU_ Registros",
                    info: "Mostrando _START_ a _END_ del total de _TOTAL_ Registros",
                    infoEmpty: "No se encuentra datos con estas caracteristicas",
                    infoFiltered: "(Filtrado _MAX_ elementos)",
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