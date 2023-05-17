<?php
    //iniciação de sessão para trás o ID para a alteração
	if(!isset($_SESSION))
    {
        session_start();
    }

    //Conectando ao banco
        include_once("../../../conexaoBD.php");
    //Tabela no BD
        $tabela="colaboradores"; 
    //chave primaria
        $id = "id_user";  

        $id_user = $_SESSION['id_user']; //código e/ou id vindo do formulário anterior 


    //Execução da pesquisa no banco
        $sqlPesq = "SELECT * FROM $tabela WHERE $id= $id_user";

        $pesquisa = mysqli_query($conexao,$sqlPesq);

        if (!$pesquisa) 
        {
            die(' Query Inválida: ' . mysqli_error($conexao));
        } 

    //Transformando o array em variáveis de apoio
        foreach ($pesquisa as $dados)
        {
            $user = $dados['usuario'];
            $name = $dados ['nome'];
            $mail = $dados['email'];
            $phone = $dados['telefone'];
            $num = $dados['cep'];
            $country = $dados['pais'];
            $stade = $dados['estado'];
            $town = $dados['cidade'];
            $street = $dados['rua'];
            $nh = $dados['bairro'];
            $number = $dados['numero'];

        }

    //variáveis do form
        if (isset($_POST['alterar'])) 
        {
                $usuario = $_POST['usuario'];
                $nome = $_POST['nome'];
                $email = $_POST['email'];
                $tel = $_POST['telefone'];
                $cep = $_POST['cep'];
                $pais = $_POST['pais'];
                $estado = $_POST['estado'];
                $cidade = $_POST['cidade'];
                $rua = $_POST['rua'];
                $bairro = $_POST['bairro'];
                $numero = $_POST['numero'];

            //verificação de campos nulos
                if(empty($usuario)) {$usuario = $user;}
                if(empty($nome)) {$nome = $name;}
                if(empty($email)) { $email = $mail;}
                if(empty($telefone)){$tel = $phone;}
                if(empty($cep)) { $cep = $num;}
                if(empty($pais)) {$pais = $country;}
                if(empty($estado)) {$estado = $stade;}
                if(empty($cidade)) {$cidade = $town;}
                if(empty($bairro)) {$bairro = $nh;}
                if(empty($rua)) {$rua = $street;}
                if(empty($numero)) {$numero = $number;}
            
            //Script para atualizar um registro na tabela no Banco de Dados
                $sql = "UPDATE $tabela SET 
                usuario = '$usuario', 
                nome = '$nome',
                email = '$email', 
                telefone = '$tel', 
                cep = '$cep', 
                pais = '$pais', 
                estado = '$estado', 
                cidade = '$cidade', 
                bairro = '$bairro', 
                rua = '$rua', 
                numero = '$numero' 
                WHERE $id = '$id_user'";
                
            // executando instrução SQL para anterar os dados 
                $instrucao = mysqli_query($conexao,$sql);

            //concluindo operação
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

?>