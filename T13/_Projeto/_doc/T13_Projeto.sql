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
    obs_Parceiro varchar(255) null
)
drop table Parceiro;
select * from parceiro;
insert into Parceiro
(status_Parceiro,
nome_Parceiro,
cnpj_Parceiro,
ramo_Parceiro,
email_Parceiro,
telefone1_Parceiro,
telefone2_Parceiro,
login_Parceiro,
senha_Parceiro,
confirmarSenha_Parceiro,
logradouro_Parceiro,
numero_Parceiro,
complemento_Parceiro,
bairro_Parceiro,
cidade_Parceiro,
uf_Parceiro,
cep_Parceiro,
obs_Parceiro)
values
('ativo',
'nome',
'121231651',
'ramo',
'adm@gmail.com',
'1122334455',
'11223344551',
'adm',
'123',
'123',
'logradouro',
'123234',
'complemento',
'bairro',
'cidade',
'SP',
'cep',
'obs')

