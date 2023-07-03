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
    bairro VARCHAR(20),
    rua VARCHAR(30),
    numero VARCHAR(10)
);



/*PRODUTO*/
CREATE TABLE categoria (
	id_cat INT  PRIMARY KEY NOT NULL AUTO_INCREMENT,
	nome VARCHAR(50)
);

CREATE TABLE produto(
    id_pro INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    id_cat INT, 
    nome VARCHAR(50),
    preco DECIMAL(10,2),
    qtd int,
    tamanho DECIMAL(10,2),
    cor VARCHAR(20),
    modelo VARCHAR(30)
    capacidade DECIMAL(10,2),
    	 
    	FOREIGN KEY (id_desc)REFERENCES descricao (id_desc),
		FOREIGN KEY (id_cat)REFERENCES categoria (id_cat)  	 
);

CREATE TABLE imgpro (
	id_imgpro INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    id_pro INT,
	img VARCHAR(100),
	
	FOREIGN KEY (id_pro)REFERENCES produto (id_pro)
);


/*ANIMAL*/
CREATE table animal (
    id_ani INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nome  VARCHAR(30),
    raça VARCHAR(50),
    porte VARCHAR(30),
    sexo VARCHAR(20)
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
    hora TIME,
    data_entr DATE, /*data da entrevista*/

        FOREIGN KEY (id_user)REFERENCES user (id_user)

);

CREATE TABLE descricao_ado (
	id_descad INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
	texto VARCHAR(2000)
);


/*lar voluntário*/
CREATE TABLE voluntario(
    id_vol INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    id_user INT,
    hora TIME,
    data_entr DATE, /*data da entrevista*/

        FOREIGN KEY (id_user)REFERENCES user (id_user)

);

CREATE TABLE descricao_vol (
	id_descvol INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
	texto VARCHAR(2000)
);

