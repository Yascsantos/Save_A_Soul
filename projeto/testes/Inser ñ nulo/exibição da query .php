<?php
/*Exibição dos valores vindo do DB pela query "SqlPesq"*/
	foreach ($pesquisa as $exibe)
	{ 
		echo $exibe['usuario'];
	}
?>