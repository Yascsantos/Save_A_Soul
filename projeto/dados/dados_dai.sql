-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           5.7.33 - MySQL Community Server (GPL)
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Copiando dados para a tabela save.adocao: ~1 rows (aproximadamente)
/*!40000 ALTER TABLE `adocao` DISABLE KEYS */;
REPLACE INTO `adocao` (`id_ado`, `id_user`, `id_ani`, `data_entre`, `horario`, `status`) VALUES
	(1, 2, 2, '2023-11-11', '14:11:00', 'Aprovado');
/*!40000 ALTER TABLE `adocao` ENABLE KEYS */;

-- Copiando dados para a tabela save.animal: ~12 rows (aproximadamente)
/*!40000 ALTER TABLE `animal` DISABLE KEYS */;
REPLACE INTO `animal` (`id_ani`, `nome_ani`, `raca`, `porte`, `sexo`, `img_ani`, `status`, `modalidade`) VALUES
	(1, 'Billy', 'Vira Lata', 'Médio', 'macho', '../listagem/img/2023.12.05-21.41.27webp', 'disponivel', '---'),
	(2, 'Mel', 'Vira Lata', 'Grande', 'femea', '../listagem/img/2023.12.05-22.03.30jfif', 'disponivel', '---'),
	(3, 'Zorro', 'Vira Lata', 'Médio', 'macho', '../listagem/img/2023.12.05-22.05.04webp', 'disponivel', '---'),
	(4, 'Boro', 'Salsicha', '', 'Macho', '../listagem/img/2023.12.05-22.07.03jfif', 'disponivel', '---'),
	(5, 'Lola', 'Pincher', 'Grande', 'femea', '../listagem/img/2023.12.05-22.13.08.jpg', 'disponivel', '---'),
	(6, 'Félix', 'Bombaim', 'Pequeno', 'macho', '../listagem/img/2023.12.05-22.30.54jfif', 'disponivel', '---'),
	(7, 'Pérola', 'Bombaim', 'Médio', 'femea', '../listagem/img/2023.12.05-22.32.05jfif', 'disponivel', '---'),
	(9, 'Max', 'Korat ', 'Grande', 'macho', '../listagem/img/2023.12.05-22.33.53webp', 'disponivel', '---'),
	(10, 'Pelly', 'Vira Lata', 'Médio', 'femea', '../listagem/img/2023.12.05-22.35.08jfif', 'disponivel', '---'),
	(11, 'Luffi', 'Turkish Van', 'Pequeno', 'macho', '../listagem/img/2023.12.05-22.37.17.jpg', 'disponivel', '---'),
	(12, 'Percy', 'Siames', 'Médio', 'macho', '../listagem/img/2023.12.05-22.38.37jfif', 'disponivel', '---'),
	(13, 'Petúnia', 'Persa', 'Grande', 'femea', '../listagem/img/2023.12.05-22.39.43.jpg', 'disponivel', '---');
/*!40000 ALTER TABLE `animal` ENABLE KEYS */;

-- Copiando dados para a tabela save.armazena: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `armazena` DISABLE KEYS */;
REPLACE INTO `armazena` (`id_arm`, `id_user`, `id_pro`, `numero`, `cor`, `tamanho`, `qtd`, `valor`, `data`) VALUES
	(1, 2, 2, 14, 'Azul', '15cm', 60, 1200.00, '2003-11-23'),
	(3, 2, 2, 14, 'Marrom', '15cm', 12, 240.00, '2003-11-23');
/*!40000 ALTER TABLE `armazena` ENABLE KEYS */;

-- Copiando dados para a tabela save.carrinho: ~5 rows (aproximadamente)
/*!40000 ALTER TABLE `carrinho` DISABLE KEYS */;
REPLACE INTO `carrinho` (`id_car`, `id_user`, `id_pro`, `cor`, `tamanho`, `qtd`, `valor`) VALUES
	(11, 3, 1, 'Roxo', 'M', 3, 45.00),
	(12, 3, 1, 'Roxo', 'M', 3, 45.00),
	(13, 3, 2, 'Roxo', '20cm', 9, 180.00);
/*!40000 ALTER TABLE `carrinho` ENABLE KEYS */;

-- Copiando dados para a tabela save.categoria: ~7 rows (aproximadamente)
/*!40000 ALTER TABLE `categoria` DISABLE KEYS */;
REPLACE INTO `categoria` (`id_cat`, `nome_cat`) VALUES
	(1, 'Roupas'),
	(3, 'Sapatos'),
	(4, 'Acessorios'),
	(5, 'Racao'),
	(6, 'Tigelas'),
	(8, 'Higiene'),
	(9, 'Potes');
/*!40000 ALTER TABLE `categoria` ENABLE KEYS */;

