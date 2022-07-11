<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registro del Proyecto</title>
  <!-- Bootstrap CSS v5.0.2 -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"  integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <link rel="stylesheet" href="../assets/estiloInicio.css">
  <!-- Table JavaScript Libraries -->
  <script src="../jquery-3.5.1.js"></script>
  <script src="../jquery.dataTables.min.js"></script>

</head>

<body class="fondo">
  <?php
  //Se autoinicia una sesión 
  session_start();
  // incluye las funciones generales
  include "../utils/funciones.php"; 
  //conecta con la bases de datos 
  require("../base_de_datos/sql_conection.php");
  //Selecciona la base de datos de Proyecto
  $sql = 'SELECT * FROM proyecto';
  $result = $mysqli->query($sql) or die($mysqli->error);
  ?>


  <!-- Modal Programadores -->
  <div class="modal fade" id="modal-programadores" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"></h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <?php
            require("../base_de_datos/sql_conection.php");
            $sql = 'SELECT * FROM persona';
            $result = $mysqli->query($sql) or die($mysqli->error);
          ?>

<!-- Hace visualizar el contenido a la tabla en la pantalla -->
          <table class="table table-striped" id="TABLA_PERSONAS">
            <thead>
              <tr>
                <th hidden>id</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Fecha Nac.</th>
                <th>DNI</th>
                <th>Sexo</th>
              </tr>
            </thead>

            <tbody>
              <?php while ($programador = mysqli_fetch_assoc($result)) { ?>
                <tr id="<?php $programador['ID_Persona']; ?>" onclick="seleccionarPersona(this)" class="focus-tr">
                  <td hidden id="ID_Persona"><?php echo $programador["ID_Persona"]; ?></td>
                  <td id="nombre_persona"><?php echo $programador["Nombre"]; ?></td>
                  <td id="apellido_persona"><?php echo $programador["Apellido"]; ?></td>
                  <td id="fnac_persona"><?php echo date("d-m-Y", strtotime($programador['F_Nacimiento'])); ?></td>
                  <td id="dni_persona"><?php echo $programador["DNI"]; ?></td>
                  <td id="sexo_persona"><?php echo $programador["Sexo"]; ?></td>
                </tr>
              <?php
              }
              ?>
            </tbody>
          </table>
        </div>
      <!-- funcion y boton al guardar -->
        <div class="modal-footer">
          <a class="btn btn-success" href="../pantallas/persona.php" role="button"><strong> Guardar </strong></a>
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="cerrar_modal_personas">
              Cerrar
            </button>
        </div>
      </div>
    </div>
  </div>
  <!-- Fin de Modal Programadores -->

