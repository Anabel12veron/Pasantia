<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registro del Modulo</title>
  <!-- Bootstrap CSS v5.0.2 -->
  <link rel="stylesheet" href="../bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="../assets/estiloInicio.css">
</head>
<body class="fondo">
  <?php 
    session_start();
    include "../utils/funciones.php"; 
    require ("../base_de_datos/sql_conection.php");
    $sql= 'SELECT * FROM modulo';
    $result= $mysqli->query($sql) or die ($mysqli->error);
  ?>
 
  <h1 class="text-center"><strong> Registro del Modulo </strong></h1>
  <div class="container" style="background-color: #ffffff; padding: 25px">
  <!--Formulatio y Dirección donde se hace el registro -->
    <form action="../base_de_datos/agregarModulo.php"  method="POST" >
    <input type="text" class="form-control" hidden name="action" id="action" value="insert">
      <div class="mb-3 row">
        <label for="Nombre_Modulo" class="col-sm-1-12 col-form-label"><strong> Nombre del Modulo </strong></label>
        <div class="col-sm-6">
          <input type="text" class="form-control" name="Nombre_Modulo" id="Nombre_Modulo" placeholder="Ingrese el nombre del Modulo en que que trabaja">
        </div>
      </div>
      <div class="mb-3 row">
        <label for="Descripcion" class="col-sm-1-12 col-form-label"><strong> Descripción </strong></label>
        <div class="col-sm-6">
          <input type="text" class="form-control" name="Descripcion" id="Descripcion" placeholder="Ingrese una breve descripción">
        </div>
      </div>
      <div class="mb-3 row">
        <label for="Sistema" class="col-sm-1-12 col-form-label"><strong> Sistema <strong></label>
        <div class="col-sm-6">
          <input type="text" class="form-control" name="Sistema" id="Sistema" placeholder="Ingrese el nombre del Sistema">
        </div>
      </div>
      <div class="mb-3 row">
        <label for="Estado" class="col-sm-1-12 col-form-label"><strong> Estado </strong></label>
        <div class="col-sm-6">
          <input type="text" class="form-control" name="Estado" id="Estado" placeholder="Ingrese el estado">
        </div>
      </div>
      </fieldset>
      <div class="m-3 row">
        <div class="text-center">
          <button class="btn btn-success" role="button"><strong> Guardar </strong></button>
          <a name="" id="" class="btn btn-danger" href="../pantallas/datosProyecto.php" role="button"><strong> Cancelar </strong></a>
        </div>
      </div>
    </form>
  </div>


<!-- Bootstrap JavaScript Libraries -->
  <script src="../popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="../bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>