-- Copiando dados para a tabela save.cores: ~24 rows (aproximadamente)
/*!40000 ALTER TABLE `cores` DISABLE KEYS */;
REPLACE INTO `cores` (`id_cor`, `id_pro`, `cor`) VALUES
	(1, 1, 'Roxo'),
	(2, 1, 'Azul'),
	(5, 2, 'Marrom e cinza'),
	(6, 1, 'xadrez vermelho'),
	(7, 2, 'vermelho '),
	(8, 2, 'Preto'),
	(9, 3, 'rosa'),
	(10, 3, 'azul'),
	(11, 4, 'azul'),
	(12, 5, 'azul'),
	(13, 6, 'estapa de sushi'),
	(14, 7, 'amarelo'),
	(15, 7, 'Cinza'),
	(16, 8, 'Preto'),
	(17, 8, 'Estampa de sushis'),
	(18, 9, 'Carne'),
	(19, 10, 'rosa'),
	(20, 10, 'azul'),
	(21, 11, 'pelos claros'),
	(22, 12, 'Preto'),
	(23, 13, 'Branco'),
	(25, 16, 'estampa de coracao'),
	(26, 17, 'Multicolorido Collar'),
	(27, 18, 'Bege'),
	(28, 19, 'rosa '),
	(29, 19, 'amarelo'),
	(30, 19, ' vermelho '),
	(31, 19, 'azul'),
	(32, 20, 'verde musgo'),
	(33, 21, 'Preto'),
	(34, 21, 'Bege'),
	(35, 22, 'Rosa'),
	(36, 23, 'Prata'),
	(37, 24, 'cinza'),
	(38, 25, 'Preto'),
	(39, 26, 'amarelo'),
	(40, 28, 'azul'),
	(41, 29, 'azul'),
	(42, 30, 'Ciano'),
	(43, 30, 'Estampa flores'),
	(44, 31, 'Preto');
/*!40000 ALTER TABLE `cores` ENABLE KEYS */;

-- Copiando dados para a tabela save.doacao: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `doacao` DISABLE KEYS */;
REPLACE INTO `doacao` (`id_doa`, `id_par`, `data`, `forma`) VALUES
	(1, 1, '2023-11-03', 'Dinheiro'),
	(2, 2, '2023-11-03', 'Mantimentos');
/*!40000 ALTER TABLE `doacao` ENABLE KEYS */;

-- Copiando dados para a tabela save.imgani: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `imgani` DISABLE KEYS */;
REPLACE INTO `imgani` (`id_imgani`, `id_ani`, `img`) VALUES
	(2, 11, '../img_ani/2023.11.03-17.51.03jfif'),
	(3, 2, '../img_ani/2023.11.03-17.52.03jfif'),
	(4, 12, '../img_ani/2023.11.03-17.52.28jfif');
/*!40000 ALTER TABLE `imgani` ENABLE KEYS */;

-- Copiando dados para a tabela save.imgpro: ~14 rows (aproximadamente)
/*!40000 ALTER TABLE `imgpro` DISABLE KEYS */;
REPLACE INTO `imgpro` (`id_imgpro`, `id_pro`, `img`) VALUES
	(7, 1, '../img_pro/2023.12.01-14.36.04.jpg'),
	(8, 2, '../img_pro/2023.12.01-14.38.36.jpg'),
	(9, 17, '../img_pro/2023.12.01-14.40.03.jpg'),
	(11, 18, '../img_pro/2023.12.01-14.41.25.jpg'),
	(12, 16, '../img_pro/2023.12.01-14.42.23.jpg'),
	(13, 13, '../img_pro/2023.12.01-14.42.50.jpg'),
	(14, 12, '../img_pro/2023.12.01-14.43.47.jpg'),
	(15, 11, '../img_pro/2023.12.01-14.44.15.jpg'),
	(16, 10, '../img_pro/2023.12.01-14.44.55.jpg'),
	(17, 9, '../img_pro/2023.12.01-14.45.29.jpg'),
	(18, 7, '../img_pro/2023.12.01-14.46.00.jpg'),
	(20, 5, '../img_pro/2023.12.01-14.47.00.jpg'),
	(21, 4, '../img_pro/2023.12.01-14.47.27.jpg'),
	(22, 3, '../img_pro/2023.12.01-14.47.59.jpg');
/*!40000 ALTER TABLE `imgpro` ENABLE KEYS */;

-- Copiando dados para a tabela save.parceiro: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `parceiro` DISABLE KEYS */;
REPLACE INTO `parceiro` (`id_par`, `nome`, `email`, `senha`) VALUES
	(1, 'Yara', 'aara@gmail.com', '$2y$10$ar0u6umBz8qT0fcgMD/5Me6ZmxdYBYLHUwPmkja/zPyIbC0P2zkEe'),
	(2, 'Yara', 'aara@gmail.com', '$2y$10$JbOc0m/SggGuhDFjHt7soe9yKHAJuaICFwhogc2qkxDZ8xiHHE0Qm');
