create database teste1;

use teste1;

create table cliente(
	idCliente int not null auto_increment,
    nome varchar(60),
    cpf varchar(15),
    rg varchar(15),
    dataNasc varchar(10),
    tel1 varchar(15),
    tel2 varchar(15),
    email varchar(60),
    primary key (idCliente)
);

create table usuario(
	idUsuario int not null auto_increment,
    usuario varchar(60),
    senha varchar(60),
    perfil varchar(60),
    primary key (idUsuario)
);

insert into usuario(usuario, senha, perfil) values('Teste', 'Teste', 'Super Admin');

