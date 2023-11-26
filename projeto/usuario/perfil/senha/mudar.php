<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar senha</title>
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&display=swap');
    main{
  
  display: flex;
  align-items: center;
  justify-content: center;
  padding: 20px;
  min-height: 10vh;

}
body{
    background-image:url(../../../petshop/imgs/patinha.png);
    background-color: #c7daa9;

   
}a{
    
      font-size: 0.9rem;
      text-decoration:none;
      font-size: 0.9rem;
      font-weight:600;
      color: black;
      
    }
    button{
    border:none ;
    background-color: #fff;
    font-size: 0.9rem;
    text-decoration:none;
    font-size: 0.9rem;
    font-weight:600;
    color: black;
    margin-left: 90%;
    font-family: 'Poppins', sans-serif;
    
  }
  button:hover{
    border-bottom:2px solid black ;
    
  }
    a:hover{
      color:#3a3a3b;
    }
    .encontro{
    box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.2);
width: 700px;
 margin-top: 200px;

font-family: 'Poppins', sans-serif;
background-color: rgba(255, 255, 255, 0.993);
padding: 30px 40px;
text-align: justify;
}
input label{
color: #4c5838;
font-weight: bold;
display: block;
margin-bottom: 5px;
}

form  input{
width: 20%;
height: 27px;
background-color: rgba(255, 255, 255, 0.32);
border-radius: 20px;
outline: none;
border: 2px solid transparent;
padding: 15px;
font-size: 15px;
color: #616161;
transition: all 0.4s ease;
}
form  input:focus{
border-color: #adb5a0;
}
input[type='submit']{
background:#4c5838;
color: #fff;
height: 47px;
}

     
       
.fechar {
    position: absolute;
    top: 10px;
    left: 20px;
    font-size: 24px;
    cursor: pointer;
    color:#2c491b;
}
.material-symbols-outlined{
        margin-top: -1px;
      margin-right: 10%;
        position: absolute;
    }


</style>
<body>
    <main>
    <div class='encontro' > 
    <h2>Erro</h2>
    <?php
    include_once("../../../conexaoBD.php");
	if(!isset($_SESSION))
    {
        session_start();
    }
    $id= $_SESSION['id_user'];

	if (isset($_POST['editar'])) 
	{
        $confirma = $_POST['confirma'];
        $senha = $_POST['senha'];

        if ( $senha == $confirma)
		{
            $senha_1 = strlen($senha);
            if ($senha_1 < 8)
            {
                echo '
                <style>p{
                    color:red;
                }</style> <p>A senha deve ter no minimo 8 caracteres</p>';
         
            }

            else
            {
                define ("SECRETKEY", "mysecretkey1234");
                $hash = password_hash($senha, PASSWORD_DEFAULT); //senha codificada 
                var_dump($hash);
                echo "<br>".$confirma;
            
            
                $sql = "UPDATE user SET  
                senha = '$hash'
                WHERE id_user = '$id'";
                    
                $instrucao = mysqli_query($conexao,$sql);
            
                if ($instrucao) 
                {
                    mysqli_close($conexao);
                    header ('Location:../perfil.php');
                    exit;
            
                } 
                else 
                {
                    die(' Query Inválida: ' . mysqli_error($conexao));
                }

            }

	}
}

?>
    <a href="../perfil.php">Voltar ao perfil</a><br><br>


    <form action="mudar.php" method="POST">
    
    <h2>Altere a senha</h2>
    <label for="senha">Nova senha:</label>
    <input type="password" name="senha" placeholder="Digite sua senha" required><br>

    <label for="confirma">Confirmar nova senha:</label>
    <input type="password" name="confirma" placeholder="Confirme a senha" required><br><br>

    <button input type="submit" name="editar" value="editar"> >Editar</button>
  


  </div>
    </div></form></main>
</body>
</html>