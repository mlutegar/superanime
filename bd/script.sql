create database if not exists superanime;
use superanime;

create or replace table manga(
    id int primary key auto_increment,
    titulo varchar(250) not null unique,
    anime varchar(250) not null,
    volume int not null,
    autor varchar(250) not null default "none",
    editora varchar(250) not null default "none",
    sumario varchar(250) not null, 
    capa longtext not null default "text",
    conteudo text not null,
    created_at TIMESTAMP not null default CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1; 

create or replace table login(
    id int primary key auto_increment,
    email varchar(250) not null unique,
    senha varchar(255) not null,
    created_at TIMESTAMP not null default CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

insert into login(email,senha) values('superanime@manga.com', md5('hunterxhunter123.!'));