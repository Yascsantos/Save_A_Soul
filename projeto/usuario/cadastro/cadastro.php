
<?php
	include_once("../../conexaoBD.php");
	$tabela="user";
	$campos = "usuario, nome, email, telefone, senha, confirma, foto";

	$diretorio = "../img/";
	$arq= "padrao.png"; 

	
	if (isset($_POST['avançar'])) 
	{
        $usuario = $_POST['usuario'];
		$nome = $_POST['nome'];
		$email = $_POST['email'];
        $tel = $_POST['telefone'];
        $senha = $_POST['senha'];
		$confirma = $_POST['confirma'];
        
        /*$cep = $_POST['cep'];
        $pais = $_POST['pais'];
        $estado = $_POST['estado'];
		$cidade = $_POST['cidade'];
        $rua = $_POST['rua'];
        $bairro = $_POST['bairro'];
        $numero = $_POST['numero'];*/

		$arquivo = $diretorio.$arq; 	
		
		if ( $senha == $confirma)
		{

            $senha_1 = strlen($senha);
            if ($senha_1 < 8)
            {
                echo "A senha tem que ter no mínimo 8 caracteres";
            }

            else
            {
                define ("SECRETKEY", "mysecretkey1234");
                $hash = password_hash($senha, PASSWORD_DEFAULT); //senha codificada 
    
                $sql = "INSERT INTO $tabela ($campos) 
                VALUES ('$usuario','$nome','$email','$tel','$hash', '$confirma','$arquivo')";
            
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
			echo "
			<main style='min-width: 320px; min-height: 20vh; color:white'>";
			echo "<h3>Senhas diferentes, por favor digite a mesma senha em ambos os campos<h3>";
			echo "<img src='./imgs/atenção.png' style='width: 100px;
			height: 8vh;'>

					</main>";
		}

	}
?>

