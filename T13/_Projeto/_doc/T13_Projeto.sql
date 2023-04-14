create database T13_Projeto;
use T13_Projeto;
create table Parceiro
(
	id_Parceiro int auto_increment not null primary key,
    status_Parceiro varchar(20) not null,
    data_Parceiro timestamp not null,
    nome_Parceiro varchar(30) not null,
    cnpj_Parceiro varchar(15) not null,
    ramo_Parceiro varchar(20) not null,
    email_Parceiro varchar(30) not null unique,
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
);
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
'obs');
create table FaleConosco
(
id_FaleConosco	int	not null auto_increment	 primary key	,
dataCadastro_FaleConosco	timestamp	not null,
assunto_FaleConosco	varchar(30)	not null,
email_FaleConosco	varchar(50)	not null,
texto_FaleConosco	varchar(20)	not null,
anexo_FaleConosco	blob null
);		
create table Planos
(
id_Planos	int	not null	auto_increment primary key	,
data_Planos	timestamp	not null 	,
nome_Planos	varchar(50)	not null	unique	,
tipo_Planos	varchar(50)	not null		,
preço_Planos	decimal(10,5)	not null 		,
beneficios_Planos	varchar(50)		not null		,
descricao_Planos	varchar(255)	null		,
dataDuracao_Planos	varchar(30)	not null		
);
Create table Usuario
(
id_Cliente	int	not null	auto_increment primary key	,
data_Cliente	timestamp	not null	,
status_Cliente	varchar(15)	not null		,
nome_Cliente	varchar(50)	not null		,
cpf_Cliente	varchar(11)	not null		,
login_Cliente	varchar(30)	not null	unique	,
senha_Cliente	varchar(20)	not null		,
confirmarSenha_Cliente varchar(20) not null,
cep_Cliente	char(9)	not null		,
logradouro_Cliente	varchar(100)	not null		,
numero_Cliente	int	not null		,
bairro_Cliente	varchar(20)	not null		,
cidade_Cliente	varchar(20)	not null		,
uf_Cliente	char(2)	not null		,
complemento_Cliente	varchar(50)	null		,
telefone1_Cliente	varchar(14)	not null		,
telefone2_Cliente	varchar(14)	null		,
email_Cliente	varchar(50)	not null		,
obs_Cliente	varchar(255)	null		
)



