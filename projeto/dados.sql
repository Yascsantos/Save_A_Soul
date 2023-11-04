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

-- Copiando dados para a tabela save.animal: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `animal` DISABLE KEYS */;
REPLACE INTO `animal` (`id_ani`, `nome_ani`, `raca`, `porte`, `sexo`, `img_ani`, `status`, `modalidade`) VALUES
	(2, 'Foozi', 'shih tzu', 'Pequeno', 'Macho', '../listagem/img/2023.07.13-16.46.40.jpg', 'disponivel', '---'),
	(11, 'Pietra', 'Pinscher', 'Pequeno', 'feminino', '../listagem/img/2023.07.17-15.58.01.jpg', 'disponivel', '---'),
	(13, 'duque', 'pitbull', 'medio', 'macho', '../listagem/img/2023.11.03-23.45.08.jpg', 'disponivel', '---'),
	(14, 'sophie', 'gato siamÃªs', 'pequeno', 'femea', '../listagem/img/2023.11.03-23.51.38.jpg', 'disponivel', '---'),
	(15, 'luna', 'srd', 'pequeno', 'macho', '../listagem/img/2023.11.04-00.42.20.jpg', 'disponivel', '---');
/*!40000 ALTER TABLE `animal` ENABLE KEYS */;

-- Copiando dados para a tabela save.armazena: ~8 rows (aproximadamente)
/*!40000 ALTER TABLE `armazena` DISABLE KEYS */;
REPLACE INTO `armazena` (`id_arm`, `id_user`, `id_pro`, `numero`, `cor`, `tamanho`, `qtd`, `valor`, `data`) VALUES
	(1, 1, 2, 4, 'Roxo', '15cm', 30, 600.00, '2022-08-23'),
	(2, 1, 1, 4, 'Roxo', 'M', 10, 150.00, '2022-08-23'),
	(3, 1, 3, 4, 'Roxo', 'M', 2, 24.00, '2022-08-23'),
	(4, 1, 2, 4, 'Roxo', '15cm', 30, 600.00, '2022-08-23'),
	(5, 1, 1, 4, 'Roxo', 'M', 10, 150.00, '2022-08-23'),
	(6, 1, 3, 4, 'Roxo', 'M', 2, 24.00, '2022-08-23'),
	(7, 1, 1, 15, 'Azul', 'P', 9, 135.00, '2022-08-23'),
	(8, 1, 1, 15, 'Roxo', 'G', 2, 30.00, '2022-08-23'),
	(9, 4, 2, 14, 'Marrom', '20cm', 1, 20.00, '2003-11-23');
/*!40000 ALTER TABLE `armazena` ENABLE KEYS */;

-- Copiando dados para a tabela save.carrinho: ~6 rows (aproximadamente)
/*!40000 ALTER TABLE `carrinho` DISABLE KEYS */;
REPLACE INTO `carrinho` (`id_car`, `id_user`, `id_pro`, `cor`, `tamanho`, `qtd`, `valor`) VALUES
	(8, 2, 2, 'Azul', '15cm', 60, 1200.00),
	(9, 2, 3, 'Roxo', 'M', 30, 360.00),
	(10, 3, 3, 'Roxo', 'M', 30, 360.00),
	(11, 3, 1, 'Roxo', 'M', 3, 45.00),
	(12, 3, 1, 'Roxo', 'M', 3, 45.00),
	(13, 3, 2, 'Roxo', '20cm', 9, 180.00);
/*!40000 ALTER TABLE `carrinho` ENABLE KEYS */;

-- Copiando dados para a tabela save.categoria: ~7 rows (aproximadamente)
/*!40000 ALTER TABLE `categoria` DISABLE KEYS */;
REPLACE INTO `categoria` (`id_cat`, `nome_cat`) VALUES
	(1, 'Roupas'),
	(2, 'Tigelas/Potes'),
	(3, 'Sapatos'),
	(4, 'Acessorios'),
	(5, 'Racao'),
	(6, 'Tigelas'),
	(7, 'Roupas');
/*!40000 ALTER TABLE `categoria` ENABLE KEYS */;

-- Copiando dados para a tabela save.cores: ~5 rows (aproximadamente)
/*!40000 ALTER TABLE `cores` DISABLE KEYS */;
REPLACE INTO `cores` (`id_cor`, `id_pro`, `cor`) VALUES
	(1, 1, 'Roxo'),
	(2, 1, 'Azul'),
	(3, 3, 'Azul'),
	(4, 3, 'Roxo'),
	(5, 2, 'Marrom e cinza');
/*!40000 ALTER TABLE `cores` ENABLE KEYS */;

-- Copiando dados para a tabela save.doacao: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `doacao` DISABLE KEYS */;
/*!40000 ALTER TABLE `doacao` ENABLE KEYS */;

-- Copiando dados para a tabela save.imgani: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `imgani` DISABLE KEYS */;
REPLACE INTO `imgani` (`id_imgani`, `id_ani`, `img`) VALUES
	(2, 13, '../img_ani/2023.11.03-23.44.36.jpg');
/*!40000 ALTER TABLE `imgani` ENABLE KEYS */;

