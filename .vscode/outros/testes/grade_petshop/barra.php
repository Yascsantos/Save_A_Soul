<?php
    //barra de pesquisa
    include_once("../../../../conexaoBD.php");

    //formulário
    echo "<form action='br.php' method='POST'>
            <input type='text'name='barra' placeholder='Pesquise aqui o produto'/>
            <input type='submit'name='pesquisar' value='Pesquisar'/>
          </form>";

   
    
      

?>