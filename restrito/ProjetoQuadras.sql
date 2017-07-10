# DROP TABLE AtivOferecida;
# DROP TABLE Reserva;
# DROP TABLE Quadra;
# DROP TABLE Administrador;
# DROP TABLE Aluno;
# DROP TABLE Docente;
# DROP TABLE OrgAcademica;

CREATE TABLE OrgAcademica(
	id_usuario int(5) NOT NULL auto_increment,
	nomeCompleto varchar(100) NOT NULL default '',
	CNPJ varchar(14) NOT NULL,
	senha varchar(50) NOT NULL default '',
	email varchar(100) NOT NULL default '',
	data_cadastro datetime NOT NULL default '1000-01-01 00:00:00',
	data_ultimo_login datetime NOT NULL default '1000-01-01 00:00:00',
	nivel_usuario enum('0','1','2','3') NOT NULL default '2',
	ativado enum('0','1') NOT NULL default '0',

	PRIMARY KEY (id_usuario)

) ENGINE = MYISAM CHARACTER SET utf8 COLLATE utf8_general_ci;


CREATE TABLE Docente(
	id_usuario int(5) NOT NULL auto_increment,
	nomeCompleto varchar(100) NOT NULL default '',
	siape int(14) NOT NULL,
	senha varchar(50) NOT NULL default '',
	departamento varchar(40) NOT NULL default '',
	email varchar(100) NOT NULL default '',
	data_cadastro datetime NOT NULL default '1000-01-01 00:00:00',
	data_ultimo_login datetime NOT NULL default '1000-01-01 00:00:00',
	nivel_usuario enum('0','1','2','3') NOT NULL default '1',
	ativado enum('0','1') NOT NULL default '0',

	PRIMARY KEY (id_usuario)
	
) ENGINE = MYISAM CHARACTER SET utf8 COLLATE utf8_general_ci;


CREATE TABLE Aluno(
	id_usuario int(5) NOT NULL auto_increment,
	nomeCompleto varchar(100) NOT NULL default '',
	RA int(6) NOT NULL,
	senha varchar(50) NOT NULL default '',
	curso varchar(40) NOT NULL default '',
	email varchar(100) NOT NULL default '',
	data_cadastro datetime NOT NULL default '1000-01-01 00:00:00',
	data_ultimo_login datetime NOT NULL default '1000-01-01 00:00:00',
	nivel_usuario enum('0','1','2','3') NOT NULL default '0',
	ativado enum('0','1') NOT NULL default '0',

	PRIMARY KEY (id_usuario)
	
) ENGINE = MYISAM CHARACTER SET utf8 COLLATE utf8_general_ci;


CREATE TABLE Administrador(
	id_usuario int(5) NOT NULL auto_increment,
	nomeCompleto varchar(100) NOT NULL default '',
	login varchar(14) NOT NULL,
	senha varchar(50) NOT NULL default '',
	email varchar(100) NOT NULL default '',
	data_cadastro datetime NOT NULL default '1000-01-01 00:00:00',
	data_ultimo_login datetime NOT NULL default '1000-01-01 00:00:00',
	nivel_usuario enum('0','1','2','3') NOT NULL default '3',
	ativado enum('0','1') NOT NULL default '0',

	PRIMARY KEY (id_usuario)
	
) ENGINE = MYISAM CHARACTER SET utf8 COLLATE utf8_general_ci;


CREATE TABLE Quadra(
	nroQuadra int(3) NOT NULL auto_increment,
	descricao varchar(300) NOT NULL default '',
	data_cadastro datetime NOT NULL default '1000-01-01 00:00:00',
	reservada boolean NOT NULL default '0',

	PRIMARY KEY (nroQuadra)

) ENGINE = MYISAM CHARACTER SET utf8 COLLATE utf8_general_ci;


CREATE TABLE Reserva(
	id_reserva int(3) NOT NULL auto_increment,
	data_reserva date NOT NULL default '1000-01-01',
	hora_inicio date NOT NULL default '00:00:00',
	hora_fim date NOT NULL default '00:00:00',
	ativ_praticada varchar(15) NOT NULL default '',

	nroQuadra int(3) NOT NULL,
	login varchar(14) NOT NULL,
	RA int(6) NOT NULL,
	siape int(14) NOT NULL,
	CNPJ varchar(14) NOT NULL,

	FOREIGN KEY (nroQuadra) REFERENCES Quadra(nroQuadra),
	FOREIGN KEY (login) REFERENCES Administrador(login),
	FOREIGN KEY (RA) REFERENCES Aluno(RA),
	FOREIGN KEY (siape) REFERENCES Docente(siape),
	FOREIGN KEY (CNPJ) REFERENCES OrgAcademica(CNPJ),
	PRIMARY KEY (id_reserva, nroQuadra, login, RA, siape, CNPJ)

) ENGINE = MYISAM CHARACTER SET utf8 COLLATE utf8_general_ci;


CREATE TABLE AtivOferecida(
	id_atividade int(3) NOT NULL auto_increment,
	nroQuadra int(3) NOT NULL,
	nome varchar(15) NOT NULL default '',
	data_cadastro datetime NOT NULL default '1000-01-01 00:00:00',

	FOREIGN KEY (nroQuadra) REFERENCES Quadra(nroQuadra),
	PRIMARY KEY (id_atividade, nroQuadra)

) ENGINE = MYISAM CHARACTER SET utf8 COLLATE utf8_general_ci;