/*!40000 ALTER TABLE `parceiro` ENABLE KEYS */;

-- Copiando dados para a tabela save.pedido: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `pedido` DISABLE KEYS */;
REPLACE INTO `pedido` (`id_ped`, `id_user`, `id_pro`, `numero`, `cor`, `tamanho`, `qtd`, `valor`) VALUES
	(1, 1, 2, 4, 'Roxo', '15cm', 30, 600.00),
	(2, 1, 1, 4, 'Roxo', 'M', 10, 150.00);
/*!40000 ALTER TABLE `pedido` ENABLE KEYS */;

-- Copiando dados para a tabela save.produto: ~16 rows (aproximadamente)
/*!40000 ALTER TABLE `produto` DISABLE KEYS */;
REPLACE INTO `produto` (`id_pro`, `id_cat`, `prod`, `preco`, `modelo`, `img_pro`) VALUES
	(1, 1, 'Vestido', 25.00, 'Plaid Print Pet Dress', '../../listagem/img/2023.12.01-13.39.18.jpg'),
	(2, 1, 'Moletom', 30.00, 'Tracksuit Top', '../../listagem/img/2023.12.01-13.42.12.jpg'),
	(3, 3, 'Sapatinho', 10.00, '5 Best Dog Boots of 2023', '../../listagem/img/2023.12.01-13.47.21.jpg'),
	(4, 6, 'Comedouro e bebedouro', 50.00, 'Double Cat Bowls with Water Bottle - Green', '../../listagem/img/2023.12.01-13.51.37.jpg'),
	(5, 6, 'Alimentador com bebedouro embutido', 20.00, ' Alimentador automatico para animais de estimacao', '../../listagem/img/2023.12.01-13.56.07.jpg'),
	(6, 4, 'conjunto de acessorios', 60.00, 'Bandana, peitoral, gravatinha, guias e coleiras', '../../listagem/img/2023.12.01-14.01.18.jpg'),
	(7, 4, 'Cama para gatos', 130.00, 'Cama para Gatos - Pet Circle - Amarelo', '../../listagem/img/2023.12.01-14.03.51.jpg'),
	(8, 4, 'Peitoral ', 120.00, 'Peitoral com mochila embutida', '../../listagem/img/2023.12.01-14.05.46.jpg'),
	(9, 5, 'Racao Special Dog ', 150.00, 'Special Dog sabor Carne e legumes 15kg', '../../listagem/img/2023.12.01-14.09.02.jpg'),
	(10, 9, 'Pote de armazenamento', 40.00, 'Pote de armazenamento de raÃ§Ã£o ', '../../listagem/img/2023.12.01-14.11.01.jpg'),
	(11, 8, 'Kit banho', 100.00, 'kit banho/shampoo, condicionador e perfume ', '../../listagem/img/2023.12.01-14.13.47.jpg'),
	(12, 8, 'Kit salao', 107.00, 'kit salao, escova para pelos longos,curtos e cortador de unha', '../../listagem/img/2023.12.01-14.15.43.jpg'),
	(13, 8, 'Tapete higienico', 50.00, 'Tapete Higienico Lavavel para Caes', '../../listagem/img/2023.12.01-14.17.22.jpg'),
	(16, 8, 'Saco Coletor De Fezes De Cachorro Kit 19 Rolos', 40.00, 'Saco Coletor De Fezes De Cachorro Kit 19 Rolos', '../../listagem/img/2023.12.01-14.21.06.jpg'),
	(17, 1, 'Moletom com capuz', 50.00, 'Moletom com capuz Design de dinossauros', '../../listagem/img/2023.12.01-14.26.07.jpg'),
	(18, 1, 'Sueter de croche', 30.00, 'Sueter de croche para gatos', '../../listagem/img/2023.12.01-14.27.40.jpg'),
	(19, 1, 'Kit primavera verao', 100.00, ' Spring Summer Dog Dress Dog ', '../../listagem/img/2023.12.06-14.32.01.jpg'),
	(20, 1, 'conjunto festa', 50.00, 'Festa / Alta Costura - ColeÃ§Ã£o de Legal pra Cachorro', '../../listagem/img/2023.12.07-18.54.21.jpg'),
	(21, 1, 'Dog suit ', 100.00, 'Customized dog Suit', '../../listagem/img/2023.12.07-19.01.54.jpg'),
	(22, 1, 'conjunto school', 100.00, 'uniformes para cÃ£es pequenos e mÃ©dios', '../../listagem/img/2023.12.07-19.05.20.jpg'),
	(23, 4, 'Coleira de brilhos', 50.00, 'Colar para animal de estimaÃ§Ã£o decoraÃ§Ã£o de strass pata amuleto', '../../listagem/img/2023.12.07-19.07.27.jpg'),
	(24, 4, 'Coleira reflexiva', 5.00, 'Coleira reflexiva de decoraÃ§Ã£o de sino com estampa de pata', '../../listagem/img/2023.12.07-19.08.59.jpg'),
	(25, 4, 'Peitoral para cats', 20.00, '1peÃ§a ArnÃªs de gato respirÃ¡vel & coleira de gato 1pc, reflexivo', '../../listagem/img/2023.12.07-19.10.55.jpg'),
	(26, 8, 'Escova de banho', 12.00, 'Escova de banho aleatÃ³ria para animais de estimaÃ§Ã£o com design de garra 1 peÃ§a', '../../listagem/img/2023.12.07-19.14.22.jpg'),
	(28, 6, 'Tigela de alimentacao lenta', 32.00, 'Enriquecedor ambiental', '../../listagem/img/2023.12.07-19.18.11.jpg'),
	(29, 6, 'Tigela de enriquecimento ambiental', 39.00, '20 amazing gadgets your dog canot live without', '../../listagem/img/2023.12.07-19.20.36.jpg'),
	(30, 4, 'Pacote passeio', 30.00, 'Pacote com colerira com laco, bolsinha de coletor e guia', '../../listagem/img/2023.12.07-19.24.02.jpg'),
	(31, 4, 'Bolsa de viagem', 154.00, 'Bolsa multiuso para cÃ£es ao ar livre, aviÃ£o aprovado com fecho de seguranÃ§a com trava', '../../listagem/img/2023.12.07-19.29.49.jpg');
