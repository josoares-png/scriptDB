create database dbLoja;
use dbLoja;

create table tbUsuarios(
codUsu int not null auto_increment,
nome varchar(50) not null,
senha varchar(12) not null,
primary key(codUsu));

desc tbUsuarios;

show tables;

insert into tbUsuarios(nome,senha)values('etecia' , 'etecia');

select * from tbUsuarios;