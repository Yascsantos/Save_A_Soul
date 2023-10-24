<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require_once ('../vendor/autoload.php');

$mail = new PHPMailer(true);
try {
// Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                       // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            // Use SSL (change from 'tls' to 'ssl')
    $mail->Username   = 'saveasoul2023@gmail.com';              // SMTP username
    $mail->Password   = 'savesoul';                             // SMTP password
    $mail->Port       = 465;                                    // TCP port to connect to (use 465 for SSL)

    $mail->setFrom('saveasoul2023@gmail.com', 'Destinatario');
    $mail->addAddress('saveasoul2023@gmail.com', 'Remetente');     


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