<?php
include 'Mailer/src/PHPMailer.php';
include 'Mailer/src/SMTP.php';
include 'Mailer/src/Exception.php';
class enviar {
public function enviar_correo($correo,$nombre,$mensaje,$pass){
    $fromemail  = "16435@virtual.utsc.edu.mx";
    $fromname   = $nombre;
    $host       = "smtp.office365.com";
    $port       = "587";
    $SMTPAuth   = "true";
    $SMTPSecure = "STARTTLS";
    $password   = "Mejia159";
    $subject    = "prueba correo electronico";
    $bodyEmail  = $mensaje."<br>su contrasena es: ".$pass;

    $mail = new PHPMailer\PHPMailer\PHPMailer();

    $mail->isSMTP();
    $mail->SMTPDebug  = 0;
    $mail->Host       = $host;
    $mail->Port       = $port;
    $mail->SMTPAuth   = $SMTPAuth;
    $mail->SMTPSecure = $SMTPSecure;
    $mail->Username   = $fromemail;
    $mail->Password   = $password;
    $mail->CharSet = 'UTF-8';
    $mail->setfrom($fromemail, $fromname);
    $mail->addAddress($correo);

    //Asunto
    $mail->isHTML(true);
    $mail->Subject = $subject;
    //Cuerpo email
    $mail->Body = $bodyEmail;

    if (!$mail->send()) {
        echo "no se envio";
        die();
    }
}
}
?>