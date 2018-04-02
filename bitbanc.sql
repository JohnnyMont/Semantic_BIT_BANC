CREATE SCHEMA bitBanc;
use bitBanc;
CREATE TABLE usuarios(
	id_usuario INT(4) PRIMARY KEY AUTO_INCREMENT,
	nomeCompleto VARCHAR(50) NOT NULL,
	email VARCHAR(50) NOT NULL,
	CPF VARCHAR(14) NOT NULL,
	dataNasc DATE NOT NULL
);
CREATE TABLE membros(
	id_membro INT(4) PRIMARY KEY AUTO_INCREMENT,
	nomeCompleto VARCHAR(50) NOT NULL,
	email VARCHAR(50) NOT NULL,
	CPF VARCHAR(14) NOT NULL,
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
	limite_credito VARCHAR(255) NOT NULL
);
CREATE TABLE dadosBancarios(
	id_contaBancaria INT(5) PRIMARY KEY AUTO_INCREMENT,
	num_contaBancaria VARCHAR(50) NOT NULL,
	tipo_contaBancaria VARCHAR(20) NOT NULL,
	saldo_atual VARCHAR(255) NOT NULL
);
CREATE TABLE contas(
	id_conta INT(5) PRIMARY KEY AUTO_INCREMENT,
	descricao VARCHAR(50) NOT NULL,
	data_compra DATE NOT NULL,
	data_venc DATE NOT NULL,
	valor VARCHAR(255) NOT NULL
);
CREATE TABLE saldo_Banco(
	id_saldo_banco INT(5) PRIMARY KEY AUTO_INCREMENT,
	id_usuario INT(5),
	id_contaBancaria INT(5),
	saldo VARCHAR(255) NOT NULL,
	data DATE NOT NULL,
	FOREIGN KEY(id_usuario) REFERENCES usuarios(id_usuario),
	FOREIGN KEY(id_contaBancaria) REFERENCES dadosBancarios(id_contaBancaria)
);
CREATE TABLE saldo_Cartao(
	id_saldo_cartao INT(5) PRIMARY KEY AUTO_INCREMENT,
	id_usuario INT(5),
	id_cartao INT(5),
	saldo VARCHAR(255) NOT NULL,
	data DATE NOT NULL,
	FOREIGN KEY(id_usuario) REFERENCES usuarios(id_usuario),
	FOREIGN KEY(id_cartao) REFERENCES cartaoCredito(id_cartao)
);
