create table Funcionario
(
	id_Funcionario int auto_increment not null primary key,
    status_Funcionario varchar(20) not null,
    data_Funcionario timestamp not null,
        
	nome_Funcionario varchar(30) not null,
    id_Departamento_Funcionario int not null,
	cpf_Funcionario varchar(15) not null,
    
	cep_Funcionario varchar(9) not null,
    logradouro_Funcionario varchar(50) not null,
    numero_Funcionario varchar(10) not null,
    complemento_Funcionario varchar(50) null,
    bairro_Funcionario varchar(50) not null,
    cidade_Funcionario varchar(50) not null,
    uf_Funcionario varchar(50) not null,
    
	email_Funcionario varchar(30) not null unique,
    celular_Funcionario varchar(15) not null,
    telefone_Funcionario varchar(15) null,
    
	login_Funcionario varchar(15) not null unique,
    senha_Funcionario varchar(15) not null,
    confirmarSenha_Funcionario varchar(15) not null
)