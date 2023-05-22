create database T13_Projeto;
use T13_Projeto;
select * from Parceiro;
drop table Parceiro;

select * from Plano;
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
    logradouro_Parceiro varchar(50) not null,
    numero_Parceiro varchar(10) not null,
    complemento_Parceiro varchar(50) null,
    bairro_Parceiro varchar(50) not null,
    cidade_Parceiro varchar(50) not null,
    uf_Parceiro varchar(50) not null,
    cep_Parceiro varchar(9) not null,
    obs_Parceiro varchar(255) null,
    foto_Parceiro blob null
);
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
'txt@gmail.com',
'1122334455',
'11223344551',
'txt',
'aaa',
'logradouro',
'123234',
'complemento',
'bairro',
'cidade',
'SP',
'123456789',
'obs');

drop table ParceiroServicos;
create table ParceiroServicos
(
	id_ParceiroServicos int auto_increment not null primary key,
    data_ParceiroServicos timestamp not null,
    nome_ParceiroServicos varchar(30) not null,
    id_PCategoria_ParceiroServicos int not null,
    status_ParceiroServicos varchar(20) not null,
    descricao_ParceiroServicos varchar(255) not null
);
ALTER TABLE ParceiroServicos ADD CONSTRAINT id_PCategoria_ParceiroServicos FOREIGN KEY(id_PCategoria_ParceiroServicos) REFERENCES PCategoria (id_PCategoria);
drop table PCategoria;
select * from ParceiroServicos;
describe ParceiroServicos;
create table PCategoria
(
	id_PCategoria int auto_increment not null primary key,
    data_PCategoria timestamp not null,
    nome_PCategoria varchar(30) not null,
    status_PCategoria varchar(20) not null
);
select * from PCategoria;
insert into PCategoria
(
nome_PCategoria,
status_PCategoria)
values
('bugdoido',
'ativo'
);
drop table Parceiro;
select * from Parceiro;

create table ClienteFaleConosco
(
id_FaleConosco	int	not null auto_increment	 primary key	,
id_Cliente_FaleConosco int not null,
dataCadastro_FaleConosco	timestamp	not null,
assunto_FaleConosco	varchar(30)	not null,
email_FaleConosco	varchar(50)	not null,
texto_FaleConosco	varchar(20)	not null,
anexo_FaleConosco	blob null,
CONSTRAINT id_Cliente_FaleConosco FOREIGN KEY(id_Cliente_FaleConosco) REFERENCES Cliente (id_Cliente)
);		
create table ParceiroFaleConosco
(
id_FaleConosco	int	not null auto_increment	 primary key	,
id_Parceiro_FaleConosco int not null,
dataCadastro_FaleConosco	timestamp	not null,
assunto_FaleConosco	varchar(30)	not null,
email_FaleConosco	varchar(50)	not null,
texto_FaleConosco	varchar(20)	not null,
anexo_FaleConosco	blob null,
CONSTRAINT id_Parceiro_FaleConosco FOREIGN KEY(id_Parceiro_FaleConosco) REFERENCES Parceiro (id_Parceiro)
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

drop table Cliente;
select* from Cliente;
Create table Cliente
(
id_Cliente	int	not null	auto_increment primary key	,
data_Cliente	timestamp	not null	,
status_Cliente	varchar(15)	not null		,
nome_Cliente	varchar(50)	not null		,
cpf_Cliente	varchar(11)	not null		,
login_Cliente	varchar(30)	not null	unique	,
senha_Cliente	varchar(20)	not null		,
cep_Cliente	char(9)	not null		,
logradouro_Cliente	varchar(100)	not null		,
numero_Cliente	int	not null		,
bairro_Cliente	varchar(20)	not null		,
cidade_Cliente	varchar(20)	not null		,
uf_Cliente	char(20)	not null		,
complemento_Cliente	varchar(50)	null		,
telefone1_Cliente	varchar(14)	not null		,
telefone2_Cliente	varchar(14)	null		,
email_Cliente	varchar(50)	not null		,
obs_Cliente	varchar(255)	null		
);

/*banco de dados abaixo gerecimento da empresa*/
				/*	N E X T E C H */
create table Departamento
(
	id_Departamento int auto_increment not null primary key,
    data_Departamento timestamp not null,
    nome_Departamento varchar(30) not null,
    status_Departamento varchar(20) not null,
    descricao_Departamento varchar(255) not null
);
drop table Funcionario;
select * from Departamento;
ALTER TABLE Funcionario ADD CONSTRAINT id_Departamento_Funcionario FOREIGN KEY(id_Departamento_Funcionario) REFERENCES Departamento (id_Departamento);                
create table Funcionario
(
	id_Funcionario int auto_increment not null primary key,
    status_Funcionario varchar(20) not null,
    data_Funcionario timestamp not null,      
	nome_Funcionario varchar(30) not null,
	cpf_Funcionario varchar(15) not null,
	cep_Funcionario varchar(9) not null,
    logradouro_Funcionario varchar(50) not null,
    numero_Funcionario varchar(10) not null,
    complemento_Funcionario varchar(50) null,
    bairro_Funcionario varchar(50) not null,
    cidade_Funcionario varchar(50) not null,
    uf_Funcionario varchar(50) not null,   
	email_Funcionario varchar(30) not null unique,
    telefone1_Funcionario varchar(15) not null,
    telefone2_Funcionario varchar(15) null,
    id_Departamento_Funcionario int not null, /*15*/
	login_Funcionario varchar(15) not null unique,
    senha_Funcionario varchar(15) not null,
    confirmarSenha_Funcionario varchar(15) not null
);
insert into Funcionario
(id_Funcionario,status_Funcionario,data_Funcionario,nome_Funcionario,cpf_Funcionario,cep_Funcionario,logradouro_Funcionario,numero_Funcionario,complemento_Funcionario,bairro_Funcionario,cidade_Funcionario,uf_Funcionario,email_Funcionario,telefone1_Funcionario,telefone2_Funcionario,id_Departamento_Funcionario,login_Funcionario,senha_Funcionario,confirmarSenha_Funcionario)
values
('1','ativo','03/05/2023','Felipe','156165116651','07196261','rua sei la','55','apto50','vila galvão','guarulhos','SP','cornoempresa@gmail.com','1185151162','1185151161','1','adm','123','123');
select * from Funcionario;