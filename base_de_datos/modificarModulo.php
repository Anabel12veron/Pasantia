<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registro del Modulo</title>
  <!-- Bootstrap CSS v5.0.2 -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="../assets/estiloInicio.css">
</head>
<body class="fondo">
<h1 class="text-center">Modifique el Modulo</h1>
	<?php
		require '../base_de_datos/Conexion.php';
		$id=$_GET["id"]; 
      $sql = "SELECT * FROM modulo where ID_Modulo = $id";
    	$resultado = $mysqli->query($sql);
    	$dato = mysqli_fetch_assoc($resultado);
	?>
  <!--Formulatio y Dirección donde se hace el registro -->
    <form action="../base_de_datos/crud_Modulo.php?id=<?php echo $dato['ID_Modulo']?>" method="POST" >
    <input type="text" class="form-control" hidden name="action" id="action" value="update">
      <div class="container" style="background-color: #ffffff; padding: 25px">
      <div class="mb-3 row">
        <label for="Nombre_Modulo" class="col-sm-1-12 col-form-label">Nombre del Modulo</label>
        <div class="col-sm-1-12">
          <input type="text" class="form-control" name="Nombre_Modulo" id="Nombre_Modulo" value="<?php echo $dato['Nombre_Modulo']?>">
        </div>
      </div>
      <div class="mb-3 row">
        <label for="Descripcion" class="col-sm-1-12 col-form-label">Descripcion</label>
        <div class="col-sm-1-12">
          <input type="text" class="form-control" name="Descripcion" id="Descripcion" value="<?php echo $dato['Descripcion']?>">
        </div>
      </div>
      <div class="mb-3 row">
        <label for="Sistema" class="col-sm-1-12 col-form-label">Sistema</label>
        <div class="col-sm-1-12">
          <input type="text" class="form-control" name="Sistema" id="Sistema" value="<?php echo $dato['Sistema']?>">
        </div>
      </div>
      <div class="mb-3 row">
        <label for="Estado" class="col-sm-1-12 col-form-label">Estado</label>
        <div class="col-sm-1-12">
          <input type="text" class="form-control" name="Estado" id="Estado" value="<?php echo $dato['Estado']?>">
        </div>
      </div>
       </div>
      </div>
      </fieldset>
      <div class="m-3 row">
        <div class="text-center">
          <button name="actualizar" class="btn btn-success" role="button">Guardar</button>
          
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