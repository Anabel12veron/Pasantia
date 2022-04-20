<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap CSS v5.0.2 -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>Registro</title>
</head>
<body>
<?php 
  require ("Conexion.php");
  $sql= 'SELECT * FROM persona';
  $result= $mysqli->query($sql) or die ($mysqli->error);
?>
  <div class="container">
  <h1 class="text-center">Registro de Datos</h1>
  <a name="" id="" class="btn btn-info" href="index.php" role="button">Volver a Inicio</a>

    <form action="./agregar_persona.php" method="POST" >
      <div class="mb-3 row">
        <label for="Nombre" class="col-sm-1-12 col-form-label">Nombre</label>
        <div class="col-sm-1-12">
          <input type="text" class="form-control" name="Nombre" id="Nombre" placeholder="Ingrese su Nombre completo">
        </div>
      </div>
      <div class="mb-3 row">
        <label for="Apellido" class="col-sm-1-12 col-form-label">Apellido</label>
        <div class="col-sm-1-12">
          <input type="text" class="form-control" name="Apellido" id="Apellido" placeholder="Ingrese su Apellido">
        </div>
      </div>
      <div class="mb-3 row">
        <label for="F_Nacimiento" class="col-sm-1-12 col-form-label">Fecha de Nacimiento</label>
        <div class="col-sm-1-12">
          <input type="date" class="form-control" name="F_Nacimiento" id="F_Nacimiento" placeholder="">
        </div>
      </div>
      <div class="mb-3 row">
        <label for="DNI" class="col-sm-1-12 col-form-label">DNI</label>
        <div class="col-sm-1-12">
          <input type="number" class="form-control" name="DNI" id="DNI" placeholder="Ingrese su numero de documento">
        </div>
      </div>
      <div class="mb-3 row">
        <label for="Sexo" class="col-sm-1-12 col-form-label">Sexo</label>
        <select class="form-select" aria-label="Default select example"  name="Sexo" id="Sexo">
          <option value="1">Masculino</option>
          <option value="2">Femenino</option>
        </select>

      </div> 
       </div>
      </div>
      </fieldset>
      <div class="mb-3 row">
        <div class="text-center">
          <button type="submit" class="btn btn-light">Agregar</button>
          <button type="button" class="btn btn-light"><a href="index.php" >Cancelar</button>
        </div>
      </div>
    </form>
  </div>


<!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>