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

-- Copiando dados para a tabela save.animal: ~7 rows (aproximadamente)
INSERT INTO `animal` (`id_ani`, `nome_ani`, `raca`, `porte`, `sexo`, `img_ani`, `status`, `modalidade`) VALUES
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

-- Copiando dados para a tabela save.armazena: ~2 rows (aproximadamente)

-- Copiando dados para a tabela save.carrinho: ~3 rows (aproximadamente)

-- Copiando dados para a tabela save.categoria: ~7 rows (aproximadamente)

-- Copiando dados para a tabela save.cores: ~4 rows (aproximadamente)

-- Copiando dados para a tabela save.doacao: ~2 rows (aproximadamente)

-- Copiando dados para a tabela save.imgani: ~2 rows (aproximadamente)

-- Copiando dados para a tabela save.imgpro: ~3 rows (aproximadamente)

-- Copiando dados para a tabela save.parceiro: ~6 rows (aproximadamente)

-- Copiando dados para a tabela save.pedido: ~1 rows (aproximadamente)

-- Copiando dados para a tabela save.planos: ~0 rows (aproximadamente)
-- Copiando dados para a tabela save.produto: ~4 rows (aproximadamente)

-- Copiando dados para a tabela save.tamanhos: ~8 rows (aproximadamente)

-- Copiando dados para a tabela save.user: ~6 rows (aproximadamente)
INSERT INTO `user` (`id_user`, `usuario`, `nome`, `email`, `telefone`, `senha`, `foto`, `cep`, `pais`, `estado`, `cidade`, `bairro`, `rua`, `numero`) VALUES
	(2, 'Miih', 'Yasmin Santos', 'yasminsantosyasxp@gmail.com', '11 913280693', '$2y$10$bH1ZnYKV9BSpbz99qH0LjexgyJCxf796jRKr4xM/JwrO5KfCdbGl6', '../img/padrao.png', '06528086', 'Brasil', 'SP', 'Santana de Parnaíba', 'Varzéa de Souza', 'Rua do Astronauta', '280');

-- Copiando dados para a tabela save.voluntario: ~0 rows (aproximadamente)

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
