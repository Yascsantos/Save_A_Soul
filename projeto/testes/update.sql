UPDATE $tabela SET 
				usuario = '$usuario', 
				nome = '$nome',
				email = '$email', 
				telefone = '$tel', 
				cep = '$cep', 
				pais = '$pais', 
				estado = '$estado', 
				cidade = '$cidade', 
				rua = '$rua', 
				numero = '$numero', 
				WHERE $id = $id_user
				
UPDATE colaboradores SET 
	usuario = 'Yasmin', 
	nome = 'Yasmin Correia',
	email = 'yasmincorreiadossantos@290583@gmail.com', 
	telefone = '(11)95981-9355', 
	cep = '06528086',
	pais = 'Brasil', 
	estado = 'SP', 
	cidade = 'Santana de Parnaíba', 
	rua = 'Rua do Astronauta',
	numero = '280'
	WHERE id_user = '1';
	
	
		