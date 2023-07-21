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

-- Copiando dados para a tabela save.animal: ~2 rows (aproximadamente)
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
	(6, 'Tigelas'),
	(7, 'Roupas');
/*!40000 ALTER TABLE `categoria` ENABLE KEYS */;

-- Copiando dados para a tabela save.cores: ~4 rows (aproximadamente)
/*!40000 ALTER TABLE `cores` DISABLE KEYS */;
INSERT INTO `cores` (`id_cor`, `id_pro`, `cor`) VALUES
	(1, 1, 'Roxo'),
	(2, 1, 'Azul'),
	(4, 2, 'Azul'),
	(5, 2, 'Roxo');
/*!40000 ALTER TABLE `cores` ENABLE KEYS */;

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

-- Copiando dados para a tabela save.imgpro: ~4 rows (aproximadamente)
/*!40000 ALTER TABLE `imgpro` DISABLE KEYS */;
INSERT INTO `imgpro` (`id_imgpro`, `id_pro`, `img`) VALUES
	(3, 2, '../img_pro/2023.07.13-16.44.51.jpg'),
	(4, 2, '../img_pro/2023.07.13-16.45.01.jpg'),
	(5, 1, '../img_pro/2023.07.19-18.28.03.jpg');
/*!40000 ALTER TABLE `imgpro` ENABLE KEYS */;

-- Copiando dados para a tabela save.produto: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `produto` DISABLE KEYS */;
INSERT INTO `produto` (`id_pro`, `id_cat`, `prod`, `preco`, `qtd`, `modelo`, `outros`, `img_pro`) VALUES
	(1, 1, 'Botinha para cachorro', 15.00, 12, 'Botinha para cachorro', 'Botinha para cachorros de pequeno porte.', '../listagem/img/2023.07.18-17.48.31.jpg'),
	(2, 2, 'Tigela para Ã¡gua ', 20.00, 10, 'Tigela de Ã¡gua', 'Capacidade: 250ml', '../listagem/img/2023.07.19-16.18.08.jpg');
/*!40000 ALTER TABLE `produto` ENABLE KEYS */;

-- Copiando dados para a tabela save.tamanhos: ~4 rows (aproximadamente)
/*!40000 ALTER TABLE `tamanhos` DISABLE KEYS */;
INSERT INTO `tamanhos` (`id_tam`, `id_pro`, `tamanho`) VALUES
	(10, 1, 'G'),
	(12, 1, 'P'),
	(13, 1, 'M'),
	(14, 2, '15cm de diametro');
/*!40000 ALTER TABLE `tamanhos` ENABLE KEYS */;

-- Copiando dados para a tabela save.user: ~1 rows (aproximadamente)
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` (`id_user`, `usuario`, `nome`, `email`, `telefone`, `senha`, `foto`, `cep`, `pais`, `estado`, `cidade`, `bairro`, `rua`, `numero`) VALUES
	(1, 'Emy', 'Emily Wayland', 'Emyway@yahoo.com.br', '(11)96972-8455', 'way', '../img/padrao.png', '06528086', 'Brasil', 'SP', 'Santana de ParnaÃ­ba', '120', 'Rua do Astronauta', '03');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;

-- Copiando dados para a tabela save.voluntario: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `voluntario` DISABLE KEYS */;
/*!40000 ALTER TABLE `voluntario` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
