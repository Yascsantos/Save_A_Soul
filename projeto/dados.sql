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

-- Copiando dados para a tabela save.animal: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `animal` DISABLE KEYS */;
INSERT INTO `animal` (`id_ani`, `nome_ani`, `raca`, `porte`, `sexo`, `img_ani`) VALUES
	(2, 'Foozi', 'shih tzu', 'Pequeno', 'Macho', '../listagem/img/2023.07.13-16.46.40.jpg'),
	(11, 'Pietra', 'Pinscher', 'Pequeno', 'feminino', '../listagem/img/2023.07.17-15.58.01.jpg');
/*!40000 ALTER TABLE `animal` ENABLE KEYS */;

-- Copiando dados para a tabela save.armazena: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `armazena` DISABLE KEYS */;
/*!40000 ALTER TABLE `armazena` ENABLE KEYS */;

-- Copiando dados para a tabela save.carrinho: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `carrinho` DISABLE KEYS */;
INSERT INTO `carrinho` (`id_car`, `id_user`, `id_pro`, `cor`, `tamanho`, `qtd`, `valor`) VALUES
	(1, 1, 2, 'Roxo', '15cm', 30, 600.00),
	(3, 1, 1, 'Roxo', 'M', 10, 150.00),
	(4, 1, 3, 'Roxo', 'M', 2, 24.00),
	(8, 2, 2, 'Azul', '15cm', 60, 1200.00),
	(9, 2, 3, 'Roxo', 'M', 30, 360.00),
	(10, 3, 3, 'Roxo', 'M', 30, 360.00),
	(11, 3, 1, 'Roxo', 'M', 3, 45.00),
	(12, 3, 1, 'Roxo', 'M', 3, 45.00),
	(13, 3, 2, 'Roxo', '20cm', 9, 180.00);
/*!40000 ALTER TABLE `carrinho` ENABLE KEYS */;

-- Copiando dados para a tabela save.categoria: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `categoria` DISABLE KEYS */;
INSERT INTO `categoria` (`id_cat`, `nome_cat`) VALUES
	(1, 'Roupas'),
	(2, 'Tigelas/Potes'),
	(3, 'Sapatos'),
	(4, 'Acessorios'),
	(5, 'Racao'),
	(6, 'Tigelas'),
	(7, 'Roupas');
/*!40000 ALTER TABLE `categoria` ENABLE KEYS */;

-- Copiando dados para a tabela save.cores: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `cores` DISABLE KEYS */;
INSERT INTO `cores` (`id_cor`, `id_pro`, `cor`) VALUES
	(1, 1, 'Roxo'),
	(2, 1, 'Azul'),
	(3, 3, 'Azul'),
	(4, 3, 'Roxo'),
	(5, 2, 'Marrom e cinza');
/*!40000 ALTER TABLE `cores` ENABLE KEYS */;

-- Copiando dados para a tabela save.imgani: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `imgani` DISABLE KEYS */;
/*!40000 ALTER TABLE `imgani` ENABLE KEYS */;

-- Copiando dados para a tabela save.imgpro: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `imgpro` DISABLE KEYS */;
INSERT INTO `imgpro` (`id_imgpro`, `id_pro`, `img`) VALUES
	(1, 1, '../img_pro/2023.08.01-23.19.10.jpg'),
	(2, 1, '../img_pro/2023.08.01-23.19.19.jpg'),
	(3, 2, '../img_pro/2023.08.01-23.20.40.jpg'),
	(4, 3, '../img_pro/2023.08.01-23.22.05.jpg'),
	(5, 3, '../img_pro/2023.08.01-23.22.10.jpg');
/*!40000 ALTER TABLE `imgpro` ENABLE KEYS */;

-- Copiando dados para a tabela save.pedido: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `pedido` DISABLE KEYS */;
/*!40000 ALTER TABLE `pedido` ENABLE KEYS */;

-- Copiando dados para a tabela save.produto: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `produto` DISABLE KEYS */;
INSERT INTO `produto` (`id_pro`, `id_cat`, `prod`, `preco`, `qtd`, `modelo`, `outros`, `img_pro`) VALUES
	(1, 1, 'Vestido', 15.00, 30, 'Vestido rodado', 'Vestido para cachorrinhas de pequeno/mÃ©dio porte.', '../../listagem/img/2023.08.06-14.57.25.jpg'),
	(2, 2, 'Pote para comida', 20.00, 10, 'Tigela dupla para comida', 'Capacidade: 250g', '../../listagem/img/2023.08.06-14.57.36.jpg'),
	(3, 3, 'Botinha de chuva', 25.00, 40, 'Botinha de chuva para cachorrinhos', '---', '../../listagem/img/2023.08.06-14.57.57.jpg');
/*!40000 ALTER TABLE `produto` ENABLE KEYS */;

-- Copiando dados para a tabela save.tamanhos: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `tamanhos` DISABLE KEYS */;
INSERT INTO `tamanhos` (`id_tam`, `id_pro`, `tamanho`) VALUES
	(1, 1, 'P'),
	(2, 1, 'M'),
	(3, 1, 'G'),
	(4, 2, '15cm de diametro'),
	(5, 2, '20cm de diametro'),
	(6, 3, 'P'),
	(7, 3, 'M'),
	(8, 3, 'G');
/*!40000 ALTER TABLE `tamanhos` ENABLE KEYS */;

-- Copiando dados para a tabela save.user: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` (`id_user`, `usuario`, `nome`, `email`, `telefone`, `senha`, `foto`, `cep`, `pais`, `estado`, `cidade`, `bairro`, `rua`, `numero`) VALUES
	(1, 'Clary', 'Clarissa Fairy', 'Frairy@gmail.com', '(11)96972-8755', 'jace', '../img/padrao.png', '49060730', 'Brasil', 'SE', 'Aracaju', 'Santo AntÃ´nio', 'Travessa Santo AntÃ´nio', '18'),
	(2, 'Maya', 'Maya Santos', 'MayaST@gmail.com', '(11)96972-8455', '456', '../img/padrao.png', '60521080', 'Brasil', 'CE', 'Fortaleza', 'Henrique Jorge', 'Travessa VeranÃ³poles', '300'),
	(3, 'Izzy', 'Izabelle Lightwood', 'Lightwood@yahoo.com.br', '(11)96972-8400', 'Lightwood', '../img/padrao.png', '12501020', 'Brasil', 'SP', 'GuaratinguetÃ¡', 'Centro', 'Dom Pedro II', '20');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;

-- Copiando dados para a tabela save.voluntario: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `voluntario` DISABLE KEYS */;
/*!40000 ALTER TABLE `voluntario` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
