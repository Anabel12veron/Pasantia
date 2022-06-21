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

    require("../base_de_datos/sql_conection.php");
    $sql = 'SELECT * FROM registro_usuario';
    $result = $mysqli->query($sql) or die($mysqli->error);
    ?>

    <div class="signup-form">

        <form action="../base_de_datos/agregar_registro_usuario.php" method="POST" class="needs-validation" novalidate>
            <h2>Registrar</h2>
            <p class="hint-text">Crea tu cuenta.</p>
            <div class="form-group">
                <input type="text" class="form-control" hidden name="action" id="action" value="insert">
                <div class="form-group">
                    <select class="form-select" aria-label="Default select example"  name="ID_Rol" id="ID_Rol" >
                        <option value="2">Invitado</option>
                        <option value="1">Administrador</option>
                    </select>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="Nombre_Usuario" placeholder="Nombre de Usuario" required="required">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="Nombre" placeholder="Nombre" required="required">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="Apellido" placeholder="Apellido" required="required">
                </div>
                <div class="form-group">
                    <input type="date" class="form-control" name="Fecha_Nac" id="Fecha de Nacimiento" placeholder="">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="Celular" placeholder="Celular" required="required">
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" name="Correo" placeholder="Correo Electronico" required="required">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="Contrasena" placeholder="Contraseña" required="required"></div>
                </div>
                <div class="form-group">
                    <label class="form-check-label">
                        <input type="checkbox" required="required"> Acepta los
                        <a href="#">Termino de Uso</a> &amp;
                        <a href="#">Politica de Privacidad</a>
                    </label>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success btn-lg btn-block">Guardar</button>
                </div>
                </div>
            </div>
        </form>
        <div class="text-center">¿Ya tienes una cuenta creada?
            <a href="../pantallas/iniciar_sesion.php">Iniciar Sesion</a>
        </div>
    </div>
</body>
</head>
</html>
