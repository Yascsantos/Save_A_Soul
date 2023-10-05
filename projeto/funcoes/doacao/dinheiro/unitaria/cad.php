
<?php
	include_once("../../../../conexaoBD.php");
	$tabela="parceiro";
	$campos = "nome, email, senha ";
	
	if (isset($_POST['cadastrar'])) 
	{
		$nome = $_POST['nome'];
		$email = $_POST['email'];
        $senha = $_POST['senha'];
		$data = $_POST['data'];

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
                VALUES ('$nome','$email','$hash')";
            
                $instrucao = mysqli_query($conexao,$sql);
            
                if (!$instrucao) 
                {
                    die(' Query Inválida: ' . mysqli_error($conexao));
    
                }

                else 
                {
                    $sql_code= "SELECT id_par FROM parceiro WHERE senha='$hash' and nome='$nome'";
                    $sql_query= $conexao->query($sql_code) or die("Falha na execução do códigdo SQL: ". mysqli_error($conexao));
        
                    foreach ($sql_query as $dados)
                    {

                        if(!isset($_SESSION))
                        {
                            session_start();
                        }
        
                        $_SESSION['id_par'] = $dados['id_par'];
                        $_SESSION['data'] = $data;
                    }
                    mysqli_close($conexao);
                    header ('Location:mens.php');
                    exit;
                }
    
            }
		}
		
		else 
		{
			echo "
			<main style='min-width: 320px; min-height: 20vh; color:white'></main>";
			echo "<h3>Senhas diferentes, por favor digite a mesma senha em ambos os campos<h3>";
		}


?>

