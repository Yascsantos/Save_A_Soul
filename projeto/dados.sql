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

-- Copiando dados para a tabela save.adocao: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `adocao` DISABLE KEYS */;
/*!40000 ALTER TABLE `adocao` ENABLE KEYS */;

-- Copiando dados para a tabela save.animal: ~7 rows (aproximadamente)
/*!40000 ALTER TABLE `animal` DISABLE KEYS */;
INSERT INTO `animal` (`id_ani`, `nome_ani`, `raca`, `porte`, `sexo`, `img_ani`) VALUES
	(2, 'Foozi', 'shih tzu', '', 'Macho', '../listagem/img/2023.07.13-16.46.40.jpg'),
	(11, 'Pietra', 'Pinscher', '', 'feminino', '../listagem/img/2023.07.17-15.58.01.jpg');
/*!40000 ALTER TABLE `animal` ENABLE KEYS */;

-- Copiando dados para a tabela save.categoria: ~6 rows (aproximadamente)
/*!40000 ALTER TABLE `categoria` DISABLE KEYS */;
INSERT INTO `categoria` (`id_cat`, `nome_cat`) VALUES
	(1, 'Roupas'),
	(2, 'Tigelas/Potes'),
	(3, 'Sapatos'),
	(4, 'AcessÃ³rios'),
	(5, 'RaÃ§Ã£o'),
	(6, 'Tigelas');
/*!40000 ALTER TABLE `categoria` ENABLE KEYS */;

-- Copiando dados para a tabela save.descricao_ado: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `descricao_ado` DISABLE KEYS */;
/*!40000 ALTER TABLE `descricao_ado` ENABLE KEYS */;

-- Copiando dados para a tabela save.descricao_vol: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `descricao_vol` DISABLE KEYS */;
INSERT INTO `descricao_vol` (`id_descvol`, `id_user`, `texto`) VALUES
	(2, 2, 'Aprovada');
/*!40000 ALTER TABLE `descricao_vol` ENABLE KEYS */;

-- Copiando dados para a tabela save.imgani: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `imgani` DISABLE KEYS */;
INSERT INTO `imgani` (`id_imgani`, `id_ani`, `img`) VALUES
	(3, 2, '../img_ani/2023.07.13-17.01.41.jpg');
/*!40000 ALTER TABLE `imgani` ENABLE KEYS */;

-- Copiando dados para a tabela save.imgpro: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `imgpro` DISABLE KEYS */;
INSERT INTO `imgpro` (`id_imgpro`, `id_pro`, `img`) VALUES
	(3, 2, '../img_pro/2023.07.13-16.44.51.jpg'),
	(4, 2, '../img_pro/2023.07.13-16.45.01.jpg');
/*!40000 ALTER TABLE `imgpro` ENABLE KEYS */;

-- Copiando dados para a tabela save.produto: ~4 rows (aproximadamente)
/*!40000 ALTER TABLE `produto` DISABLE KEYS */;
INSERT INTO `produto` (`id_pro`, `id_cat`, `prod`, `preco`, `qtd`, `tamanho`, `cor`, `modelo`, `outros`, `img_pro`) VALUES
	(2, 2, 'Tigela', 10.00, 30, '15cm de diametro', 'Roxo', 'Tigela de Ã¡gua', 'Capacidade: 250ml', '../listagem/img/2023.07.13-16.44.42.jpg'),
	(3, 1, 'Lacinho', 5.00, 12, '5cm', 'Rosa', 'Lacinho para amarrar', '---', '../listagem/img/2023.07.13-16.46.01.jpg'),
	(4, 2, 'Camiseta', 10.00, 10, 'Pequeno', 'Azul', 'Camiseta de manga longa', 'Camiseta para cachorros grandes de manga longa.', '../listagem/img/2023.07.14-16.44.34.jpg'),
	(5, 3, 'Botinha', 10.00, 10, '5cm', 'Vermelho', 'Botinha cano baixo', 'Botinha para cachorros de pequeno porte.', '../listagem/img/2023.07.17-15.44.00.jpg');
/*!40000 ALTER TABLE `produto` ENABLE KEYS */;

-- Copiando dados para a tabela save.user: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` (`id_user`, `usuario`, `nome`, `email`, `telefone`, `senha`, `foto`, `cep`, `pais`, `estado`, `cidade`, `bairro`, `rua`, `numero`) VALUES
	(1, 'Yas', 'Yasmin Correia dos Santos', 'yasmin2@gmail.com', '959819355', '3011', '../img/padrao.png', '06528086', 'Brasil', ' ', 'Santana de ParnaÃ­ba', '120', 'Rua do Astronauta', '280'),
	(2, 'Maya', 'Maya Santos', 'MayaST@gmail.com', '(11)96972-8466', '123', '../img/padrao.png', '06528086', 'Brasil', ' ', 'Santana de ParnaÃ­ba', '120', 'Rua do Astronauta', '280');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;

-- Copiando dados para a tabela save.voluntario: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `voluntario` DISABLE KEYS */;
/*!40000 ALTER TABLE `voluntario` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
