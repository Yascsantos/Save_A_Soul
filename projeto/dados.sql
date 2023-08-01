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

-- Copiando dados para a tabela save.adocao: ~0 rows (aproximadamente)

-- Copiando dados para a tabela save.animal: ~2 rows (aproximadamente)
INSERT INTO `animal` (`id_ani`, `nome_ani`, `raca`, `porte`, `sexo`, `img_ani`) VALUES
	(2, 'Foozi', 'shih tzu', 'Pequeno', 'Macho', '../listagem/img/2023.07.13-16.46.40.jpg'),
	(11, 'Pietra', 'Pinscher', 'Pequeno', 'feminino', '../listagem/img/2023.07.17-15.58.01.jpg');

-- Copiando dados para a tabela save.carrinho: ~3 rows (aproximadamente)
INSERT INTO `carrinho` (`id_car`, `id_user`, `id_pro`, `cor`, `tamanho`, `qtd`, `valor`) VALUES
	(1, 1, 2, 'Roxo', '15cm', 30, 600.00),
	(3, 1, 1, 'Roxo', 'M', 10, 150.00),
	(4, 1, 3, 'Roxo', 'M', 2, 24.00),
	(5, 1, 2, 'Azul', '15cm', 2, 40.00),
	(6, 1, 1, 'Roxo', 'G', 9, 135.00),
	(7, 1, 2, 'Roxo', '15cm', 5, 100.00),
	(8, 2, 2, 'Azul', '15cm', 60, 1200.00),
	(9, 2, 3, 'Roxo', 'M', 30, 360.00),
	(10, 3, 3, 'Roxo', 'M', 30, 360.00),
	(11, 3, 1, 'Roxo', 'M', 3, 45.00),
	(12, 3, 1, 'Roxo', 'P', 3, 45.00),
	(13, 3, 2, 'Roxo', '15cm', 2, 40.00);

-- Copiando dados para a tabela save.categoria: ~7 rows (aproximadamente)
INSERT INTO `categoria` (`id_cat`, `nome_cat`) VALUES
	(1, 'Roupas'),
	(2, 'Tigelas/Potes'),
	(3, 'Sapatos'),
	(4, 'Acessorios'),
	(5, 'Racao'),
	(6, 'Tigelas'),
	(7, 'Roupas');

-- Copiando dados para a tabela save.cores: ~4 rows (aproximadamente)
INSERT INTO `cores` (`id_cor`, `id_pro`, `cor`) VALUES
	(1, 1, 'Roxo'),
	(2, 1, 'Azul'),
	(4, 2, 'Azul'),
	(5, 2, 'Roxo'),
	(6, 3, 'Roxo');

-- Copiando dados para a tabela save.descricao_ado: ~2 rows (aproximadamente)
INSERT INTO `descricao_ado` (`id_descad`, `id_user`, `texto`) VALUES
	(1, 1, 'Gente boa'),
	(3, 3, 'Legal');

-- Copiando dados para a tabela save.descricao_vol: ~0 rows (aproximadamente)
INSERT INTO `descricao_vol` (`id_descvol`, `id_user`, `texto`) VALUES
	(2, 2, 'Aprovada'),
	(3, 1, 'Legal'),
	(5, 3, 'Nice');

-- Copiando dados para a tabela save.imgani: ~0 rows (aproximadamente)
INSERT INTO `imgani` (`id_imgani`, `id_ani`, `img`) VALUES
	(3, 2, '../img_ani/2023.07.13-17.01.41.jpg');

-- Copiando dados para a tabela save.imgpro: ~3 rows (aproximadamente)
INSERT INTO `imgpro` (`id_imgpro`, `id_pro`, `img`) VALUES
	(3, 2, '../img_pro/2023.07.13-16.44.51.jpg'),
	(4, 2, '../img_pro/2023.07.13-16.45.01.jpg'),
	(5, 1, '../img_pro/2023.07.19-18.28.03.jpg');

-- Copiando dados para a tabela save.produto: ~2 rows (aproximadamente)
INSERT INTO `produto` (`id_pro`, `id_cat`, `prod`, `preco`, `qtd`, `modelo`, `outros`, `img_pro`) VALUES
	(1, 3, 'Botinha ', 15.00, 12, 'Botinha para cachorro', 'Botinha para cachorros de pequeno porte.', '../listagem/img/2023.07.18-17.48.31.jpg'),
	(2, 2, 'Tigela', 20.00, 10, 'Tigela para agua ', 'Capacidade: 250ml', '../listagem/img/2023.07.19-16.18.08.jpg'),
	(3, 1, 'Vestido', 12.00, 13, 'Vestido rodado. ', '---', '../listagem/img/2023.07.27-21.12.21.jpg');

-- Copiando dados para a tabela save.tamanhos: ~4 rows (aproximadamente)
INSERT INTO `tamanhos` (`id_tam`, `id_pro`, `tamanho`) VALUES
	(10, 1, 'G'),
	(12, 1, 'P'),
	(13, 1, 'M'),
	(14, 2, '15cm de diametro'),
	(15, 3, 'M'),
	(16, 2, '30 cm de diamentro');

-- Copiando dados para a tabela save.user: ~0 rows (aproximadamente)
INSERT INTO `user` (`id_user`, `usuario`, `nome`, `email`, `telefone`, `senha`, `foto`, `cep`, `pais`, `estado`, `cidade`, `bairro`, `rua`, `numero`) VALUES
	(1, 'Emy', 'Emily Wayland', 'Emyway@yahoo.com.br', '(11)96972-8455', 'way', '../img/padrao.png', '06528086', 'Brasil', 'SP', 'Santana de ParnaÃ­ba', '120', 'Rua do Astronauta', '03'),
	(2, 'Yas', 'Yasmin Correia dos Santos', 'yasmin@gmail.com', '(11)96972-8455', '3011', './img/454.jpg', '06528086', 'Brasil', 'SP', 'Santana de ParnaÃ­ba', '120', 'Rua do Astronauta', '280'),
	(3, 'Maya', 'Maya Santos', 'MayaST@gmail.com', '(11)96972-8459', 'maya', './img/Maya.jpg', '06528086', 'Brasil', 'SP', 'Santana de ParnaÃ­ba', 'Varzea de souza ', 'Rua do Astronauta', '03');

-- Copiando dados para a tabela save.voluntario: ~0 rows (aproximadamente)

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
