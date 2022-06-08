<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
    <title>Iniciar Sesion</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../assets/stylo_usuario.css">
</header>
<body>
<?php 
    session_start();
    require("../base_de_datos/sql_conection.php");
    $nombre_Usuario = (isset($_POST["Nombre_Usuario"]))? $_POST["Nombre_Usuario"] : '' ;
    $pass = (isset($_POST["Contrasena"]))? $_POST["Contrasena"] : '' ;
    //echo $nombre ;exit;

    //Para iniciar sesión
    if(isset($_POST["btnloginx"]))
    {
    
    $queryusuario = mysqli_query($mysqli,"SELECT * FROM registro_usuario WHERE Nombre_Usuario = '$nombre_Usuario'");
    $nr = mysqli_num_rows($queryusuario); 
    $usuarios_registros = mysqli_fetch_array($queryusuario); 
        
    if (($nr == 1) && (password_verify($pass,$usuarios_registros['Contrasena'])) )
        { 
            session_start();
            $_SESSION['nombredelusuario']=$nombre_Usuario;
            header("Location: ../index.php");
        }
    else
        {
        echo "<script> alert('Usuario o contraseña incorrecto.');</script>";
        }
    }
    
    //Para registrar
    if(isset($_POST["btnregistrarx"]))
    {
    
    $queryusuario = mysqli_query($mysqli,"SELECT * FROM login WHERE Nombre_Usuario = '$nombre_Usuario'");
    $nr = mysqli_num_rows($queryusuario); 
    
    if ($nr == 0)
    {
    
        $pass_fuerte = password_hash($pass, PASSWORD_BCRYPT);
        $queryregistrar = "INSERT INTO login(Nombre_Usuario, Contrasena) values ('$nombre_Usuario','$pass_fuerte')";
        
    
    if(mysqli_query($mysqli,$queryregistrar))
    {
        echo "<script> alert('Usuario registrado: $nombre_Usuario');</script>";
    }
    else 
    {
        echo "Error: " .$queryregistrar."<br>".mysqli_error($mysqli);
    }
    
    }else
    {
            echo "<script> alert('No puedes registrar a este usuario: $nombre_Usuario');</script>";
    }
    

    /*VaidrollTeam*/
   
     
     //verificamos si el user exite con un condicional
    if (mysqli_num_rows($queryusuario) == 0)
    {
    // mysql_num_rows <- esta funcion me imprime el numero de registro que encontro 
    // si el numero es igual a 0 es porque el registro no exite, en otras palabras ese user no esta en la tabla miembro por lo tanto se puede registrar
     
    echo "El Usuario es valido";
    }
    
    else
    {
    //caso contario (else) es porque ese user ya esta registrado
     
    echo 'El Usuario ya esta registrado, ingresa otro';
    }
    }
?>




    <div class="signup-form">
        <form action=""  method="POST" >
            <h2>Iniciar Sesion</h2>
            <p class="hint-text">Ingresa los requisitos.</p>
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

            <div class="m-3 row">
        <div class="text-center">

        <button type="submit" class="btn btn-success" name="btnloginx">Guardar</button>
          <!-- <button class="btn btn-success" role="button"><strong> Guardar </strong></button> -->
          <a name="" id="" class="btn btn-danger" href="" role="button"><strong> Cancelar </strong></a>
        </div>
      </div>
        </form>
    </div>
</body>
</head>
</html>