<!-- Modal Modulo-->
<div class="modal fade" id="modal-modulos" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"></h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <?php
          //conecta con la bases de datos 
          require("../base_de_datos/sql_conection.php");
          //conecta con la base de datos de modulo
          $sql = 'SELECT * FROM modulo';
          $result = $mysqli->query($sql) or die($mysqli->error);
        ?>
        <!-- Hace visualizar el contenidoa  la tabla en la pantalla -->
            <table class="table table-striped" id="TABLA_MODULO">
                <thead>
                    <tr>
                        <th> <strong>Modulo</strong></th>
                        <th> <strong>Nombre del Modulo</strong></th>
                        <th> <strong>Descripcion</strong></th>
                        <th> <strong>Sistema</strong></th>
                        <th> <strong>Estado</strong></th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($programador = mysqli_fetch_assoc($result)) { ?>
                        <tr  onclick="seleccionarModulo(this)" class="focus-tr">
                            <td id="ID_Modulo"><?php echo $programador["ID_Modulo"]; ?></td>
                            <td id="Nombre_Modulo"><?php echo $programador["Nombre_Modulo"]; ?></td>
                            <td id="Descripcion_Modulo"><?php echo $programador["Descripcion"]; ?></td>
                            <td id="Sistema_Modulo"><?php echo $programador["Sistema"]; ?></td>
                            <td id="Estado_Modulo"><?php echo $programador["Estado"]; ?></td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
          <!-- funcion y boton de cerrar -->
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="cerrar_modal_modulos">
            Cerrar
          </button>
        </div>
      </div>
    </div>
  </div>
  <!-- Fin de Modal Modulos -->

  <!-- Lo que se visualiza en la pantalla -->
  <h1 class="text-center"><strong> Registro del Proyecto </strong></h1>
  <div class="container" style="background-color: #ffffff; padding: 25px">
    <!--Formulatio y Dirección donde se hace el registro -->
    <div class="mb-5 row">
      <label for="ID_Modulo" class="col-sm-1-12 col-form-label"><strong>Modulo</strong></label>
      <div class="col-sm-1-12">
        <input type="text" name="input_modulo" id="input_modulo" data-bs-toggle="modal" data-bs-target="#modal-modulos" />
      </div>
    </div>
    <div class="mb-5 row">
      <label for="ID_Persona" class="col-sm-1-12 col-form-label"><strong>Programador</strong></label>
      <div class="col-sm-1-12">
        <input type="text" name="input_nombre" id="input_nombre" data-bs-toggle="modal" data-bs-target="#modal-programadores" />
      </div>
    </div>
  </div>


    <form action="../base_de_datos/agregarProyecto.php" method="POST">
      <!-- Los ID ocultos -->
      <input type="text" class="form-control" hidden name="action" id="action" value="insert">
      <input type="text" class="form-control" name="ID_Modulo" id="ID_Modulo" hidden>
      <input type="text" class="form-control" name="ID_Persona" id="ID_Persona" hidden>
    </form>
  
  <!-- funcion y boton al guardar y cancelar-->
  <div class="m-3 row">
    <div class="text-center">
      <button class="btn btn-success" role="button"><strong> Guardar </strong></button>
      <a name="" id="" class="btn btn-danger" href="../pantallas/datosProyecto.php" role="button"><strong> Cancelar </strong></a>
    </div>
  </div>

  <script>
    $(document).ready(function(){
    // la funcion que cumple es el de poder buscar los datos mas rapidos 
      $("#TABLA_PERSONAS").DataTable({
                language: {
                    //son las caracteristicas del buscador
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
                        previous: "Previo ",
                        next: " Siguiente ",
                        last: "Último"
                    },
                    aria: {
                        sortAscending: ": activer pour trier la colonne par ordre croissant",
                        sortDescending: ": activer pour trier la colonne par ordre décroissant"
                    }
                }
            });

        });

// la funcion que cumple es el de poder buscar los datos mas rapidos 
      $("#TABLA_MODULO").DataTable({
                language: {
                    //son las caracteristicas del buscador
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
                        previous: "Previo ",
                        next: " Siguiente ",
                        last: "Último"
                    },
                    aria: {
                        sortAscending: ": activer pour trier la colonne par ordre croissant",
                        sortDescending: ": activer pour trier la colonne par ordre décroissant"
                    }
                }
            });

    // ============= Se selecciona una persona =============
    function seleccionarPersona(tabla) {

      let id_persona = $(tabla).find("#ID_Persona").text();
      let Nombre = $(tabla).find("#nombre_persona").text();
      let Apellido = $(tabla).find("#apellido_persona").text();

      $("#cerrar_modal_personas").click(); //cerramos tabla
      $("form #ID_Persona").val(id_persona); //guardamos en input el id
      $("#input_nombre").val(Nombre + " " + Apellido); //guardamos en input el nombre de la persona
    }

    // ============= Se selecciona un modulo =============
    function seleccionarModulo(tabla) {
      let ID_Modulo = $(tabla).find("#ID_Modulo").text();
      let Nombre_Modulo = $(tabla).find("#Nombre_Modulo").text();

      $("#cerrar_modal_modulos").click(); //cerramos tabla
      $("form #ID_Modulo").val(ID_Modulo); //guardamos en input el id
      $("#input_modulo").val(Nombre_Modulo); //guardamos en input el nombre de la persona
    }
  
  </script>


  <!-- Bootstrap JavaScript Libraries -->
  <script src="../popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="../bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>