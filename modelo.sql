create schema udo;
use udo;

create table usuarios(
    id int auto_increment comment 'identificador de usuario',
    username varchar(16) not null comment 'nombre de usuario',
    password varchar(200) not null comment 'contraseña',
    nombre varchar(50) not null comment 'nombre de pila',
    apellidos varchar(50) not null comment 'apellidos paterno y materno',
    email varchar(200) not null default 'sin@correo.com' comment 'correo electronico',
    primary key (id),
    unique idu_username (username)
) engine=MyISAM;

insert into usuarios(username, password, nombre, apellidos, email)
values ('agustin', '202cb962ac59075b964b07152d234b70', 'AGUSTÍN', 'OLAYA MARTÍNEZ', '1330238@udo.mx');