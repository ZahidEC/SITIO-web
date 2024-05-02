<?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Recibe los datos del formulario
            $nombre = $_POST['nombre'];
            $email = $_POST['email'];
            $asunto = $_POST['asunto'];
            $mensaje = $_POST['mensaje'];

            // Dirección de correo a la que se enviará el mensaje
            $destinatario = 'sitio@gmail.com';

            // Formatea el correo electrónico
            $contenido = "Nombre: $nombre\n";
            $contenido .= "Correo electrónico: $email\n";
            $contenido .= "Asunto: $asunto\n";
            $contenido .= "Mensaje:\n$mensaje\n";

            // Envía el correo electrónico
            mail($destinatario, 'Mensaje desde el formulario de contacto', $contenido);

            // Muestra un mensaje de éxito
            echo '<div class="mensaje-exito">El mensaje se ha enviado correctamente.</div>';
        }
        ?>