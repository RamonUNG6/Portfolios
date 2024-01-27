create database dbautoescola;
use dbautoescola;
create table tbaluno(
cod int primary key auto_increment,
nome varchar(50),
datanasc date,
rg varchar(9),
cpf varchar(11),
tel varchar(14),
email varchar(50),
cep varchar(8),
estado varchar(2),
`end` varchar(50),
cidade varchar(50),
pratica int,
simulador int,
ead varchar (3) default 'Não',
presencial varchar (3) default 'Não',
total int,
hab_a varchar(3) not null default 'Não',
hab_b varchar(3) not null default 'Não',
hab_c varchar(3) not null default 'Não',
hab_d varchar(3) not null default 'Não',
hab_e varchar(3) not null default 'Não'
);
select * from tbaluno