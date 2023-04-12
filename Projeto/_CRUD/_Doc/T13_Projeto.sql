create database T13_Projeto;
use T13_Projeto
create table Parceiro
(
	id_Parceiro int auto_increment not null primary key,
    status_Parceiro varchar(20) not null,
    data_Parceiro timestamp not null,
    nome_Parceiro varchar(30) not null,
    cnpj_Parceiro varchar(15) not null,
    ramo_Parceiro varchar(20) not null,
    email_Parceiro varchar(30) not null,
    telefone1_Parceiro varchar(15) not null,
    telefone2_Parceiro varchar(15) not null,
    login_Parceiro varchar(15) not null unique,
    senha_Parceiro varchar(15) not null,
    confirmarSenha_Parceiro varchar(15) not null,
    logradouro_Parceiro varchar(50) not null,
    numero_Parceiro varchar(10) not null,
    complemento_Parceiro varchar(50) null,
    bairro_Parceiro varchar(50) not null,
    cidade_Parceiro varchar(50) not null,
    uf_Parceiro varchar(50) not null,
    cep_Parceiro varchar(9) not null,
    obs_Usuario varchar(255) null
)
