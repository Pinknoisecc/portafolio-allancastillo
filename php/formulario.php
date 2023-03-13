<?php
if(isset($_POST['submit'])) {
        $to = "allanc.acc.innovation@gmail.com";
        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

        $headers = "From: $email" . "\r\n";
        $headers .= "Reply-To: $email" . "\r\n";
        $headers .= "Content-type: text/html; charset=UTF-8" . "\r\n";

        $body = "
            <h2>Formulario de Contacto - ACC Innovations</h2>
            <p><strong>Nombre:</strong> $name</p>
            <p><strong>Correo electrónico:</strong> $email</p>
            <p><strong>Asunto:</strong> $subject</p>
            <p><strong>Mensaje:</strong> $message</p>
        ";

        if(mail($to, $subject, $body, $headers)) {
            echo "¡Tu mensaje ha sido enviado exitosamente!";
        } else {
            echo "Lo siento, ha habido un problema al enviar tu mensaje. Por favor, inténtalo de nuevo.";
        }
    }
?>






