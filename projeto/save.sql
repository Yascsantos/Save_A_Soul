DROP DATABASE if EXISTS save; 

CREATE DATABASE save;
USE save;

/*USUÁRIO*/
CREATE table user (
    id_user INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    usuario VARCHAR(50),
    nome VARCHAR(50),
    email VARCHAR(40),
    telefone VARCHAR(20),
    senha VARCHAR(20),
    foto VARCHAR(100),
    cep VARCHAR(8),
    pais VARCHAR(20),
    estado VARCHAR(5),
    cidade VARCHAR(50),
    bairro VARCHAR(30),
    rua VARCHAR(50),
    numero VARCHAR(10)
);


/*PRODUTO*/
CREATE TABLE categoria (
	id_cat INT  PRIMARY KEY NOT NULL AUTO_INCREMENT,
	nome_cat VARCHAR(50)
);



CREATE TABLE produto(
    id_pro INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    id_cat INT,
    prod VARCHAR(50), /*Nome do produto*/
    preco DECIMAL(10,2),
    qtd INT, 
    modelo VARCHAR(100),
    outros VARCHAR(100),
    img_pro VARCHAR(100),
    	 
		FOREIGN KEY (id_cat)REFERENCES categoria (id_cat)
		
);

CREATE TABLE imgpro (
	id_imgpro INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
	id_pro INT, 
	img VARCHAR(100),
	
		FOREIGN KEY (id_pro)REFERENCES produto (id_pro)	 
);

CREATE TABLE cores (
	id_cor INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
	id_pro INT, 
	cor VARCHAR(20),
	
		FOREIGN KEY (id_pro)REFERENCES produto (id_pro)	 
);

CREATE TABLE tamanhos (
	id_tam INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
	id_pro INT, 
	tamanho VARCHAR(30),
	
		FOREIGN KEY (id_pro)REFERENCES produto (id_pro)	 
);

/*ANIMAL*/
CREATE table animal (
    id_ani INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nome_ani  VARCHAR(30),
    raca VARCHAR(50),
    porte VARCHAR(30),
    sexo VARCHAR(20),
    img_ani VARCHAR(100), 
	status VARCHAR(15),
	modalidade VARCHAR(20)

);

CREATE TABLE imgani (
	id_imgani INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
	id_ani INT,
	img VARCHAR(100),
		
		FOREIGN KEY (id_ani)REFERENCES animal (id_ani)	
);


/*FUNÇÕES*/
/*adoção*/
CREATE TABLE adocao(
    id_ado INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    id_user INT,
	 id_ani INT, 
    data_entre DATE,
    horario TIME,
	 status_ani VARCHAR(15),

      FOREIGN KEY (id_user)REFERENCES user (id_user),
		FOREIGN KEY (id_ani)REFERENCES animal (id_ani)	


);

/*lar voluntário*/
CREATE TABLE voluntario(
    id_vol INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    id_user INT,
	 id_ani INT,
    data_entre DATE,
    horario TIME,
	 status_ani VARCHAR(15),

      FOREIGN KEY (id_user)REFERENCES user (id_user),
		FOREIGN KEY (id_ani)REFERENCES animal (id_ani)	

);



/*petshop*/
CREATE TABLE carrinho (
	id_car INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
	id_user INT, 
	id_pro INT,
	cor VARCHAR(20),
	tamanho VARCHAR(30), 
	qtd INT,
	valor DECIMAL(10,2),
	
		FOREIGN KEY (id_pro)REFERENCES produto (id_pro),
		FOREIGN KEY (id_user)REFERENCES user (id_user)
	
);

CREATE TABLE pedido (
	id_ped INT PRIMARY KEY NOT NULL Auto_increment,
	id_user INT, 
	id_pro INT,
	numero INT,
	cor VARCHAR(20),
	tamanho VARCHAR(30), 
	qtd INT,
	valor DECIMAL(10,2),
 
		FOREIGN KEY (id_pro)REFERENCES produto (id_pro),
		FOREIGN KEY (id_user)REFERENCES user (id_user)
	
);

CREATE TABLE armazena (
	id_arm INT PRIMARY KEY NOT NULL Auto_increment,
	id_user INT, 
	id_pro INT,
	numero INT,
	cor VARCHAR(20),
	tamanho VARCHAR(30), 
	qtd INT,
	valor DECIMAL(10,2),
	data date, 
	
		FOREIGN KEY (id_pro)REFERENCES produto (id_pro),
		FOREIGN KEY (id_user)REFERENCES user (id_user)
	
);






