create database hotel;

-- Criação da tabela "funcionario"
CREATE TABLE funcionario (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome_completo VARCHAR(205),
    login VARCHAR(205),
    senha VARCHAR(205)
);

-- Criação da tabela "cliente"
CREATE TABLE cliente (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(205),
    cidade VARCHAR(205),
    telefone VARCHAR(205),
    email VARCHAR(205)
);

-- Criação da tabela "quarto"
CREATE TABLE quarto (
    numero INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(205),
    preco DECIMAL(10, 2),
    FOREIGN KEY (descricao_tp_quarto) REFERENCES tipo_quarto(id)
);

-- Criação da tabela "tipo_quarto"
CREATE TABLE tipo_quarto (
    id INT AUTO_INCREMENT PRIMARY KEY,
    descricao VARCHAR(205),
    codigo VARCHAR(205)
);

-- Criação da tabela "reserva"
CREATE TABLE reserva (
    id INT AUTO_INCREMENT PRIMARY KEY,
    tipo_quarto INT,
    nome_cliente INT,
    preco_quarto DECIMAL(10, 2),
    data_entrada DATE,
    data_saida DATE,
    forma_pagamento VARCHAR(205),
    FOREIGN KEY (tipo_quarto) REFERENCES tipo_quarto(id),
    FOREIGN KEY (nome_cliente) REFERENCES cliente(id),
    FOREIGN KEY (preco_quarto) REFERENCES quarto(id)
);
