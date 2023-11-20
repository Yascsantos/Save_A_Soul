<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Encontro Agenado</title>
</head>

<body>
    <a href='../../adm/animais/listagem/grade.php'>X</a>
    <h2>Encontro Agenado</h2>
   
</body>
</html>
<?php
    include_once("../../conexaoBD.php");

    if(!isset($_SESSION))
    {
        session_start();
    }
    $id_vol = $_SESSION['id_vol'];
    $user = $_SESSION['id_user'];

    $sql_code = "SELECT * FROM voluntario where id_vol = $id_vol and id_user = $user";
    $code = mysqli_query($conexao,$sql_code);
    foreach ($code as $dade) 
    {
        $id_ado = $dade['id_vol'];
        $id_ani = $dade['id_ani'];
        $data = $dade['data_entre'];
        $hora = $dade['horario'];
    }
            //USER
            $query= "SELECT * FROM user where id_user = $user";
            $requery = mysqli_query($conexao,$query);
            foreach ($requery as $dados) 
            {
                $nome_user = $dados['nome'];
                $email = $dados['email'];
    
            }
    

        //ANIMAIS
        $sql= "SELECT * FROM animal where id_ani = $id_ani";
        $instrucao = mysqli_query($conexao,$sql);
        foreach ($instrucao as $exibe) 
        {
            $nome = $exibe['nome_ani'];
            $raca = $exibe['raca'];
            $porte = $exibe['porte'];
            $sexo = $exibe['sexo'];

            echo "Olá ".$nome_user."!<br>  Você marcou um encontro com o(a) $nome. <br> <br><b>Esperamos você!!</b><br><br>";
            echo "OBS: Você receberá as demais informações no seu e-mail:  ".$email." <br>";
            echo "<br><br>";
        }

       
        use PHPMailer\PHPMailer\PHPMailer;
        use PHPMailer\PHPMailer\SMTP;
        use PHPMailer\PHPMailer\Exception;
        
        require_once ('../../testes/vendor/autoload.php');
        
        $mail = new PHPMailer(true);
        try {
        // Server settings
            $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
            $mail->isSMTP();                                            // Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                       // Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            // Use SSL (change from 'tls' to 'ssl')
            $mail->Username   = 'saveasoul245@gmail.com';              // SMTP username
            $mail->Password   = '20saveasoul23';                             // SMTP password
            $mail->Port       = 465;                                    // TCP port to connect to (use 465 for SSL)
        
            $mail->setFrom('saveasoul245@gmail.com', 'Destinatario');
            $mail->addAddress({$email}, 'Remetente');     
        
        
            $mail->isHTML(true);                                
            $mail->Subject = 'Olá'.$nome_user.'. Agradecemos muito a sua participação no projeto.';
            $mail->Body = 'Olá! Aqui tem fala é a ONG Save a Soul.<br> 
                            Você marcou uma entevista de adoção com o(a)'.$nome.'Sua entrevista será dia '.$data.' as '.$hora.'.<br>
                            Sua entrevista será realizada na Av. Ten. Marques, s/n - Fazendinha, Santana de Parnaíba - SP, 06529-001. 
                            Na sala 13.
                            <br><br>
                            Esperamos você lá.
            ';
        
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


    

?>