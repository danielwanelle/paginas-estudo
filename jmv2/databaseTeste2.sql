create database contatos;

use contatos;

create table propriedades(
	idContato int not null auto_increment,
    nome varchar(60),
    endereco varchar(254),
    telefone varchar(15),
    email varchar(60),
    primary key (idContato)
);

insert into propriedades (nome, endereco, telefone, email) values ('Joao', 'Teste1', '123', '123');
insert into propriedades (nome, endereco, telefone, email) values ('Maria', 'Teste2', '123', '123');
insert into propriedades (nome, endereco, telefone, email) values ('Luis', 'Teste3', '123', '123');
insert into propriedades (nome, endereco, telefone, email) values ('Carlos', 'Teste4', '123', '123');