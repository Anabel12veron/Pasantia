<?php
    require("../base_de_datos/sql_conection.php");
    session_start();
    //print_r($_POST);
    $usuario = (isset($_POST["Nombre_Usuario"])) ? $_POST["Nombre_Usuario"] : '';
    $Nombre = $_POST['Nombre'];
    $Apellido = $_POST['Apellido'];
    $Celular = $_POST['Celular'];
    $Correo = $_POST['Correo'];
    $Fecha_Nac = $_POST['Fecha_Nac'];
    $Contrasena = password_hash($_POST['Contrasena'], PASSWORD_BCRYPT);



    // Agregar datos 
    $insertar = "INSERT INTO registro_usuario (Nombre_Usuario, Nombre, Apellido, Celular, Correo, Fecha_Nac, Contrasena) VALUES ('$usuario', '$Nombre', '$Apellido', '$Celular', '$Correo', '$Fecha_Nac', '$Contrasena')";

    // verificar que el correo no se repita 
    $verificar_correo = mysqli_query($mysqli, "SELECT * FROM registro_usuario WHERE Correo='$Correo' ");

    if (mysqli_num_rows($verificar_correo) > 0){
        echo '
            <script>
                alert ("Este Correo Electronico ya está registrado. Ingrese otro");
                window.location = "../pantallas/registro_usuario.php";
            </script>
        ';
        exit();
    }

    //  verificar que el usuario no se repita 
    $verificar_usuario = mysqli_query($mysqli, "SELECT * FROM registro_usuario WHERE Nombre_Usuario='$usuario ' ");

    if (mysqli_num_rows($verificar_usuario) > 0){
        echo '
            <script>
                alert ("Este Usuario ya existe. Ingrese otro");
                window.location = "../pantallas/registro_usuario.php";
            </script>
        ';
        exit();
    }

    // Se agregan los datos 
    $ejecutar = $mysqli->query($insertar);


    if ($ejecutar) {
        echo '
        <script>
            alert ("Usuario almacenado exitosamente");
            window.location = "./index.php";
        </script>
        
        ';
    }else {
        echo '
        <script>
            alert ("Intentalo de nuevo, usuario no almacenado");
            window.location = "./index.php";
        </script>
        ';
    }

    mysqli_close($mysqli)

?>
