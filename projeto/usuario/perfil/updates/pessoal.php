<!--Parte em php-->
<?php
	//iniciação de sessão para trás o ID para a alteração
		if(!isset($_SESSION))
			{
				session_start();
			}

		include_once("../../../conexaoBD.php"); 
		$tabela="user"; 
		$id = "id_user";  
		$id_user = $_SESSION['id_user'];  
 	

		$sqlPesq = "SELECT * FROM $tabela WHERE $id= $id_user";
	
		$pesquisa = mysqli_query($conexao,$sqlPesq);

		if (!$pesquisa) 
			{
				die(' Query Inválida: ' . mysqli_error($conexao));
			} 


?>

<!--PARTE EM HTML-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/editar.css">
    <title>Editar perfil</title>
  
</head>
<body>
<main>
      <h1>Editar perfil</h1><br>
      </main>
<main>

  <div class="caixa">
      <div class="img-caixa">
          <img src="imgs/dog.jpg">
      </div>

    <div class="caixa-dados">
    <form action="update.php" method="POST">
               
    
    
          <h2>Editar </h2>
          <a href="../perfil.php">Voltar ao perfil</a><br><br>

            <div class="input-dados">

                <label for="nome"> Nome de usuário</label>
                <input type="text" name="usuario" placeholder="<?php foreach ($pesquisa as $exibe){ echo $exibe['usuario'];}?>" >
                <br> <br>

                <label for="nome"> Nome Completo</label>
                <input type="text" name="nome" placeholder="<?php foreach ($pesquisa as $exibe){ echo $exibe['nome'];}?>" >
                <br> <br>

                <label for="email">E-mail</label>
                <input type="email" name="email" placeholder="<?php foreach ($pesquisa as $exibe){ echo $exibe['email'];}?>" >
                <br> <br>

    
                <div class="input-senha">
                <label for="telefone">Telefone</label>
                <input type="tel" name="telefone" placeholder="<?php foreach ($pesquisa as $exibe){ echo $exibe['telefone'];}?>" >
                <br> <br> </div>
            </div>
            <br><br>
            
            <!--      
            <div class="input-dados">
            <div class="input-senha">
                <label for="cep"> CEP:</label>
                <input type="text" name="cep" placeholder="<?php foreach ($pesquisa as $exibe){ echo $exibe['cep'];}?>" >
                <br> <br></div>
                <div >
                <label for="estado">Estado:</label>
                <select name="estado">
                <option value=" " required> <?php foreach ($pesquisa as $exibe){ echo $exibe['estado'];}?></option>
                    <option value="AC"> AC-Acre</option>
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
                <br> <br>
                </div>
                <div class="input-senha">
                <label for="pais">País:</label>
                <input type="text" name="pais" placeholder="<?php foreach ($pesquisa as $exibe){ echo $exibe['pais'];}?>" >
                </div> 
                <div class="input-senha">
                <label for="cidade">Cidade:</label>
                <input type="text" name="cidade" placeholder="<?php foreach ($pesquisa as $exibe){ echo $exibe['cidade'];}?>" >
                <br> <br></div>
    
    
                <label for="bairro">Bairro</label>
                <input type="text" name="bairro" placeholder="<?php foreach ($pesquisa as $exibe){ echo $exibe['bairro'];}?>" >
                <br> <br>
                <div class="input-senha">
                <label for="rua">Rua:</label>
                <input type="text" name="rua" placeholder="<?php foreach ($pesquisa as $exibe){ echo $exibe['rua'];}?>" >
                </div>
                 <div class="input-senha">
                <label for="numero">Número:</label>
                <input type="number" name="numero" placeholder="<?php foreach ($pesquisa as $exibe){ echo $exibe['numero'];}?>" >
                <br> <br></div>
        -->
        <button input type="submit" name="alterar" value="Alterar"> Alterar</button>
        
    </div>
    </form>
        </section>
</body>
</html>