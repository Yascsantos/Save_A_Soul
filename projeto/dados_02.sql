-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           8.0.30 - MySQL Community Server - GPL
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Copiando dados para a tabela save.adocao: ~1 rows (aproximadamente)
INSERT INTO `adocao` (`id_ado`, `id_user`, `id_ani`, `data_entre`, `horario`, `status`) VALUES
	(1, 2, 2, '2023-11-11', '14:11:00', 'Aprovado');

-- Copiando dados para a tabela save.animal: ~3 rows (aproximadamente)
INSERT INTO `animal` (`id_ani`, `nome_ani`, `raca`, `porte`, `sexo`, `img_ani`, `status`, `modalidade`) VALUES
	(2, 'Foozi', 'shih tzu', 'Pequeno', 'Macho', '../listagem/img/2023.11.03-17.51.42jfif', 'indisponivel', 'adocao'),
	(11, 'Pietra', 'Pinscher', 'Pequeno', 'feminino', '../listagem/img/2023.07.17-15.58.01.jpg', 'disponivel', '---'),
	(12, 'Garfiel', 'Persa', 'Grande', 'macho', '../listagem/img/2023.11.03-17.49.00jfif', 'disponivel', '---');

-- Copiando dados para a tabela save.armazena: ~2 rows (aproximadamente)
INSERT INTO `armazena` (`id_arm`, `id_user`, `id_pro`, `numero`, `cor`, `tamanho`, `qtd`, `valor`, `data`) VALUES
	(1, 2, 2, 14, 'Azul', '15cm', 60, 1200.00, '2003-11-23'),
	(3, 2, 2, 14, 'Marrom', '15cm', 12, 240.00, '2003-11-23');

-- Copiando dados para a tabela save.carrinho: ~5 rows (aproximadamente)
INSERT INTO `carrinho` (`id_car`, `id_user`, `id_pro`, `cor`, `tamanho`, `qtd`, `valor`) VALUES
	(1, 1, 2, 'Roxo', '15cm', 30, 600.00),
	(3, 1, 1, 'Roxo', 'M', 10, 150.00),
	(11, 3, 1, 'Roxo', 'M', 3, 45.00),
	(12, 3, 1, 'Roxo', 'M', 3, 45.00),
	(13, 3, 2, 'Roxo', '20cm', 9, 180.00);

-- Copiando dados para a tabela save.categoria: ~8 rows (aproximadamente)
INSERT INTO `categoria` (`id_cat`, `nome_cat`) VALUES
	(1, 'Roupas'),
	(2, 'Tigelas/Potes'),
	(3, 'Sapatos'),
	(4, 'Acessorios'),
	(5, 'Racao'),
	(6, 'Tigelas'),
	(7, 'Roupas'),
	(8, 'Higiene');

-- Copiando dados para a tabela save.cores: ~3 rows (aproximadamente)
INSERT INTO `cores` (`id_cor`, `id_pro`, `cor`) VALUES
	(1, 1, 'Roxo'),
	(2, 1, 'Azul'),
	(5, 2, 'Marrom e cinza');

-- Copiando dados para a tabela save.doacao: ~2 rows (aproximadamente)
INSERT INTO `doacao` (`id_doa`, `id_par`, `data`, `forma`) VALUES
	(1, 1, '2023-11-03', 'Dinheiro'),
	(2, 2, '2023-11-03', 'Mantimentos');

-- Copiando dados para a tabela save.imgani: ~3 rows (aproximadamente)
INSERT INTO `imgani` (`id_imgani`, `id_ani`, `img`) VALUES
	(2, 11, '../img_ani/2023.11.03-17.51.03jfif'),
	(3, 2, '../img_ani/2023.11.03-17.52.03jfif'),
	(4, 12, '../img_ani/2023.11.03-17.52.28jfif');

