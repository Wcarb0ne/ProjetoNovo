<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Archivo:wght@400;500&display=swap"rel="stylesheet" />
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/bobonicado.css">
    <link rel="stylesheet" href="css/icon.css">

    <link rel="stylesheet" href="css/bootstrap/bootstrap.css">
  <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="css/landingPage.css">

  <script src="js/bootstrap.js"></script>
  <script src="js/script.js"></script>
  <script src="js/jquery-3.6.4.js"></script>

  
  <?php include_once('_header.php'); ?>
  <?php include_once('www_autenticar.php'); ?>
  <?php include_once('Cliente_btoPesquisa.php'); ?>
  

    <title>Perfil do Usúario</title>

    </head>

<body>


<br>   <form id="my-form" class="from-control" action="#" onsubmit="return false" enctype="multipart/form-data">
        <h2>Perfil</h2>
        <br><br>

        <div>
            <img class="imglogin" src="css/img/logo.png" alt="" id="imgPhoto" accept=".jpg,.jpeg,.png"><br>
            <label for="img">Selecione uma imagem</label>
            <input id="fotoPerfil" type="file" accept=".jpg,.jpeg,.png"/>
        </div><br>
        

        
    <hr>
    <div class="container">
    <div class="col-sm-1"></div>


    <div class="col-sm-12">
        <form action="" class="form-control" id="my-form" method="POST" onsubmit="return false">
            <div class="row">
                <div class="col-sm-12">
                    <h1> Tela de Cadastro</h1>
                </div>
            </div>
            <br>
            <div class="row"><!-- ID / STATUS / datacadastro -->
                <div class="col-sm-2">
                    <input type="number" class="form-control" name="txtID" id="txtID" placeholder="ID Cliente" disabled value="<?=$idCliente?>">
                </div>

                <div class="col-sm-2">
                    <select name="txtStatus" id="txtStatus" class="form-control" hidden>
                        <option value="" selected> ->Selecione<-</option>
                        <option value="Ativo" <?=($uf_Cliente=="Ativo" ? 'selected': '')?> >Ativo</option>
                        <option value="Inativo" <?=($uf_Cliente=="Inativo" ? 'selected': '')?>>Inativo</option>
                    </select>
                </div>

                <div class="col-sm-2">
                    <input type="text" class="form-control" name="txtData" id="txtData" placeholder="Data de Cadastro" hidden value="$data_Cliente">
                </div>
                <div class="col-sm-1"></div>

            </div>

            <div class="row mt-1"><!-- NOME  / CPF  / -->
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="txtNome" id="txtNome" placeholder="informe o Nome completo" value="<?=$nome_Cliente?>">
                </div>
                <div class="col-sm-3">
                    <input type="txt" class="form-control" name="txtCPF" id="txtCPF" placeholder="Informe o CPF" value="<?=$cpf_Cliente?>">
                </div>


            </div>

            <div class="row mt-3"><!--  email / telefone1 / telefone2 -->

                <div class="col-sm-6">
                    <input type="email" class="form-control" name="txtEmail" id="txtEmail" placeholder="Insira o Email" value="<?=$email_Cliente?>">
                </div>
                <div class="col-sm-3">
                    <input type="tel" class="form-control" name="txtTelefone1" id="txtTelefone1" placeholder="Informe o Telefone" value="<?= $telefone1_Cliente?>" >
                </div>
                <div class="col-sm-3">
                    <input type="tel" class="form-control" name="txtTelefone2" id="txtTelefone2" placeholder=" Informe o Telefone2" value="<?= $telefone2_Cliente ?>">
                </div>




            </div>

            <div class="row mt-3"><!--LOGIN , SENHA , CONFIRMAR SENHA  -->
                <div class="col-sm-4">
                    <input type="text" class="form-control" name="txtLogin" id="txtLogin" placeholder="Informe o Login" value="<?= $login_Cliente?>" >
                </div>
                <div class="col-sm-4">
                    <input type="password" class="form-control" name="txtSenha" id="txtSenha" placeholder="Digite a Senha" value="<?=$senha_Cliente?>">
                </div>
                <div class="col-sm-4">
                    <input type="password" class="form-control" name="txtConfirmarSenha" id="txtConfirmarSenha" placeholder="Confirme a senha" value="<?=$senha_Cliente?>">
                </div>


            </div>

            <div class="row mt-3"><!--LOGRADOURO / NUMERO / COMPLEMENTO-->
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="txtLogradouro" id="txtLogradouro" placeholder="Insira o Logradouro" value="<?=$logradouro_Cliente?>">
                </div>
                <div class="col-sm-3">
                    <input type="number" class="form-control" name="txtNumero" id="txtNumero" placeholder="Número da Residência" value="<?=$numero_Cliente?>">
                </div>

                <div class="col-sm-3">
                    <input type="text" class="form-control" name="txtCEP" id="txtCEP" placeholder="Insira o CEP" value="<?=$cep_Cliente?>">
                </div>
            </div>

            <div class="row mt-3">

                <div class="col-sm-3">
                    <input type="text" class="form-control" name="txtBairro" id="txtBairro" placeholder="Insira o Bairro" value="<?=$bairro_Cliente?>">
                </div>

                <div class="col-sm-3">
                    <input type="Text" class="form-control" name="txtCidade" id="txtCidade" placeholder="Informe a Cidade" value="<?=$cidade_Cliente?>">
                </div>

                <div class="col-sm-2">
                    <select name="txtUF" id="txtUF" class="form-control" value="">
                        <option value=""<?=($uf_Cliente=="" ? 'selected': '')?>>UF</option>
                        <option value="Acre" <?=($uf_Cliente=="Acre" ? 'selected': '')?>>AC</option>
                        <option value="Alagoas" <?=($uf_Cliente=="Alagoas" ? 'selected': '')?>>AL</option>
                        <option value="Amapá" <?=($uf_Cliente=="Amapá" ? 'selected': '')?>>AP</option>
                        <option value="Amazonas"><?=($uf_Cliente=="Amazonas" ? 'selected': '')?>AM</option>
                        <option value="Bahia"><?=($uf_Cliente=="Bahia" ? 'selected': '')?>BA</option>
                        <option value="Ceará" <?=($uf_Cliente=="Ceará" ? 'selected': '')?>>CE</option>
                        <option value="Distrito Federal"<?=($uf_Cliente=="Distrito Federal" ? 'selected': '')?>>DF</option>
                        <option value="Espírito Santo" <?=($uf_Cliente=="Espírito Santos" ? 'selected': '')?>>ES</option>
                        <option value="Goiás" <?=($uf_Cliente=="Goiás" ? 'selected' : '')?>>GO</option>
                        <option value="Maranhão" <?=($uf_Cliente=="Maranhão" ? 'selected' : '')?>>MA</option>
                        <option value="Mato Grosso" <?=($uf_Cliente=="Mato Grosso" ? 'selected' : '')?>>MT</option>
                        <option value="Minas gerais" <?=($uf_Cliente=="Minas Gerais" ? 'selected' : '')?>>MG</option>
                        <option value="Pará" <?=($uf_Cliente=="Pará" ? 'selected' : '')?>>PA</option>
                        <option value="Paraíba" <?=($uf_Cliente=="Paraíba" ? 'selected' : '')?>>PB</option>
                        <option value="Paraná" <?=($uf_Cliente=="Paraná" ? 'selected' : '')?>>PR</option>
                        <option value="Pernambuco" <?=($uf_Cliente=="Pernambuco" ? 'selected' : '')?>>PE</option>
                        <option value="Piauí" <?=($uf_Cliente=="Piauí" ? 'selected' : '')?>>PI</option>
                        <option value="Rio de Janeiro" <?=($uf_Cliente=="Rio de Janeiro" ? 'selected' : '')?>>RJ</option>
                        <option value="Rio Grande do Norte" <?=($uf_Cliente=="Rio Grande do Norte" ? 'selected' : '')?>>RN</option>
                        <option value="Rio Grande do Sul" <?=($uf_Cliente==" Rio Grande do Sul" ? 'selected' : '')?>>RS</option>
                        <option value="Rondônia" <?=($uf_Cliente=="Rondônia" ? 'selected' : '')?>>RO</option>
                        <option value="Roraima" <?=($uf_Cliente=="Roraima" ? 'selected' : '')?>>RR</option>
                        <option value="Santa Catarina" <?=($uf_Cliente=="Santa Catarina" ? 'selected' : '')?>>SC</option>
                        <option value="São Paulo" <?=($uf_Cliente=="São Paulo" ? 'selected' : '')?>>SP</option>
                        <option value="Sergipe" <?=($uf_Cliente=="Sergipe" ? 'selected' : '')?>>SE</option>
                        <option value="Tocantins" <?=($uf_Cliente=="Tocantins" ? 'selected' : '')?>>TO</option>
                    </select>
                </div>

                <div class="col-sm-4">
                    <input type="text" class="form-control" name="txtComplemento" id="txtComplemento" placeholder="Complemento(Opcional)" value="<?=$complemento_Cliente?>">
                </div>

            </div>





            <div class="row mt-3"><!-- Observação -->
                <div class="col-sm-12 ">
                    <textarea name="txtObs" id="txtObs" class="form-control" rows="3" placeholder="Observação(Opcional)"></textarea>
                </div>
            </div>

    <div class="row mt-4 mb-4"><!--botoes-->
        <div class="col-sm-12">
                   
        <div class="row mt-3"><!--botoes-->
        <div class="col-sm-1"></div>
            <div class="col-sm-5">
                <button id="btn-validar" class="btn-validar" type="submit" value="validar" onclick="PesquisarCliente()">Alterar Dados</button>
                <div class="msgValidar"></div>
            </div>
            <div class="col-sm-5">
                 <button id="btn-Sair" class="btn-Sair" type="submit"  value="Sair">Deslogar</button>
            </div>
            <div class="col-sm-1"></div>

        </div>


        <div class="col-sm-12" id="resultado"></div>

    </div>
   
    </form>

</body>

</html>