-- Copiando dados para a tabela save.imgpro: ~5 rows (aproximadamente)
/*!40000 ALTER TABLE `imgpro` DISABLE KEYS */;
REPLACE INTO `imgpro` (`id_imgpro`, `id_pro`, `img`) VALUES
	(1, 1, '../img_pro/2023.08.01-23.19.10.jpg'),
	(2, 1, '../img_pro/2023.08.01-23.19.19.jpg'),
	(3, 2, '../img_pro/2023.08.01-23.20.40.jpg'),
	(4, 3, '../img_pro/2023.08.01-23.22.05.jpg'),
	(5, 3, '../img_pro/2023.08.01-23.22.10.jpg');
/*!40000 ALTER TABLE `imgpro` ENABLE KEYS */;

-- Copiando dados para a tabela save.parceiro: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `parceiro` DISABLE KEYS */;
/*!40000 ALTER TABLE `parceiro` ENABLE KEYS */;

-- Copiando dados para a tabela save.pedido: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `pedido` DISABLE KEYS */;
/*!40000 ALTER TABLE `pedido` ENABLE KEYS */;

-- Copiando dados para a tabela save.produto: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `produto` DISABLE KEYS */;
REPLACE INTO `produto` (`id_pro`, `id_cat`, `prod`, `preco`, `qtd`, `modelo`, `outros`, `img_pro`) VALUES
	(1, 1, 'Vestido', 15.00, 30, 'Vestido rodado', 'Vestido para cachorrinhas de pequeno/mÃ©dio porte.', '../../listagem/img/2023.08.06-14.57.25.jpg'),
	(2, 2, 'Pote para comida', 20.00, 10, 'Tigela dupla para comida', 'Capacidade: 250g', '../../listagem/img/2023.08.06-14.57.36.jpg'),
	(3, 3, 'Botinha de chuva', 25.00, 40, 'Botinha de chuva para cachorrinhos', '---', '../../listagem/img/2023.08.06-14.57.57.jpg');
/*!40000 ALTER TABLE `produto` ENABLE KEYS */;

-- Copiando dados para a tabela save.tamanhos: ~8 rows (aproximadamente)
/*!40000 ALTER TABLE `tamanhos` DISABLE KEYS */;
REPLACE INTO `tamanhos` (`id_tam`, `id_pro`, `tamanho`) VALUES
	(1, 1, 'P'),
	(2, 1, 'M'),
	(3, 1, 'G'),
	(4, 2, '15cm de diametro'),
	(5, 2, '20cm de diametro'),
	(6, 3, 'P'),
	(7, 3, 'M'),
	(8, 3, 'G');
/*!40000 ALTER TABLE `tamanhos` ENABLE KEYS */;

-- Copiando dados para a tabela save.user: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
REPLACE INTO `user` (`id_user`, `usuario`, `nome`, `email`, `telefone`, `senha`, `foto`, `cep`, `pais`, `estado`, `cidade`, `bairro`, `rua`, `numero`) VALUES
	(1, 'Yas', 'Yasmin Santos', 'yasmin2@gmail.com', '(11)96972-8466', '$2y$10$dSLHbXdPWliH4.Ax..o8JuIdQnI.2Xq.dFNgyaEWR3FzucL1t63CW', './img/2023.08.22-11.59.47jfif', '06528086', 'Brasil', 'SP', 'Santana de ParnaÃ­ba', 'Varzea de souza ', 'Rua do Astronauta', '280'),
	(2, 'Yasmin ', 'Yasmin Santos', 'yasmin123@gmail.com', '11 959819355', '$2y$10$zssuyw/TLQregdRxDrE50.N2Jex.u/k3USSD3BWsO4UXiIfi5fB2C', '../img/padrao.png', '06528086', 'Brasil', 'SP', 'Santana de Parnaíba', '120', 'Rua do Astronauta', '280'),
	(3, 'Daiane ', 'Daiane magalhaes', 'daiane.castro01@etec.sp.gov.br', '11961504684', '$2y$10$1YcwVBwUnh2DAV84cBBpzefOXPui4K9AG.XSeU16srjBKMCmbO6p6', '../img/padrao.png', '06535020', 'Brasil', 'RN', 'Santana', 'cid. SÃ£o Pedro', 'Av. Fortunato Camargo', '992'),
	(4, 'juana', 'juana bla', 'daiane.castro01@etec.sp.gov.br', '11961504684', '$2y$10$VPM7nJ01dyQzOPAfLEqXv.zlpjnl/xEv9z6M.2X6LiW6X4a4PMz.O', '../img/padrao.png', '06535020', 'Brasil', 'SP', 'Santana de ParnaÃ­ba', 'cid. SÃ£o Pedro', 'Av. Fortunato Camargo', '780');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;

-- Copiando dados para a tabela save.voluntario: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `voluntario` DISABLE KEYS */;
REPLACE INTO `voluntario` (`id_vol`, `id_user`, `id_ani`, `data_entre`, `horario`, `status`) VALUES
	(1, 4, 2, '2023-11-03', '00:40:00', 'Reprovado');
/*!40000 ALTER TABLE `voluntario` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
