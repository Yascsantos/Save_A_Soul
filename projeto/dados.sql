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

-- Copiando dados para a tabela save.animal: ~1 rows (aproximadamente)
/*!40000 ALTER TABLE `animal` DISABLE KEYS */;
INSERT INTO `animal` (`id_ani`, `nome_ani`, `raca`, `porte`, `sexo`, `img_ani`) VALUES
	(2, 'Foozi', 'shih tzu', '', 'Macho', '../listagem/img/2023.07.12-16.33.16.jpg');
/*!40000 ALTER TABLE `animal` ENABLE KEYS */;

-- Copiando dados para a tabela save.categoria: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `categoria` DISABLE KEYS */;
INSERT INTO `categoria` (`id_cat`, `nome_cat`) VALUES
	(1, 'Roupas'),
	(2, 'Tigelas/Potes');
/*!40000 ALTER TABLE `categoria` ENABLE KEYS */;

-- Copiando dados para a tabela save.descricao_ado: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `descricao_ado` DISABLE KEYS */;
/*!40000 ALTER TABLE `descricao_ado` ENABLE KEYS */;

-- Copiando dados para a tabela save.descricao_vol: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `descricao_vol` DISABLE KEYS */;
/*!40000 ALTER TABLE `descricao_vol` ENABLE KEYS */;

-- Copiando dados para a tabela save.imgani: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `imgani` DISABLE KEYS */;
/*!40000 ALTER TABLE `imgani` ENABLE KEYS */;

-- Copiando dados para a tabela save.imgpro: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `imgpro` DISABLE KEYS */;
INSERT INTO `imgpro` (`id_imgpro`, `id_pro`, `img`) VALUES
	(1, 1, '../img_pro/2023.07.12-14.17.40.jpg'),
	(2, 1, '../img_pro/2023.07.12-14.17.47.jpg');
/*!40000 ALTER TABLE `imgpro` ENABLE KEYS */;

-- Copiando dados para a tabela save.produto: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `produto` DISABLE KEYS */;
INSERT INTO `produto` (`id_pro`, `id_cat`, `prod`, `preco`, `qtd`, `tamanho`, `cor`, `modelo`, `outros`, `img_pro`) VALUES
	(1, 1, 'Vestido', 20.00, 10, 'M', 'Rosa e azul', 'Vestido rodado', 'Vestido para cachorrinhas de pequeno/mÃ©dio porte.', '../listagem/img/2023.07.12-14.17.27.jpg');
/*!40000 ALTER TABLE `produto` ENABLE KEYS */;

-- Copiando dados para a tabela save.user: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
/*!40000 ALTER TABLE `user` ENABLE KEYS */;

-- Copiando dados para a tabela save.voluntario: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `voluntario` DISABLE KEYS */;
/*!40000 ALTER TABLE `voluntario` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
