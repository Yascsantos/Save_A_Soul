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
INSERT INTO `animal` (`id_ani`, `nome_ani`, `raca`, `porte`, `sexo`, `img_ani`, `status`, `modalidade`) VALUES
	(2, 'Foozi', 'shih tzu', 'Pequeno', 'Macho', '../listagem/img/2023.07.13-16.46.40.jpg', 'disponivel', '---'),
	(11, 'Pietra', 'Pinscher', 'Pequeno', 'feminino', '../listagem/img/2023.07.17-15.58.01.jpg', 'disponivel', '---');

-- Copiando dados para a tabela save.armazena: ~8 rows (aproximadamente)
INSERT INTO `armazena` (`id_arm`, `id_user`, `id_pro`, `numero`, `cor`, `tamanho`, `qtd`, `valor`, `data`) VALUES
	(1, 1, 2, 4, 'Roxo', '15cm', 30, 600.00, '2022-08-23'),
	(2, 1, 1, 4, 'Roxo', 'M', 10, 150.00, '2022-08-23'),
	(3, 1, 3, 4, 'Roxo', 'M', 2, 24.00, '2022-08-23'),
	(4, 1, 2, 4, 'Roxo', '15cm', 30, 600.00, '2022-08-23'),
	(5, 1, 1, 4, 'Roxo', 'M', 10, 150.00, '2022-08-23'),
	(6, 1, 3, 4, 'Roxo', 'M', 2, 24.00, '2022-08-23'),
	(7, 1, 1, 15, 'Azul', 'P', 9, 135.00, '2022-08-23'),
	(8, 1, 1, 15, 'Roxo', 'G', 2, 30.00, '2022-08-23');

-- Copiando dados para a tabela save.carrinho: ~6 rows (aproximadamente)
INSERT INTO `carrinho` (`id_car`, `id_user`, `id_pro`, `cor`, `tamanho`, `qtd`, `valor`) VALUES
	(8, 2, 2, 'Azul', '15cm', 60, 1200.00),
	(9, 2, 3, 'Roxo', 'M', 30, 360.00),
	(10, 3, 3, 'Roxo', 'M', 30, 360.00),
	(11, 3, 1, 'Roxo', 'M', 3, 45.00),
	(12, 3, 1, 'Roxo', 'M', 3, 45.00),
	(13, 3, 2, 'Roxo', '20cm', 9, 180.00);

-- Copiando dados para a tabela save.categoria: ~7 rows (aproximadamente)
INSERT INTO `categoria` (`id_cat`, `nome_cat`) VALUES
	(1, 'Roupas'),
	(2, 'Tigelas/Potes'),
	(3, 'Sapatos'),
	(4, 'Acessorios'),
	(5, 'Racao'),
	(6, 'Tigelas'),
	(7, 'Roupas');

-- Copiando dados para a tabela save.cores: ~5 rows (aproximadamente)
INSERT INTO `cores` (`id_cor`, `id_pro`, `cor`) VALUES
	(1, 1, 'Roxo'),
	(2, 1, 'Azul'),
	(3, 3, 'Azul'),
	(4, 3, 'Roxo'),
	(5, 2, 'Marrom e cinza');

-- Copiando dados para a tabela save.imgani: ~0 rows (aproximadamente)

-- Copiando dados para a tabela save.imgpro: ~5 rows (aproximadamente)
INSERT INTO `imgpro` (`id_imgpro`, `id_pro`, `img`) VALUES
	(1, 1, '../img_pro/2023.08.01-23.19.10.jpg'),
	(2, 1, '../img_pro/2023.08.01-23.19.19.jpg'),
	(3, 2, '../img_pro/2023.08.01-23.20.40.jpg'),
	(4, 3, '../img_pro/2023.08.01-23.22.05.jpg'),
	(5, 3, '../img_pro/2023.08.01-23.22.10.jpg');

-- Copiando dados para a tabela save.pedido: ~0 rows (aproximadamente)

-- Copiando dados para a tabela save.produto: ~3 rows (aproximadamente)
INSERT INTO `produto` (`id_pro`, `id_cat`, `prod`, `preco`, `qtd`, `modelo`, `outros`, `img_pro`) VALUES
	(1, 1, 'Vestido', 15.00, 30, 'Vestido rodado', 'Vestido para cachorrinhas de pequeno/mÃ©dio porte.', '../../listagem/img/2023.08.06-14.57.25.jpg'),
	(2, 2, 'Pote para comida', 20.00, 10, 'Tigela dupla para comida', 'Capacidade: 250g', '../../listagem/img/2023.08.06-14.57.36.jpg'),
	(3, 3, 'Botinha de chuva', 25.00, 40, 'Botinha de chuva para cachorrinhos', '---', '../../listagem/img/2023.08.06-14.57.57.jpg');

-- Copiando dados para a tabela save.tamanhos: ~8 rows (aproximadamente)
INSERT INTO `tamanhos` (`id_tam`, `id_pro`, `tamanho`) VALUES
	(1, 1, 'P'),
	(2, 1, 'M'),
	(3, 1, 'G'),
	(4, 2, '15cm de diametro'),
	(5, 2, '20cm de diametro'),
	(6, 3, 'P'),
	(7, 3, 'M'),
	(8, 3, 'G');

-- Copiando dados para a tabela save.user: ~2 rows (aproximadamente)
INSERT INTO `user` (`id_user`, `usuario`, `nome`, `email`, `telefone`, `senha`, `foto`, `cep`, `pais`, `estado`, `cidade`, `bairro`, `rua`, `numero`) VALUES
	(1, 'Yas', 'Yasmin Santos', 'yasmin2@gmail.com', '(11)96972-8466', '$2y$10$dSLHbXdPWliH4.Ax..o8JuIdQnI.2Xq.dFNgyaEWR3FzucL1t63CW', './img/2023.08.22-11.59.47jfif', '06528086', 'Brasil', 'SP', 'Santana de ParnaÃ­ba', 'Varzea de souza ', 'Rua do Astronauta', '280'),
	(2, 'Yasmin ', 'Yasmin Santos', 'yasmin123@gmail.com', '11 959819355', '$2y$10$zssuyw/TLQregdRxDrE50.N2Jex.u/k3USSD3BWsO4UXiIfi5fB2C', '../img/padrao.png', '06528086', 'Brasil', 'SP', 'Santana de Parnaíba', '120', 'Rua do Astronauta', '280');

-- Copiando dados para a tabela save.voluntario: ~0 rows (aproximadamente)

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
