<?php
	include_once("../../conexaoBD.php");
	$tabela="user";
	$campos = "usuario, nome, email, telefone, senha, foto";

	$diretorio = "../img/";
	$arq= "padrao.png"; 

	
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="css/cadastro.css">
</head>
<body>
    <main>
      
            <h1>Cadastre-se</h1>
            </main>
    <main>
       
    <div class="caixa">
        <div class="img-caixa">
            <img src="imgs/dog.jpg">
        </div>
    
          <!--Formulário-->
          
          <div class="caixa-dados">
            <form action="" method="POST">
    
          <h2>Preencha seus dados</h2><br>
        <div class="input-dados">
            <div class="input-senha">
            <label for="nome"> Nome de usuário</label>
            <input type="text" name="usuario" placeholder="Digite um apelido" required>
            </div>

            <div class="input-senha">
            <label for="nome"> Nome Completo</label>
            <input type="text" name="nome" placeholder="Digite o seu nome " required>
            </div>
        </div>

            <div class="input-dados">
                <div class="input-senha">
                <label for="email">E-mail</label>
                <input type="email" name="email" placeholder="Digite o seu email" required>
                <br> </div>

                <div class="input-senha">
                <label for="telefone">Telefone</label>
                <input type="tel" name="telefone" placeholder="+55 (11) 96150-4684" required>
              </div>
                <div class="input-senha">
                <label for="senha">Senha</label>
                <input type="password" name="senha" placeholder="Digite sua senha" required>
                </div>

                <div class="input-senha">
                <label for="confirma">Confirmar Senha</label>
                <input type="password" name="confirma" placeholder="Confirme a senha" required>
                </div>
                <button input type="submit" name="avançar" value="avançar"> Avançar</button>
              <?php 
                if (isset($_POST['avançar'])) 
	{
        $usuario = $_POST['usuario'];
		$nome = $_POST['nome'];
		$email = $_POST['email'];
        $tel = $_POST['telefone'];
        $senha = $_POST['senha'];
		$confirma = $_POST['confirma'];
		$arquivo = $diretorio.$arq; 	
		
		if ( $senha == $confirma)
		{
            $senha_1 = strlen($senha);
            if ($senha_1 < 8)
            {
                echo "<p class='aviso'>A senha tem que ter no mínimo 8 caracteres</p>";
            }

            else
            {
                define ("SECRETKEY", "mysecretkey1234");
                $hash = password_hash($senha, PASSWORD_DEFAULT); //senha codificada 
    
                $sql = "INSERT INTO $tabela ($campos) 
                VALUES ('$usuario','$nome','$email','$tel','$hash','$arquivo')";
            
                $instrucao = mysqli_query($conexao,$sql);
            
                if (!$instrucao) 
                {
                    die(' Query Inválida: ' . mysqli_error($conexao));
    
                } 
                else 
                {
                    $sql_code= "SELECT id_user FROM user WHERE senha='$hash'";
                    $sql_query= $conexao->query($sql_code) or die("Falha na execução do códigdo SQL: ". mysqli_error($conexao));
        
                    foreach ($sql_query as $dados)
                    {
                        $user = $dados['id_user'];
                        if(!isset($_SESSION))
                        {
                            session_start();
                        }
        
                        $_SESSION['id_cad'] = $user;
        
                    }
                    mysqli_close($conexao);
                    header ('Location:endereco.html');
                    exit;
                }
    
            }
		}
		
		else 
		{
		
			echo "<p class='aviso'>Senhas diferentes, por favor digite a mesma senha em ambos os campos!!</p>";
			

		}

	}
?>
         </div>
      

    
    </div>
    
</main>


    </form>
</body>
</html>
