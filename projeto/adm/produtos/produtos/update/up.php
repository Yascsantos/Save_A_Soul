<?php
    	
    /*caso o ocorra uma mudança de dados
	if (isset($_POST['alterar'])) 
    {
		$codigo = $_POST['codigo'];
        $cat = $_POST['cat'];
        $prod = $_POST['prod'];
        $preco = $_POST['preco'];
        $qtd = $_POST['qtd'];
        $tam = $_POST['tam'];
        $cor = $_POST['cor'];
        $mod = $_POST['mod'];
        $out = $_POST['out'];
            
		$sql = "UPDATE $tabela SET 
			id_cat = '$cat',
            prod = '$prod', 
            preco = '$preco',
            qtd = '$qtd', 
            tamanho = '$tam', 
            cor = '$cor', 
            modelo = '$mod', 
            outros = '$out' 
			WHERE $id = $codigo";
			
		$instrucao = mysqli_query($conexao,$sql);
		
		if (!$instrucao) 
        {
			die(' Query Inválida: ' . mysqli_error($conexao));
	
		} 
        else 
        {
			mysqli_close($conexao);
            header ('location: ../listagem/list.php');

			exit;
		}
	}*/
    

?>