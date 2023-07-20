<?php
    //barra de pesquisa
    include_once("../../../../conexaoBD.php");

    //formulário
    echo"
    <style>
    form .input-dados input{
      width: 100%;
      height: 30px;
      background-color: rgba(255, 255, 255, 0.32);
      border-radius: 20px;
      outline: none;
      border: 2px solid transparent;
      padding: 15px;
      font-size: 15px;
      color: #616161;
      transition: all 0.4s ease;
  }
  form .input-dados input:focus{
      border-color: pink;
  }
   select{
      width: 100%;
      height: 50px;
      background-color: rgba(255, 255, 255, 0.32);
      border-radius: 20px;
      outline: none;
      border: 2px solid transparent;
      padding: 13px;
      font-size: 15px;
      color: #616161;
      transition: all 0.4s ease;
  }
   button{
      width: 30%;
      height:30px;
      background: #adb5a0;
      border-radius: 20px;
      outline: none;
      border: none;
      margin-top: 15px;
      color: white;
     margin-left: 20%;
      font-size: 16px;
     
  } </style>";
    echo "<form action='br.php' method='POST'>
  <div class='input-dados'>

            <input type='text'name='barra' placeholder='Pesquise aqui o produto'/>
            <button input type='submit'name='pesquisar' value='Pesquisar'>pes</button>
            </div>
            </form>"
   ;
        

    
      

?>