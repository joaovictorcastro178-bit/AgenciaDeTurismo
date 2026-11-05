
create database AGENCIATURISMO;
use AgenciaTurismo;
 
 
CREATE TABLE viagem (
idViagem INT AUTO_INCREMENT PRIMARY KEY,
nome VARCHAR(150) NOT NULL,
email VARCHAR(150) NOT NULL,
destino VARCHAR(150) NOT NULL,
dataIda DATE NOT NULL,
dataVolta DATE NOT NULL,
acompanhantes INT
);

CREATE TABLE usuarios(
	idUsuario INT AUTO_INCREMENT PRIMARY KEY,
	nome VARCHAR(150) NOT NULL,
	email VARCHAR(150) NOT NULL,
    senha_hash VARCHAR(150) NOT NULL,
    criado_em timestamp default current_timestamp
);

