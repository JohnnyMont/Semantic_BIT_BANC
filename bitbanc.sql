CREATE SCHEMA bitBanc;
use bitBanc;
CREATE TABLE usuarios(
	id_user INT(4) PRIMARY KEY AUTO_INCREMENT,
	nomeCompleto VARCHAR(50) NOT NULL,
	email VARCHAR(50) NOT NULL,
	CPF INT(11) NOT NULL,
	dataNasc DATE NOT NULL
);
CREATE TABLE membros(
	id_membro INT(4) PRIMARY KEY AUTO_INCREMENT,
	nomeCompleto VARCHAR(50) NOT NULL,
	email VARCHAR(50) NOT NULL,
	CPF INT(11) NOT NULL,
	dataNasc DATE NOT NULL,
	id_usuario INT(4),
	FOREIGN KEY(id_usuario) REFERENCES usuarios(id_user)
);
CREATE TABLE senhas(
	id_senha INT(4) PRIMARY KEY AUTO_INCREMENT,
	login INT(4),
	senha VARCHAR(50) NOT NULL,
	FOREIGN KEY(login) REFERENCES usuarios(id_user)
);
CREATE TABLE cartaoCredito(
	id_cartao INT(5) PRIMARY KEY AUTO_INCREMENT,
	bandeira VARCHAR(50) NOT NULL,
	num_cartao INT(16) UNIQUE NOT NULL,
	vencimento DATE NOT NULL,
	limite_credito DECIMAL(10,2) NOT NULL
);
CREATE TABLE dadosBancarios(
	id_contaBancaria INT(5) PRIMARY KEY AUTO_INCREMENT,
	num_contaBancaria INT(10) NOT NULL,
	tipo_contaBancaria VARCHAR(20) NOT NULL,
	saldo DECIMAL(10,2) NOT NULL
);
CREATE TABLE gastos(
	id_gasto INT(5) PRIMARY KEY AUTO_INCREMENT,
	descricao VARCHAR(50) NOT NULL,
	valor DECIMAL(10,2) NOT NULL,
	data DATE NOT NULL
);
CREATE TABLE contas(
	id_conta INT(5) PRIMARY KEY AUTO_INCREMENT,
	descricao VARCHAR(50) NOT NULL,
	data_compra DATE NOT NULL,
	data_venc DATE NOT NULL,
	valor DECIMAL(10,2) NOT NULL
);