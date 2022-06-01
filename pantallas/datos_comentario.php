<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="../bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/estiloInicio.css">
    <link rel="stylesheet" href="../jquery.dataTables.min.css">
</head>

<body class="fondo">
    <h1 class="text-center"><strong>Comentarios</strong></h1>
    <a name="" id="" class="btn btn-dark m-3" href="../pantallas/comentario.php" role="button"><strong> Volver </strong></a>
    <div class="container">
        <div class="table-responsive" style="background-color: white; padding: 10px">
            <?php
            session_start();
            include_once '../base_de_datos/sql_conection.php';
            $sql_sel = "SELECT * FROM comentario ORDER BY ID_Comentario DESC";
            $result = $mysqli->query($sql_sel) or die($mysqli->error);
            $count = $result->num_rows;

            if ($count > 0) {
            ?>
                <!-- PHP  es la de recuperar los comentarios que hay almacenados en la base de datos cuando se accede a la página-->
                <div id="comment-count">
                    <span id="count-number"><?php echo $count; ?></span> Comentario(s)
                </div>


            <?php } ?>
            <div id="response">
                <?php
                while ($row = $result->fetch_array(MYSQLI_ASSOC)) {

                ?>
                    <div id="comment-<?php echo $row["ID_Comentario"]; ?>" class="comment-row">
                        <div class="comment-user, btn btn-secondary"><?php echo $row["Nombre_Usuario"]; ?></div>
                        <div class="comment-msg, text-primary, alert alert-secondary" id="msgdiv-<?php echo $row["ID_Comentario"]; ?>"><?php echo $row["Comentario"]; ?></div>
                        <div class="delete, d-grid gap-2 d-md-flex justify-content-md-end" name="delete" id="delete-<?php echo $row["ID_Comentario"]; ?>" onclick="deletecomment(<?php echo $row['ID_Comentario']; ?>)"><button class="btn btn-danger"><strong> Eliminar </strong></button></div>
                    </div>
                <?php
                }
                ?>

            </div>

        </div>
    </div>
    <!-- Table JavaScript Libraries -->
    <script src="../jquery-3.5.1.js"></script>
    <script src="../jquery.dataTables.min.js"></script>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="../popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="../bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

    <!-- JS es el código JavaScript que se encarga de lanzar el borrado de un comentario mediante la llamada a un PHP -->
    <script>
        function msg_alert(msg='',type='danger'){
            //Si no, nos agrega un cartel de error.
            $(".container").before('<div id="msg-alert" class="alert alert-'+type+' d-flex align-items-center" role="alert"><svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="'+type+'"></svg><div>'+msg+'</div></div>')
            //Y elimina el cartel luego de 5 seg.
            setTimeout(function(){
                $("#msg-alert").remove();
            },5000)
        }
        function deletecomment(id) {


  

            if (confirm("¿Estás seguro de que quieres borrar este comentario?")) {
            
                //Es la comunicación del usuario al servidor.
                $.ajax({
                    url: "../base_de_datos/deleteComentario.php",
                    type: "POST", //Tipo de método
                    data: 'comment_id=' + id, //Dato enviado por POST al PHP
                    dataType: 'JSON', //Tipo de respuesta
                    success: function(data) {
                        //Si todo sale bien el servidor responde.
                       
                        //Si la respues es satifactoria.
                        if (data.respuesta == "succes") {
                            msg_alert("alerta de eliminanción", 'succes');
                            //Se elimina el comentario de la pantalla.
                            //Para no tener que recargar toda la página.
                            $("#comment-" + id).remove();
                            //Si la cantidad de comentarios es mayor a cero
                            if ($("#count-number").length > 0) {
                                //Se actualiza el número de comentarios.
                                var currentCount = parseInt($("#count-number").text());
                                var newCount = currentCount - 1;
                                $("#count-number").text(newCount)
                            }
                        }else{
                            //Si no, nos agrega un cartel de error.
                            $(".container").before('<div id="msg-error" class="alert alert-danger d-flex align-items-center" role="alert"><svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="danger:"></svg><div>No se pudo eliminar el comentario</div></div>')
                            //Y elimina el cartel luego de 5 seg.
                            setTimeout(function(){
                                $("#msg-error").remove();
                            },5000)
                        }
                    }
                });
            }
        }
    </script>
</body>

</html>