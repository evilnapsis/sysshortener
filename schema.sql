
create database sysshortener;
use sysshortener;



create table kind(
	id int not null auto_increment primary key,
	name varchar(50) not null
);

insert into kind (name) value ("Administrador");
insert into kind (name) value ("Usuario");


create table user(
	id int not null auto_increment primary key,
	bio text,
	image varchar(255),
	name varchar(50) not null,
	lastname varchar(50) not null,
	username varchar(50),
	email varchar(255) not null,
	password varchar(60) not null,
	phone varchar(255),
	address varchar(255),
	code varchar(20),
	status boolean not null default 1,
	kind boolean not null default 0,
	created_at datetime not null
);

insert into user(email,password,status,kind,created_at) value ("admin","90b9aa7e25f80cf4f64e990b78a9fc5ebd6cecad",1,1,NOW());

create table item(
	id int not null auto_increment primary key,
	name text,
	url varchar(255),
	code varchar(255) not null,
	user_id int not null,
	created_at datetime not null,
	foreign key (user_id) references user(id)
);

create table visit(
	id int not null auto_increment primary key,
	item_id int not null,
	created_at datetime not null,
	foreign key (item_id) references item(id)
);

/*
configuration kind
1.- Boolean
2.- Text
3.- Number
*/
create table configuration(
	id int not null auto_increment primary key,
	short varchar(255) not null unique,
	name varchar(255) not null unique,
	kind int ,
	val varchar(255) not null
);
insert into configuration(short,name,kind,val) value("title","Titulo del Sistema",2,"SysShortener");
insert into configuration(short,name,kind,val) value("base_url","URL Base",2,"http://localhost/sysshortener/");
