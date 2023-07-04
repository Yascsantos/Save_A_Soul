USE save;

SELECT  id_pro AS cod, nome_cat AS categoria, prod AS produto, preco AS preço, qtd AS quantidade, tamanho, cor, modelo, outros FROM produto p 
	INNER JOIN categoria cat ON p.id_cat = cat.id_cat;