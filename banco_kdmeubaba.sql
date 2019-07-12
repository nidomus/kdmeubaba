create database banco_usuario;

use banco_usuario;

create table usuario(
id int(2) primary key auto_increment,
nome varchar(255),
email varchar(255) unique,
senha varchar(255),
nivel int(1)
);


insert into usuario (nome,email,senha,nivel) values
("Wagner","usr1@email","1234","1"),
("Paulo","usr2@email","1232","2");
