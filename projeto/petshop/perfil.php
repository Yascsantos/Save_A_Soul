<!DOCTYPE html>
<html lang="en">

<head>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
            <link rel="stylesheet" href="style.css">
  

    <title>Save a soul|Compra</title>
</head>

<body>

    <header>
    <div class="logo">
              
              <img src="../index/imgs/logo.png" ></div> 

        <ul class="navegação">
       
  
         <div class="cabeçalho-link">
       
            <li><a href='../adm/produtos/produtos/listagem/pet/grade_nova.php'>Voltar</a></li>
            <li><a href="../index.php">Inicio</a></li>
            <li><a href="../index/ajude.php#sobre">Doar</a></li>
            <li><a href="../index.php#contato">Contate nos</a></li>
        </ul><!-- navegação -->
    </header>

    <section class="home">
        <?php
        include_once("../conexaoBD.php");
        include("protect.php");

        if (!isset($_SESSION)) {
            session_start();
        }

        $_SESSION['id_p'] = $_GET['codigo']; //id_pro
        $id = $_SESSION['id_p'];

        if ($_GET['codigo'] == "" && $_GET['codigo'] == 0) {

        }

        // IMAGENS
        $sql = "SELECT * FROM imgpro WHERE id_pro = $id";
        $instrucao = mysqli_query($conexao, $sql);

        foreach ($instrucao as $exibe) {
            echo "
            <div class='home-img'>
                <img src=" . $exibe['img'] . " class='one'>
            </div>
            ";
        }

        // PRODUTOS
        $sql_code = "SELECT * FROM produto WHERE id_pro = $id";
        $pesquisa = mysqli_query($conexao, $sql_code);

        foreach ($pesquisa as $exibe) {
            echo " <div class='home-text'>";
            echo "
                <h1> <br>" . $exibe['prod'] . "<br> </h1>
                <h5>" . $exibe['modelo'] . "</h5>
                <h3>R$" . $exibe['preco'] . "</h3>
            ";
        }
        echo "
            <form action='./carrinho/carrinho.php' method='POST'>
                <div class='tam'> 
                    <select name='tamanho' required class='tam'>
                ";

        // TAMANHOS
        $sql = "SELECT * FROM tamanhos WHERE id_pro = $id";
        $instrucao = mysqli_query($conexao, $sql);

        foreach ($instrucao as $exibe) {
            echo "<option for='" . $exibe['tamanho'] . "' value='" . $exibe['tamanho'] . "'required> " . $exibe['tamanho'] . "</option>";
        }

        echo "</select>";

        // CORES
        $code = "SELECT * FROM cores WHERE id_pro = $id";
        $busca = mysqli_query($conexao, $code);

        echo "
            <select name='cor' required class='cor'>
        ";
        foreach ($busca as $exibe) {
            echo "  
                <option for='" . $exibe['cor'] . "' name='cor' value=" . $exibe['cor'] . ">
                " . $exibe['cor'] . "</option>
            ";
        }
        echo "</select> <input type='number' placeholder='Qtd' name='qtd' min='1' class='input'></div>";

        echo "
            <br>
                <input type='submit' name='salvar' value= 'Adicionar ao carrinho' class='comprar'>
            </form>
        ";

        echo "</div>";
        ?>
    </section>
</body>

</html>
