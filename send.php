<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $mail = $_POST['mail']; 

        $header = 'From: FaceHack'. " \r\n";
        $header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
        $header .= "Mime-Version: 1.0 \r\n";
        $header .= "Content-Type: text/plain";
    
        $message .= "Su e-mail es: " . $mail . " \r\n";
        $message .= "Servicio: " . $name . " \r\n";       
        $message .= "Enviado el: " . date('d/m/Y', time());

        $para = 'andres.zamitiz.b@gmail.com';
        $asunto = 'Contactar';

        mail($para, $asunto, utf8_decode($message), $header);

        header("Location:https://www.facebook.com/");
    }else{      
        header("Location:https://ceoworks.com.mx/#contacto");
    }
}
?>