-- Copiando dados para a tabela save.imgpro: ~3 rows (aproximadamente)
INSERT INTO `imgpro` (`id_imgpro`, `id_pro`, `img`) VALUES
	(1, 1, '../img_pro/2023.08.01-23.19.10.jpg'),
	(2, 1, '../img_pro/2023.08.01-23.19.19.jpg'),
	(6, 4, '../img_pro/2023.11.03-17.22.18jfif');

-- Copiando dados para a tabela save.parceiro: ~2 rows (aproximadamente)
INSERT INTO `parceiro` (`id_par`, `nome`, `email`, `senha`) VALUES
	(1, 'Yara', 'aara@gmail.com', '$2y$10$ar0u6umBz8qT0fcgMD/5Me6ZmxdYBYLHUwPmkja/zPyIbC0P2zkEe'),
	(2, 'Yara', 'aara@gmail.com', '$2y$10$JbOc0m/SggGuhDFjHt7soe9yKHAJuaICFwhogc2qkxDZ8xiHHE0Qm');

-- Copiando dados para a tabela save.pedido: ~2 rows (aproximadamente)
INSERT INTO `pedido` (`id_ped`, `id_user`, `id_pro`, `numero`, `cor`, `tamanho`, `qtd`, `valor`) VALUES
	(1, 1, 2, 4, 'Roxo', '15cm', 30, 600.00),
	(2, 1, 1, 4, 'Roxo', 'M', 10, 150.00);

-- Copiando dados para a tabela save.planos: ~0 rows (aproximadamente)

-- Copiando dados para a tabela save.produto: ~3 rows (aproximadamente)
INSERT INTO `produto` (`id_pro`, `id_cat`, `prod`, `preco`, `modelo`, `outros`, `img_pro`) VALUES
	(1, 1, 'Vestido', 15.00, 'Vestido rodado', 'Vestido para cachorrinhas de pequeno/mÃ©dio porte.', '../../listagem/img/2023.08.06-14.57.25.jpg'),
	(2, 2, 'Pote para comida', 20.00,'Tigela dupla para comida', 'Capacidade: 250g', '../../listagem/img/2023.08.06-14.57.36.jpg'),
	(4, 8, 'Kit de banho', 25.00, 'Para filhotes', '---', '../../listagem/img/2023.11.03-17.20.58jfif');

-- Copiando dados para a tabela save.tamanhos: ~7 rows (aproximadamente)
INSERT INTO `tamanhos` (`id_tam`, `id_pro`, `tamanho`) VALUES
	(1, 1, 'P'),
	(2, 1, 'M'),
	(3, 1, 'G'),
	(4, 2, '15cm de diametro'),
	(5, 2, '20cm de diametro'),
	(9, 4, 'Pequeno - 100 ml'),
	(10, 4, 'Grande - 250 mls');

-- Copiando dados para a tabela save.user: ~1 rows (aproximadamente)
INSERT INTO `user` (`id_user`, `usuario`, `nome`, `email`, `telefone`, `senha`, `foto`, `cep`, `pais`, `estado`, `cidade`, `bairro`, `rua`, `numero`) VALUES
	(1, 'Yas', 'Yasmin Santos', 'yasmin2@gmail.com', '(11)96972-8466', '$2y$10$uf5W..PEtc7Jr91STHU2ou77e6G4ontShNBnAiqTdnnf620r6.RZK', '../img/padrao.png', '06528086', 'Brasil', 'SP', 'Santana de ParnaÃ­ba', 'Varzea de souza ', 'Rua do Astronauta', '280'),
	(2, 'Aara', 'Yara', 'aara@gmail.com', '11 9 60320508', '$2y$10$ckFp4RAFeT1qbtXu6uhD9udM6zgcREABn4uijqedH1sZOdUtASIHK', '../img/padrao.png', '64049390', 'Brasil', 'PI', 'Teresina', 'Fátima', 'Rua Ipê', '12');

-- Copiando dados para a tabela save.voluntario: ~0 rows (aproximadamente)

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
