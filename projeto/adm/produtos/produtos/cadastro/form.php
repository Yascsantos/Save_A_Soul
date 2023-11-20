<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=c">

    <title>Cadastro dos produtos</title>
</head>
<body>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&display=swap');
    main{
  
  display: flex;
  align-items: center;
  justify-content: center;
  padding: 20px;
  min-height: 10vh;

}
a {
    
      font-size: 0.9rem;
      text-decoration:none;
      font-size: 0.9rem;
      font-weight:600;
      color: black;
      
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
body{
        font-family: 'Poppins';
        background-size:cover;
        background-image:url(../../../../index/imgs/fundo.jpg);

       
    }

</style>
<body>
    <main>
    <div class='encontro' > 
    <h1>Cadastro de Produtos</h1>
    <a href="./infos/pro.php">Listar produtos</a><br>
    <a href="../pg02.html">Voltar</a> <br>

    <form action="cad.php" method="post">
        <div class='input-dados'>
    <label>Categoria do produto: </label>
    <br>
    <?= include("../listagem/cat.php");?> <br>

        <label>Produto: </label>
        <input type="text" placeholder="Produto" name="prod">
        <div class='input-senha'>
        <label>Preço: </label>
        <input type="number" placeholder="Preço" name="preco">
<div>
        <label>Modelo: </label>
        <input type="text" placeholder="Modelo" name="mod">

<<<<<<< HEAD
        <button input type="submit" name="cadastrar" value="Cadastrar produto">Cadastrar</button>
        </div>
=======
        <label>Outros: </label>
        <input type="text" placeholder="Outras informações" name="out">
        <br></div>

        <input type="submit" name="cadastrar" value="Cadastrar">
      
>>>>>>> 270f7cce6ab875feca11efd7c0d591abfa0e0772

</div>
</main>

</form>


</body>
</html>