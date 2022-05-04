<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registro del Proyecto</title>
  <!-- Bootstrap CSS v5.0.2 -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="../assets/estiloInicio.css">
</head>
<body class="fondo">
<?php 
  require ("../base_de_datos/Conexion.php");
  $sql= 'SELECT * FROM proyecto';
  $result= $mysqli->query($sql) or die ($mysqli->error);
?>
 
  <h1 class="text-center">Registro del Proyecto</h1>
  <div class="container" style="background-color: #ffffff; padding: 25px">
  <!--Formulatio y Dirección donde se hace el registro -->
    <form action="../base_de_datos/agregarProyecto.php"  method="POST" >
    <input type="text" class="form-control" hidden name="action" id="action" value="insert">
      <div class="mb-3 row">
        <label for="ID_Modulo" class="col-sm-1-12 col-form-label">ID_Modulo</label>
        <div class="col-sm-1-12">
          <input type="text" class="form-control" name="ID_Modulo" id="ID_Modulo">
        </div>
      </div>
      <div class="mb-3 row">
        <label for="ID_Persona" class="col-sm-1-12 col-form-label">ID_Persona</label>
        <div class="col-sm-1-12">
          <input type="text" class="form-control" name="ID_Persona" id="ID_Persona">
        </div>
      </div>
      </div>
      </fieldset>
      <div class="m-3 row">
        <div class="text-center">
          <button class="btn btn-success" role="button">Agregar</button>
          <a name="" id="" class="btn btn-danger" href="../pantallas/datosProyecto.php" role="button">Cancelar</a>
        </div>
      </div>
    </form>
  </div>


<!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>