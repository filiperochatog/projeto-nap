create database login;

use login;

create table usuarios(
id_usuario int auto_increment primary key,
nome varchar(30),
telefone varchar(30),
email varchar(40),
senha varchar(32)

);
