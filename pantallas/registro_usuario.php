<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
    <title>Registar Usuario</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../assets/stylo_usuario.css">
</header>
<body>
<?php 
  require ("../base_de_datos/Conexion.php");
    $sql= 'SELECT * FROM registro_usuario';
    $result= $mysqli->query($sql) or die ($mysqli->error);
?>
    <div class="signup-form">
        <form action="#"  method="POST" >
            <h2>Registrar</h2>
            <p class="hint-text">Crea tu cuenta.</p>
            <div class="form-group">
                <input type="text" class="form-control" hidden name="action" id="action" value="insert">
                <div class="row">
                    <div class="col">
                        <input type="text" class="form-control" name="Nombre_Usuario" placeholder="Nombre de Usuario" required="required">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <input type="email" class="form-control" name="Correo" placeholder="Correo Electronico" required="required">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="Contrasena" placeholder="Contraseña" required="required">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="Confirmar_Contrasena" placeholder="Confirmar Contraseña" required="required">
            </div>
            <div class="form-group">
                <label class="form-check-label">
                    <input type="checkbox" required="required"> Acepta los
                    <a href="#">Termino de Uso</a> &amp;
                    <a href="#">Politica de Privacidad</a>
                </label>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success btn-lg btn-block">Regristrar</button>
            </div>
        </form>
        <div class="text-center">Ya tienes una cuenta?
            <a href="#">Iniciar Sesion</a>
        </div>
    </div>
</body>
</head>
</html>