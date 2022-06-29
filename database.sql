create database motorline;

use motorline;

create table users(
    nome char(255) not null,
    cognome char(255) not null,
    username char(255) primary key,
    email char(255) not null,
    password char(255) not null,
    updated_at char(255),
    created_at char(255)
    ) Engine='InnoDB';

create table posts (
    autore varchar(255) ,
    titolo varchar(255) primary key,
    contenuto varchar(255) not null,
    url_img varchar(255) not null,
    url_link varchar(255) not null,
    updated_at char(255),
    created_at char(255)
    ) Engine='InnoDB';

create table favorites(
    user_username varchar(255),
    titolo varchar(255), 
    updated_at char(255),
    created_at char(255),
    index usernamex(user_username),
    index titolox(titolo),
    foreign key(user_username) references users(username) on update cascade,
    foreign key(titolo) references posts(titolo) on update cascade, 
    primary key(user_username,titolo)
    ) engine='Innodb';

    