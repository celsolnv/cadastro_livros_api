create database cadastroLivros;
use database cadastroLivros;

create table autores (
    id bigint PRIMARY KEY AUTO_INCREMENT,
    nome varchar(255),
    email varchar(255),
    senha varchar(255)
);