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

-- financeiro
CREATE TABLE contas_financeiras (
	idconta_financeira INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
	identificador VARCHAR(150),
	agencia VARCHAR(50),
	conta VARCHAR(50),
	tipo VARCHAR(50)
);

INSERT INTO contas_financeiras (idconta_financeira, identificador, agencia, conta, tipo) VALUES (1, 'Itaú', '0244', '22457-2', 'Conta Corrente');
INSERT INTO contas_financeiras (idconta_financeira, identificador, agencia, conta, tipo) VALUES (2, 'NuBank - Bruno', '0001', '4107405-9', 'Conta Corrente');
INSERT INTO contas_financeiras (idconta_financeira, identificador, agencia, conta, tipo) VALUES (3, 'Mercado Bitcoin', '', '', 'Investimento');
INSERT INTO contas_financeiras (idconta_financeira, identificador, agencia, conta, tipo) VALUES (4, 'NuBank - Natália', '0001', '', 'Conta Corrente');
INSERT INTO contas_financeiras (idconta_financeira, identificador, agencia, conta, tipo) VALUES (5, 'Caixa Economica', '', '', 'Conta Corrente');

CREATE TABLE naturezas_financeiras (
	idnatureza_financeira INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
	descricao VARCHAR(500)
);

INSERT INTO naturezas_financeiras (idnatureza_financeira, descricao) VALUES ('1', 'Padaria');
INSERT INTO naturezas_financeiras (idnatureza_financeira, descricao) VALUES ('2', 'Farmácia');
INSERT INTO naturezas_financeiras (idnatureza_financeira, descricao) VALUES ('3', 'Mercado');
INSERT INTO naturezas_financeiras (idnatureza_financeira, descricao) VALUES ('4', 'Ração');
INSERT INTO naturezas_financeiras (idnatureza_financeira, descricao) VALUES ('5', 'Lanchonete');
INSERT INTO naturezas_financeiras (idnatureza_financeira, descricao) VALUES ('6', 'Combustivel');
INSERT INTO naturezas_financeiras (idnatureza_financeira, descricao) VALUES ('7', 'Oficina');
INSERT INTO naturezas_financeiras (idnatureza_financeira, descricao) VALUES ('8', 'Presente');
INSERT INTO naturezas_financeiras (idnatureza_financeira, descricao) VALUES ('9', 'Escola');
INSERT INTO naturezas_financeiras (idnatureza_financeira, descricao) VALUES ('10', 'Salário');
INSERT INTO naturezas_financeiras (idnatureza_financeira, descricao) VALUES ('13', 'Manicure');
INSERT INTO naturezas_financeiras (idnatureza_financeira, descricao) VALUES ('14', 'Faxina');
INSERT INTO naturezas_financeiras (idnatureza_financeira, descricao) VALUES ('15', 'Internet');
INSERT INTO naturezas_financeiras (idnatureza_financeira, descricao) VALUES ('16', 'Saúde');
INSERT INTO naturezas_financeiras (idnatureza_financeira, descricao) VALUES ('17', 'Moradia');
INSERT INTO naturezas_financeiras (idnatureza_financeira, descricao) VALUES ('18', 'Cartão de Crédito');
INSERT INTO naturezas_financeiras (idnatureza_financeira, descricao) VALUES ('19', 'Financiamento Moto');
INSERT INTO naturezas_financeiras (idnatureza_financeira, descricao) VALUES ('20', 'Banco');
INSERT INTO naturezas_financeiras (idnatureza_financeira, descricao) VALUES ('21', 'Reembolso');
INSERT INTO naturezas_financeiras (idnatureza_financeira, descricao) VALUES ('22', 'Cabeleireiro');
INSERT INTO naturezas_financeiras (idnatureza_financeira, descricao) VALUES ('23', 'Jogos');
INSERT INTO naturezas_financeiras (idnatureza_financeira, descricao) VALUES ('24', 'Transferencia entre contas');
INSERT INTO naturezas_financeiras (idnatureza_financeira, descricao) VALUES ('25', 'Diversos');
INSERT INTO naturezas_financeiras (idnatureza_financeira, descricao) VALUES ('26', 'Energia');
INSERT INTO naturezas_financeiras (idnatureza_financeira, descricao) VALUES ('27', 'Clube');
INSERT INTO naturezas_financeiras (idnatureza_financeira, descricao) VALUES ('28', 'Vestuário');
INSERT INTO naturezas_financeiras (idnatureza_financeira, descricao) VALUES ('29', 'Financiamento Carro');
INSERT INTO naturezas_financeiras (idnatureza_financeira, descricao) VALUES ('30', 'Investimentos');
INSERT INTO naturezas_financeiras (idnatureza_financeira, descricao) VALUES ('31', 'Patrocinio');
INSERT INTO naturezas_financeiras (idnatureza_financeira, descricao) VALUES ('32', 'Doações');
INSERT INTO naturezas_financeiras (idnatureza_financeira, descricao) VALUES ('33', 'Carro');
INSERT INTO naturezas_financeiras (idnatureza_financeira, descricao) VALUES ('34', 'Reforma do Muro');
INSERT INTO naturezas_financeiras (idnatureza_financeira, descricao) VALUES ('35', 'Ajuste');
INSERT INTO naturezas_financeiras (idnatureza_financeira, descricao) VALUES ('36', 'Pintura da casa');
INSERT INTO naturezas_financeiras (idnatureza_financeira, descricao) VALUES ('37', 'Viagem Londrina');
INSERT INTO naturezas_financeiras (idnatureza_financeira, descricao) VALUES ('38', 'Telescopio');
INSERT INTO naturezas_financeiras (idnatureza_financeira, descricao) VALUES ('39', 'Cirurgia');
INSERT INTO naturezas_financeiras (idnatureza_financeira, descricao) VALUES ('40', 'Tratamento/Cirurgia Bruno');
INSERT INTO naturezas_financeiras (idnatureza_financeira, descricao) VALUES ('41', 'Loteria');
INSERT INTO naturezas_financeiras (idnatureza_financeira, descricao) VALUES ('42', 'Aquario');

CREATE TABLE movimentacoes_financeiras (
	idmovimentacao_financeira INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
	idconta_financeira INTEGER NOT NULL REFERENCES contas_financeiras (idconta_financeira),
	data_movimento DATETIME,
	efetivado BOOLEAN,
	valor DECIMAL(10,2),
	tipo VARCHAR(1), -- S saida (debito) / E entrada (credito)
	parceiro VARCHAR(500),
	idnatureza_financeira INTEGER NOT NULL REFERENCES naturezas_financeiras(idnatureza_financeira),
	descricao TEXT
);