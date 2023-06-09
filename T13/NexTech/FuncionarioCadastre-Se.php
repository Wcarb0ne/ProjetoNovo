<!DOCTYPE html>
<html lang="en">
<?php include_once('Conexao.php') ?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/System_images/logo Nextech.png">

    <!-- Bootstrap 3.3.2 -->

    <link rel="stylesheet" href="./assets/css/testefrm.css">
    <script src="./assets/js/jquery-1.11.1.min.js"></script>
    <script src="ScriptEmpresa.js"></script>
    <script src=""></script>


    <title>Next Tech</title>

</head>

<body>

    <div class="clearfix"></div>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title"><img class="img" src="./assets/img/freeze/logo-transp.png" width="180px" height="50px"></h4>
                            <p class="card-category">Seja Bem-Vindo a Empresa!</p>
                        </div>
                        <div class="card-body">
                            <form method="POST" onsubmit="return false">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="form-group bmd-form-group">
                                            <input type="text" class="form-control" name="txtID" id="txtID" disabled=""placeholder="ID">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group bmd-form-group">
                                        <select class="form-control" name="txtStatus" id="txtStatus">
                                                <option value="Ativo">Ativo</option>
                                            </select> 
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group bmd-form-group">
                                            <input type="email" class="form-control" name="txtData" id="txtData" disabled=""placeholder="Data cadastro">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group bmd-form-group">
                                            <input type="text" class="form-control"name="txtNome" id="txtNome"placeholder="Nome completo">
                                        </div>
                                    </div>
                                    <div class="col-md-2"></div>
                                    <div class="col-md-4">
                                        <div class="form-group bmd-form-group">
                                            <input type="text" class="form-control"name="txtCpf" id="txtCpf"placeholder="Cpf">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group bmd-form-group">
                                            <input type="text" class="form-control"name="txtCep" id="txtCep"placeholder="Cep">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group bmd-form-group">
                                            <input type="text" class="form-control"name="txtLogradouro" id="txtLogradouro"placeholder="Logradouro">
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group bmd-form-group">
                                            <input type="text" class="form-control"name="txtNumero" id="txtNumero"placeholder="Número">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group bmd-form-group">
                                            <input type="text" class="form-control"name="txtComplemento" id="txtComplemento"placeholder="Complemento">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group bmd-form-group">
                                            <input type="text" class="form-control"name="txtBairro" id="txtBairro"placeholder="Bairro">
                                        </div>
                                    </div>
                                    <div class="col-md-1"></div>
                                    <div class="col-md-4">
                                        <div class="form-group bmd-form-group">
                                            <input type="text" class="form-control"name="txtCidade" id="txtCidade"placeholder="Cidade">
                                        </div>
                                    </div>
                                    <div class="col-md-1"></div>
                                    <div class="col-md-3">
                                        <div class="form-group bmd-form-group">
                                            <select name="txtUF" id="txtUF" class="form-control">
                                                <option value="">UF</option>
                                                <option value="Acre">AC</option>
                                                <option value="Alagoas">AL</option>
                                                <option value="Amapá">AP</option>
                                                <option value="Amazonas">AM</option>
                                                <option value="Bahia">BA</option>
                                                <option value="Ceará">CE</option>
                                                <option value="Minas gerais">DF</option>
                                                <option value="Espírito Santo">ES</option>
                                                <option value="Goiás">GO</option>
                                                <option value="Maranhão">MA</option>
                                                <option value="Mato Grosso">MT</option>
                                                <option value="Minas gerais">MG</option>
                                                <option value="Pará">PA</option>
                                                <option value="Paraíba">PB</option>
                                                <option value="Paraná">PR</option>
                                                <option value="Pernambuco">PE</option>1
                                                <option value="Piauí">PI</option>1
                                                <option value="Rio de Janeiro">RJ</option>
                                                <option value="Rio Grande do Norte">RN</option>
                                                <option value="Rio Grande do Sul">RS</option>
                                                <option value="Rondônia">RO</option>
                                                <option value="Minas gerais">RR</option>
                                                <option value="Santa Catarina">SC</option>
                                                <option value="São Paulo">SP</option>
                                                <option value="Sergipe">SE</option>
                                                <option value="Tocantins">TO</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group bmd-form-group">
                                            <input type="text" class="form-control"name="txtEmail" id="txtEmail"placeholder="E-mail">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group bmd-form-group">
                                            <input type="text" class="form-control"name="txtTelefone1" id="txtTelefone1"placeholder="Telefone">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group bmd-form-group">
                                            <label class="bmd-label-floating"></label>
                                            <input type="text" class="form-control"name="txtTelefone2" id="txtTelefone2"placeholder="Telefone (Opcional)">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group bmd-form-group">
                                            <select name="txtDepart"id="txtDepart" class="form-control">
                                                <?php 
                                                include_once('DepartamentoPuxar.php');
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group bmd-form-group">
                                            <input type="text" class="form-control"name="txtLogin" id="txtLogin"placeholder="Login">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group bmd-form-group">
                                            <input type="text" class="form-control"name="txtSenha" id="txtSenha"placeholder="Senha">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group bmd-form-group">
                                            <input type="text" class="form-control"name="txtConfirmarSenha" id="txtConfirmarSenha" placeholder="Confirmar senha">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="form-group bmd-form-group">
                                                <textarea class="form-control" rows="1" disabled></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>                                
                                <button name="btoCadastrar" class="btn btn-success"onclick="CadastrarFuncionario()">Cadastrar</button>
                                <button name="btoLimpar" class="btn btn-black"href="FuncionarioCadastre-Se.php">Limpar</button>
                                <a type="reset" name="btoLimpar" class="btn btn-danger"href="_Login.php">Sair</a>
                                <div class="clearfix"></div>
                                <div class="row">
                                    <div class="col-sm-12" id="resultado">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

</body>

</html>