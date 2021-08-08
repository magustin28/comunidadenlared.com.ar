<?php
    $responder = 'agustin.m92@gmail.com';
    $destinatario = $_POST['floatingEmail'];

    $nombre = $_POST['floatingNombreApellido'];
    $telefono = $_POST['floatingTelefono'];
    $correo = $_POST['floatingEmail'];
    $asunto = $_POST['floatingAsunto'];
    $mensaje = $_POST['floatingTextarea'];

    $header = "Consulta recibida. Comunidad en la Red"

    $mensaje1 = "
    
    Hola, $nombre,

    Gracias por contactarte con nosotros, a la brevedad nos estaremos comunicando.

    Detalle de la consulta recibida.

    Teléfono:  $telefono
    Correo electrónico: $correo 
    Asunto: $asunto
    Mensaje: $mensaje
    
    Saludos,

    Comunidad en la Red
   
    Web: bit.ly/comunidadenlared"

    $mensajecompleto2 = ""


    mail($responder; $header;$mensaje1);
    mail();
    echo "<script>alert('Gracias por tu mensaje. A la brevedad le responderemos.')</script>";
?>