/*!40000 ALTER TABLE `produto` ENABLE KEYS */;

-- Copiando dados para a tabela save.tamanhos: ~27 rows (aproximadamente)
/*!40000 ALTER TABLE `tamanhos` DISABLE KEYS */;
REPLACE INTO `tamanhos` (`id_tam`, `id_pro`, `tamanho`) VALUES
	(1, 1, 'P'),
	(2, 2, 'P'),
	(3, 2, 'G'),
	(4, 3, 'P'),
	(5, 3, 'M'),
	(6, 4, '10cm x10cm'),
	(7, 5, '30cm x 30cm'),
	(8, 6, 'P'),
	(9, 6, 'M'),
	(10, 6, 'G'),
	(11, 7, 'P'),
	(12, 7, 'G'),
	(13, 7, 'GG'),
	(14, 7, 'M'),
	(15, 8, 'P'),
	(16, 9, '15kg'),
	(17, 10, '12Litros'),
	(18, 11, '500ml'),
	(19, 12, ''),
	(21, 13, '1m x 1m'),
	(22, 16, ''),
	(23, 17, 'P'),
	(24, 17, 'M'),
	(25, 17, 'G'),
	(26, 18, 'M'),
	(27, 18, 'P'),
	(28, 17, 'G'),
	(29, 19, 'porte pequeno'),
	(30, 20, 'P'),
	(31, 21, 'P'),
	(32, 22, 'P'),
	(33, 23, 'XS'),
	(34, 24, 'P'),
	(35, 25, 'M'),
	(36, 26, 'Unico'),
	(37, 28, 'unico'),
	(38, 29, 'Unico'),
	(39, 30, 'Unico'),
	(40, 31, 'unico');
/*!40000 ALTER TABLE `tamanhos` ENABLE KEYS */;

-- Copiando dados para a tabela save.user: ~1 rows (aproximadamente)
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
REPLACE INTO `user` (`id_user`, `usuario`, `nome`, `email`, `telefone`, `senha`, `foto`, `cep`, `pais`, `estado`, `cidade`, `bairro`, `rua`, `numero`) VALUES
	(1, 'Daiane', 'Daiane MagalhÃ£es de Castro', 'daianemagalhaesdecasro@gmail.com', '+5511961504684', '$2y$10$8SJY9ENUSrJbRhi0iSv1R.r3Pk6saaEf6CTdA2eD.RRl/.7Ppkk1S', '../img/padrao.png', '06535020', 'Brasil', 'RN', 'Santana', 'cid. SÃ£o Pedro', 'Av. Fortunato Camargo', '992'),
	(2, 'Miih', 'Yasmin Santos', 'yasminsantosyasxp@gmail.com', '11 913280693', '$2y$10$bH1ZnYKV9BSpbz99qH0LjexgyJCxf796jRKr4xM/JwrO5KfCdbGl6', '../img/padrao.png', '06528086', 'Brasil', 'SP', 'Santana de Parnaíba', 'Varzéa de Souza', 'Rua do Astronauta', '280');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;

-- Copiando dados para a tabela save.voluntario: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `voluntario` DISABLE KEYS */;
/*!40000 ALTER TABLE `voluntario` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
