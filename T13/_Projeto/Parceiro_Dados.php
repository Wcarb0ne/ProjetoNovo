<link rel="preconnect" href="https://fonts.googleapis.com" />
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
<link href="https://fonts.googleapis.com/css2?family=Archivo:wght@400;500&display=swap" rel="stylesheet" />

<link rel="stylesheet" href="css/styles.css">
<link rel="stylesheet" href="css/bootstrap/bootstrap.css">



<script src="js/bootstrap.js"></script>
<script src="js/jquery-3.6.4.js"></script>

<script src="js/script.js"></script>
<!-- <script src="js/ParceiroScript.js"></script> -->
<br>
<?php
include_once('Conexao.php'); 
include_once('www_autenticar.php');
include_once('Parceiro_btoPesquisa.php');
 ?>

<title>Parceiro</title>
<div class="container">
<div class="col-sm-1"></div>
    <div class="col-sm-12">
        <form id="my-form" action="#" class="from-control" method="POST" onsubmit="return false">
            <div class="row">
                <div class="col-sm-12">
                    <h1> Formulario de Cadastro da Empresa</h1>
                </div>
            </div>
            <br>
            <div class="row"><!-- ID / STATUS / datacadastro -->
                <div class="col-sm-4">
                    <input type="text" class="form-control" name="txtID" id="txtID" placeholder="ID Usuario" value="<?=$idUsuario?>" disabled >
                </div>

                <div class="col-sm-4">
                    <select name="txtStatus" id="txtStatus" class="form-control" hidden>
                        <option value="" selected> ->Selecione<-< /option>
                        <option value="Ativo" <?=($uf_Parceiro=="Ativo" ? 'selected': '')?> >Ativo</option>
                        <option value="Inativo" <?=($uf_Parceiro=="Inativo" ? 'selected': '')?>>Inativo</option>
                    </select>
                </div>

                <div class="col-sm-4">
                    <input type="date" class="form-control" name="txtData" id="txtData" placeholder="Data de Cadastro" value="<?=$data_Parceiro?>" hidden>
                </div>
            </div>

            <div class="row mt-3"><!-- NOME  / CNPJ  / RAMO -->
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="txtNome" id="txtNome" placeholder="informe o nome da empresa" value="<?=$nome_Parceiro?>">
                </div>
                <div class="col-sm-3">
                    <input type="number" class="form-control" name="txtCnpj" id="txtCnpj" placeholder="Informe o Cnpj" value="<?=$cnpj_Parceiro?>">
                </div>
                <div class="col-sm-3">
                    <input type="text" class="form-control" name="txtRamo" id="txtRamo" placeholder="Informe o Ramo" value="<?=$ramo_Parceiro?>">
                </div>
            </div>

            <div class="row mt-3"><!--  email / telefone1 / telefone2 -->
                <div class="col-sm-4">
                    <input type="email" class="form-control" name="txtEmail" id="txtEmail" placeholder="Insira o Email Comercial" value="<?=$email_Parceiro?>">
                </div>
                <div class="col-sm-4">
                    <input type="tel" class="form-control" name="txtTelefone1" id="txtTelefone1" placeholder="Telefone para Contato" value="<?=$telefone1_Parceiro?>">
                </div>
                <div class="col-sm-4">
                    <input type="tel" class="form-control" name="txtTelefone2" id="txtTelefone2" placeholder="Telefone da Empresa" value="<?=$telefone2_Parceiro?>">
                </div>
            </div>

            <div class="row mt-3"><!--LOGIN , SENHA , CONFIRMAR SENHA  -->
                <div class="col-sm-4">
                    <input type="text" class="form-control" name="txtLogin" id="txtLogin" placeholder="Login do usuário"value="<?=$login_Parceiro?>">
                </div>
                <div class="col-sm-4">
                    <input type="password" class="form-control" name="txtSenha" id="txtSenha" placeholder="Informe a Senha" value="<?=$senha_Parceiro?>">
                </div>
                <div class="col-sm-4">
                    <input type="password" class="form-control" name="txtConfirmarSenha" id="txtConfirmarSenha" placeholder="Confirme a Senha" value="<?=$senha_Parceiro?>">
                </div>
            </div>

            <div class="row mt-3"><!--LOGRADOURO / NUMERO / COMPLEMENTO-->
                <div class="col-sm-3">
                    <input type="text" class="form-control" name="txtLogradouro" id="txtLogradouro" placeholder=" Informe seu Endereço" value="<?=$logradouro_Parceiro?>">
                </div>
                <div class="col-sm-3">
                    <input type="number" class="form-control" name="txtNumero" id="txtNumero" placeholder="Insira o Numero" value="<?=$numero_Parceiro?>">
                </div>
                <div class="col-sm-3">
                    <input type="text" class="form-control" name="txtComplemento" id="txtComplemento" placeholder="Informe o Complemento" value="<?=$complemento_Parceiro?>">
                </div>
            </div>

            <div class="row mt-4"><!-- BAIRRO / CIDADE / UF / CEP -->
                <div class="col-sm-3">
                    <input type="text" class="form-control" name="txtBairro" id="txtBairro" placeholder=" Informe seu Bairro" value="<?=$bairro_Parceiro?>">
                </div>
                <div class="col-sm-3">
                    <input type="text" class="form-control" name="txtCidade" id="txtCidade" placeholder=" Informe sua Cidade" value="<?=$cidade_Parceiro?>">
                </div>
                <div class="col-sm-3">
                <select name="txtUF" id="txtUF" class="form-control" value="">
                        <option value=""<?=($uf_Parceiro=="" ? 'selected': '')?>>UF</option>
                        <option value="Acre" <?=($uf_Parceiro=="Acre" ? 'selected': '')?>>AC</option>
                        <option value="Alagoas" <?=($uf_Parceiro=="Alagoas" ? 'selected': '')?>>AL</option>
                        <option value="Amapá" <?=($uf_Parceiro=="Amapá" ? 'selected': '')?>>AP</option>
                        <option value="Amazonas"><?=($uf_Parceiro=="Amazonas" ? 'selected': '')?>AM</option>
                        <option value="Bahia"><?=($uf_Parceiro=="Bahia" ? 'selected': '')?>BA</option>
                        <option value="Ceará" <?=($uf_Parceiro=="Ceará" ? 'selected': '')?>>CE</option>
                        <option value="Distrito Federal"<?=($uf_Parceiro=="Distrito Federal" ? 'selected': '')?>>DF</option>
                        <option value="Espírito Santo" <?=($uf_Parceiro=="Espírito Santos" ? 'selected': '')?>>ES</option>
                        <option value="Goiás" <?=($uf_Parceiro=="Goiás" ? 'selected' : '')?>>GO</option>
                        <option value="Maranhão" <?=($uf_Parceiro=="Maranhão" ? 'selected' : '')?>>MA</option>
                        <option value="Mato Grosso" <?=($uf_Parceiro=="Mato Grosso" ? 'selected' : '')?>>MT</option>
                        <option value="Minas gerais" <?=($uf_Parceiro=="Minas Gerais" ? 'selected' : '')?>>MG</option>
                        <option value="Pará" <?=($uf_Parceiro=="Pará" ? 'selected' : '')?>>PA</option>
                        <option value="Paraíba" <?=($uf_Parceiro=="Paraíba" ? 'selected' : '')?>>PB</option>
                        <option value="Paraná" <?=($uf_Parceiro=="Paraná" ? 'selected' : '')?>>PR</option>
                        <option value="Pernambuco" <?=($uf_Parceiro=="Pernambuco" ? 'selected' : '')?>>PE</option>
                        <option value="Piauí" <?=($uf_Parceiro=="Piauí" ? 'selected' : '')?>>PI</option>
                        <option value="Rio de Janeiro" <?=($uf_Parceiro=="Rio de Janeiro" ? 'selected' : '')?>>RJ</option>
                        <option value="Rio Grande do Norte" <?=($uf_Parceiro=="Rio Grande do Norte" ? 'selected' : '')?>>RN</option>
                        <option value="Rio Grande do Sul" <?=($uf_Parceiro==" Rio Grande do Sul" ? 'selected' : '')?>>RS</option>
                        <option value="Rondônia" <?=($uf_Parceiro=="Rondônia" ? 'selected' : '')?>>RO</option>
                        <option value="Roraima" <?=($uf_Parceiro=="Roraima" ? 'selected' : '')?>>RR</option>
                        <option value="Santa Catarina" <?=($uf_Parceiro=="Santa Catarina" ? 'selected' : '')?>>SC</option>
                        <option value="São Paulo" <?=($uf_Parceiro=="São Paulo" ? 'selected' : '')?>>SP</option>
                        <option value="Sergipe" <?=($uf_Parceiro=="Sergipe" ? 'selected' : '')?>>SE</option>
                        <option value="Tocantins" <?=($uf_Parceiro=="Tocantins" ? 'selected' : '')?>>TO</option>
                    </select>
                </div>
                <div class="col-sm-3">
                    <input type="number" class="form-control" name="txtCep" id="txtCep" placeholder="Informe seu Cep" value="<?=$cep_Parceiro?>">
                </div>
            </div>

            <div class="row mt-4"><!-- Observação -->
                <div class="col-sm-12">
                    <textarea name="txtObs" id="txtObs" class="form-control" rows="3" placeholder="Insira a observação do cadastro (campo não obrigatório)" ><?=$obs_Parceiro?></textarea>
                </div>
            </div>

            <textarea hidden id="base64Code" rows="5" class="form-control"></textarea>
            <textarea hidden id="base64CodePHP" rows="5" class="form-control"></textarea>

            <div class="row mt-2 mb-2"><!--botoes-->
                <div class="col-sm-12">
                    <button name="btoCadastrar" class="btn btn-success" onclick="ParceiroAlterar()">Alterar</button>
                   <a name="btoSair" class="btn btn-danger" href="Parceiro_sistema.php?Parceiro=Sair">Deslogar</a>
                   
                </div>
            </div>
            <div class="row">
                <div class="col-sm-10" id="resultado">
                </div>
            </div>
        </form>
    </div>
</div>