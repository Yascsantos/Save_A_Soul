DROP DATABASE if EXISTS save; 

CREATE DATABASE save;
USE save;

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

CREATE TABLE categoria (
	id_cat INT  PRIMARY KEY NOT NULL AUTO_INCREMENT,
	nome VARCHAR(50)
);

CREATE TABLE descricao (
	id_desc INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
	texto VARCHAR(2000)
);
CREATE TABLE produto(
    id_pro INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    tipo VARCHAR(50),
    preco DECIMAL(10,2),
    id_cat INT, 
    id_desc INT, 
    	 
    	FOREIGN KEY (id_desc)REFERENCES descricao (id_desc),
		FOREIGN KEY (id_cat)REFERENCES categoria (id_cat)  	 
);

CREATE TABLE imgpro (
	id_imgpro INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
	img VARCHAR(100),
	id_pro INT,
	
	FOREIGN KEY (id_pro)REFERENCES produto (id_pro)
);

CREATE table animal (
    id_ani INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nome  VARCHAR(30),
    historia VARCHAR(1000)
);

CREATE TABLE imgani (
	id_imgani INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
	img VARCHAR(100),
	id_ani INT,
	
	FOREIGN KEY (id_ani)REFERENCES animal (id_ani)
);


CREATE TABLE adocao(
    id_ado INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    id_user INT,
    hora TIME,
    data_ent DATE, /*data da entrevista*/

        FOREIGN KEY (id_user)REFERENCES user (id_user)

);

