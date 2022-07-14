<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registro</title>
  <!-- Bootstrap CSS v5.0.2 -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"  integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <link rel="stylesheet" href="../assets/estiloInicio.css">
</head>
<body class="fondo">
<?php
  //Se autoinicia una sesión 
  session_start();
  //conecta con la bases de datos 
  require ("../base_de_datos/sql_conection.php");
  // incluye las funciones generales
  include "../utils/funciones.php"; 
  //Selecciona la base de datos de Persona
  $sql= 'SELECT * FROM persona';
  $result= $mysqli->query($sql) or die ($mysqli->error);
?>
  <!-- se visualiza en la pantalla -->
  <h1 class="text-center"><strong> Registro de Datos </strong></h1>
  <div class="container" style="background-color: #ffffff; padding: 25px;">
  <!--Formulatio y Dirección donde se hace el registro -->
    <form class="row g-3 needs-validation" action="../base_de_datos/crud_mysql.php"  method="POST" class="needs-validation" novalidate>
    <input type="text" class="form-control" hidden name="action" id="action" value="insert">
      <div class="mb-3 row">
        <label for="validationCustom01" class="col-sm-1-12 col-form-label"><strong> Nombre </strong></label>
        <div class="col-sm-6">
          <input type="text" class="form-control" name="Nombre" id="Nombre" placeholder="Ingrese su Nombre completo" required>
          <div class="invalid-feedback">
            Complete el campo Nombre.
          </div>
        </div>
      </div>
      <div class="mb-3 row">
        <label for="validationCustom02" class="col-sm-1-12 col-form-label"><strong> Apellido </strong></label>
        <div class="col-sm-6">
          <input type="text" class="form-control" name="Apellido" id="Apellido" placeholder="Ingrese su Apellido" required>
          <div class="invalid-feedback">
            Complete el campo.
          </div>
        </div>
      </div>
      <div class="mb-3 row">
        <label for="validationCustom03" class="col-sm-1-12 col-form-label"><strong> Fecha de Nacimiento </strong></label>
        <div class="col-sm-6">
          <input type="date" class="form-control" name="F_Nacimiento" id="F_Nacimiento" require>
          <div class="invalid-feedback">
            Complete el campo Fecha de Nacimiento.
          </div>
        </div>
      </div>
      <div class="mb-3 row">
        <label for="validationCustom04" class="col-sm-1-12 col-form-label"><strong> DNI </strong></label>
        <div class="col-sm-6">
          <input type="number" class="form-control" name="DNI" id="DNI" placeholder="Ingrese su número de documento" require>
          <div class="invalid-feedback">
            Complete el campo DNI.
          </div>
        </div>
      </div>
      <div class="mb-3 row">
        <label for="validationCustom05" class="col-sm-1-12 col-form-label"><strong> Sexo </strong></label>
        <select class="form-select" aria-label="Default select example"  name="Sexo" id="Sexo" >
          <option>Ninguno</option>
          <option value="Masculino">Masculino</option>
          <option value="Femenino">Femenino</option>
        </select>
        <div class="invalid-feedback">
          Complete el campo Sexo.
        </div>
      </div>
    
      <!-- funcion y boton al guardar o cancelar -->
      <div class="m-3 row">
        <div class="text-center">
          <button class="btn btn-success" role="button"  type="submit"><strong> Guardar </strong></button>
          <a name="" id="" class="btn btn-danger" href="../index.php" role="button"><strong> Cancelar </strong></a>
        </div>
      </div>
    </form> 
  </div>

<!-- Bootstrap JavaScript Libraries -->
  <script src="../popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="../bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>
