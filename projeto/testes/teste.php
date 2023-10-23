<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require_once ('../vendor/autoload.php');

$mail = new PHPMailer(true);
try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                       //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->SMTPSecure = 'tls';
    $mail->Username   = 'yasminsantosyasxp@gmail.com';          //SMTP username
    $mail->Password   = 'Ycds301106';                           //SMTP password
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`


    $mail->setFrom('yasminsantosyasxp@gmail.com', 'Destinatario');
    $mail->addAddress('yaminsantos.21174@gmail.com', 'Remetente');     


    $mail->isHTML(true);                                
    $mail->Subject = 'Here is the subject';
    $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    if (!$mail->send())
    {
        echo "Não foi possivel enviar a mensagem <br>";
        echo "Erro: {$mail->ErrorInfo}";
    }
     
    else 
    {
        echo "Mensagem enviada";
    }
    
} 


catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: ";
}