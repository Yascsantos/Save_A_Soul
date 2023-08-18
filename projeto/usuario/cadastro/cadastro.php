
<?php
	include_once("../../conexaoBD.php");
	$tabela="user";
	$campos = "usuario, nome, email, telefone, senha, foto, cep, pais,
    estado, cidade, rua, bairro, numero";

	$diretorio = "../img/";
	$arq= "padrao.png"; 

	
	if (isset($_POST['cadastrar'])) 
	{
        $usuario = $_POST['usuario'];
		$nome = $_POST['nome'];
		$email = $_POST['email'];
        $tel = $_POST['telefone'];
        $senha = $_POST['senha'];
		$confirma = $_POST['confirma'];
        $cep = $_POST['cep'];
        $pais = $_POST['pais'];
        $estado = $_POST['estado'];
		$cidade = $_POST['cidade'];
        $rua = $_POST['rua'];
        $bairro = $_POST['bairro'];
        $numero = $_POST['numero'];

		$arquivo = $diretorio.$arq; 	
		
		if ( $senha == $confirma)
		{
            define ("SECRETKEY", "mysecretkey1234");
            $hash = password_hash($senha, PASSWORD_DEFAULT); //senha codificada 
            //var_dump($hash);

			$sql = "INSERT INTO $tabela ($campos) 
			VALUES ('$usuario','$nome','$email','$tel','$hash','$arquivo', '$cep','$pais',
			'$estado','$cidade','$rua','$bairro','$numero')";
		
			$instrucao = mysqli_query($conexao,$sql);
		
			if (!$instrucao) 
			{
				die(' Query Inválida: ' . mysqli_error($conexao));

			} 
			else 
			{
				mysqli_close($conexao);
				header ('Location:../login/login.php');
				exit;
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
<!DOCTYPE html>
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
            <form action="cadastro.php" method="POST">
               
    
    
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

         </div>
        
         
    
            <div class="input-dados">
                <div class="input-senha">
                <label for="cep"> CEP:</label>
                <input type="text" name="cep" placeholder="Digite o seu CEP " required>
                </div>

                <div class="input-senha">
                <label for="pais">País:</label>
                <input type="text" name="pais" placeholder="Digite o país " required>
                </div>
         
             
              <div class="input-senha" >
                <label for="cidade">Cidade:</label>
                <input type="text" name="cidade" placeholder="Digite sua cidade" required>
                </div>
                <div  >
                    <label for="estado">Estado:</label>
                    <select name="estado" required>
                        <option value=" " required> Escolha um estado</option>
                        <option value="AC">AC-Acre</option>
                        <option value="AL">AL-Alagoas</option>
                        <option value="AP">AP-Amapá</option>
                        <option value="AM">AM-Amazonas</option>
                        <option value="BA">BA-Bahia</option>
                        <option value="CE">CE-Ceará</option>
                        <option value="DF">DF-Destrito Federal</option>
                        <option value="ES">ES-Espiríto Santo</option>
                        <option value="GO">GO-Goiás</option>
                        <option value="MA">MA-Maranhão</option>
                        <option value="MT">MT-Mato Grosso</option>
                        <option value="MS">MS-Mato Grosso do Sul</option>
                        <option value="MG">MG-Minas Gerais</option>
                        <option value="PA">PA-Pará</option>
                        <option value="PB">PB-Paraíba</option>
                        <option value="PE">PE-Pernambuco</option>
                        <option value="PI">PI-Piauí</option>
                        <option value="RJ">RJ-Rio de Janeiro</option>
                        <option value="RN">RN-Rio Grande do Norte</option>
                        <option value="RS">RS-Rio Grande do Sul</option>
                        <option value="RO">RO-Rondônia</option>
                        <option value="RR">RR-Roraima</option>
                        <option value="SC">SC-Santa Catarina </option>
                        <option value="SP">SP-São Paulo </option>
                        <option value="SE">SE-Sergipe</option>
                        <option value="TO">TO-Tocantins</option>
                    </select>
                  </div>
            
            </div>
          
                <div class="input-dados">
                    <label for="bairro">Bairro</label>
                    <input type="text" name="bairro" placeholder="Digite seu bairro" required>
                    <br> <br>
        
                    <div class="input-senha">
                    <label for="rua">Rua:</label>
                    <input type="text" name="rua" placeholder="Digite sua rua" required>
                </div>
                <div class="input-senha">
                    <label for="numero">Número:</label>
                    <input type="number" name="numero" placeholder="Digite o número da casa" required>
                    <br> <br></div>
      

        <button input type="submit" name="cadastrar" value="Cadastrar"> Cadastrar</button>
    </div>
    
</main>


    </form>
</body>
</html>

