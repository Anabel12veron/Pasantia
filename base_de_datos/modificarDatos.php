<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificando</title>
    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="../bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/estiloInicio.css">
</head>
<body class="fondo">
<h1 class="text-center"><strong> Modifique sus Datos </strong></h1>
	<?php
		require '../base_de_datos/Conexion.php';
		$id=$_GET["id"]; 
      $sql = "SELECT * FROM persona where ID_Persona = $id";
    	$resultado = $mysqli->query($sql);
    	$dato = mysqli_fetch_assoc($resultado);
	?>
  <!--Formulatio y Dirección donde se hace el registro -->
    <form action="../base_de_datos/crud_mysql.php?id=<?php echo $dato['ID_Persona']?>" method="POST" >
    <input type="text" class="form-control" hidden name="action" id="action" value="update">
      <div class="container" style="background-color: #ffffff; padding: 25px">
      <div class="mb-3 row">
        <label for="Nombre" class="col-sm-1-12 col-form-label"><strong> Nombre </strong></label>
        <div class="col-sm-6">
          <input type="text" class="form-control" name="Nombre" id="Nombre" value="<?php echo $dato['Nombre']?>" placeholder="">
        </div>
      </div>
      <div class="mb-3 row">
        <label for="Apellido" class="col-sm-1-12 col-form-label"><strong> Apellido </strong></label>
        <div class="col-sm-6">
          <input type="text" class="form-control" name="Apellido" id="Apellido" value="<?php echo $dato['Apellido']?>" placeholder="">
        </div>
      </div>
      <div class="mb-3 row">
        <label for="F_Nacimiento" class="col-sm-1-12 col-form-label"><strong> Fecha de Nacimiento </strong></label>
        <div class="col-sm-6">
          <input type="date" class="form-control" name="F_Nacimiento" id="F_Nacimiento" value="<?php echo $dato['F_Nacimiento']?>" placeholder="">
        </div>
      </div>
      <div class="mb-3 row">
        <label for="DNI" class="col-sm-1-12 col-form-label"><strong> DNI </strong></label>
        <div class="col-sm-6">
          <input type="text" class="form-control" name="DNI" id="DNI" value="<?php echo $dato['DNI']?>" placeholder="">
        </div>
      </div>
      <div class="mb-3 row">
        <label for="Sexo" class="col-sm-1-12 col-form-label"><strong> Sexo </strong></label>
        <select class="form-select" aria-label="Default select example"  name="Sexo" id="Sexo">
          <option value="Masculino">Masculino</option>
          <option value="Femenino">Femenino</option>
        </select>

      </div> 
       </div>
      </div>
      </fieldset>
      <div class="m-3 row">
        <div class="text-center">
          <button name="actualizar" class="btn btn-success" role="button"><strong> Guardar </strong></button>
          
          <a name="" id="" class="btn btn-danger" href="../pantallas/datos_programador.php" role="button"><strong> Cancelar </strong></a>
        </div>
      </div>
    </form>
  </div>
<!-- Bootstrap JavaScript Libraries -->
<script src="../popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="../bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>