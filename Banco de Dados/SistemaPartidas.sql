create database db_jogos;
use db_jogos;

create table jogador(
   id int auto_increment not null,
   nome varchar(254),
   rating int,
   data_nascimento date,
   cidade varchar(100),
   primary key(id)
);

create table partida(
   id int auto_increment not null,
   data_partida date,
   id_jogador1 int,
   id_jogador2 int,
   resultado int,
   primary key(id),
   foreign key(id_jogador1) references jogador(id),
   foreign key(id_jogador2) references jogador(id)
);
