DROP DATABASE if EXISTS save; 

CREATE DATABASE save;
USE save;

CREATE table animais(
    id_animal INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nome  VARCHAR(30),
    /*idade DECIMAL(10,2),*/
    historia VARCHAR(1000)
);

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

CREATE TABLE produto(
    id_pro INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    img VARCHAR(100),
    preco DECIMAL(10,2),
    descricao VARCHAR(100)
);


/*
CREATE TABLE adotante(
    id_adotante INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    id_user INT,
    id_animal INT,
    data date,

        FOREIGN KEY (id_user)REFERENCES user (id_user),
        FOREIGN KEY (id_animal)REFERENCES animais (id_animal)

);
*/
