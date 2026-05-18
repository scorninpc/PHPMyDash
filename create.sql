-- funcionalidades
CREATE TABLE funcionalidades (
	idfuncionalidade integer not null primary key AUTOINCREMENT, 
	nome varchar(250),
	controlador varchar(250),
	icone varchar(50),
	hide boolean not null default false
);

INSERT INTO funcionalidades (nome, controlador) VALUES ('Usuarios', 'usuarios', 'fa-solid fa-user-group');
INSERT INTO funcionalidades (nome, controlador) VALUES ('Funcionalidades', 'funcionalidades', 'fa-solid fa-gears');

-- usuarios
CREATE TABLE usuarios (
	idusuario integer not null primary key AUTOINCREMENT, 
	nome varchar(100),
	email varchar(250), 
	password varchar(250)
);

INSERT INTO usuarios (email, password) VALUES ('Admin', 'test@localhost', '$2a$07$ZHyBfzO7xkSfuU5D3EIHGOmdI6DX2rSLu/.TPWCdAzu5Xugaqhby.'); -- senha 123mudar

-- receitas
create table receitas_categorias (
	idreceita_categoria integer not null primary key AUTOINCREMENT,
	titulo varchar(255)
);
create table receitas (
	idreceita integer not null primary key AUTOINCREMENT,
	idreceita_categoria integer null references receitas_categorias(idreceita_categoria),
	titulo varchar(255),
	conteudo TEXT,
	data_cadastro date
);
create table receitas_ingredientes (
	idreceita_ingredientes integer not null primary key AUTOINCREMENT,
	idreceita integer not null references receitas(idreceita),
	ingrediente varchar(255),
	quantidade decimal(10,2),
	unidade varchar(10)
);