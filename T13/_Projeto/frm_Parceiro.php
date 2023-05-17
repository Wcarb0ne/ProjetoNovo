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
            <div class="row">
            <div class="col-sm-4"></div>
                <div class="col-sm-3 m-5">
                    <img id="preImg" src="css/img/Photo-Camera-PNG.png" height="200" width="285" style="border-radius: 70px;border-color:blue" alt="Image preview...">
                    <input name="txtImg" id="txtImg" type="file" class="form-control " onchange="previewFile(this)" />
                    <label for='txtImg' class="Perfil">Imagem de Perfil &#187;</label>
                </div>
                <div class="col-sm-3"></div>
                </div>
            <br>
            <div class="row"><!-- ID / STATUS / datacadastro -->
                <div class="col-sm-4">
                    <input type="text" class="form-control" name="txtID" id="txtID" placeholder="ID Usuario" disabled hidden>
                </div>

                <div class="col-sm-4">
                    <select name="txtStatus" id="txtStatus" class="form-control" hidden>
                        <option value=""> ->Selecione<-< /option>
                        <option value="Ativo" selected>Ativo</option>
                        <option value="Inativo">Inativo</option>
                    </select>
                </div>

                <div class="col-sm-4">
                    <input type="date" class="form-control" name="txtData" id="txtData" placeholder="Data de Cadastro" hidden>
                </div>
            </div>

            <div class="row mt-3"><!-- NOME  / CNPJ  / RAMO -->
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="txtNome" id="txtNome" placeholder="informe o nome da empresa">
                </div>
                <div class="col-sm-3">
                    <input type="number" class="form-control" name="txtCnpj" id="txtCnpj" placeholder="Informe o Cnpj">
                </div>
                <div class="col-sm-3">
                    <input type="text" class="form-control" name="txtRamo" id="txtRamo" placeholder="Informe o Ramo">
                </div>
            </div>

            <div class="row mt-3"><!--  email / telefone1 / telefone2 -->
                <div class="col-sm-4">
                    <input type="email" class="form-control" name="txtEmail" id="txtEmail" placeholder="Insira o Email Comercial">
                </div>
                <div class="col-sm-4">
                    <input type="tel" class="form-control" name="txtTelefone1" id="txtTelefone1" placeholder="Telefone para Contato">
                </div>
                <div class="col-sm-4">
                    <input type="tel" class="form-control" name="txtTelefone2" id="txtTelefone2" placeholder="Telefone da Empresa">
                </div>
            </div>

            <div class="row mt-3"><!--LOGIN , SENHA , CONFIRMAR SENHA  -->
                <div class="col-sm-4">
                    <input type="text" class="form-control" name="txtLogin" id="txtLogin" placeholder="Login do usuário">
                </div>
                <div class="col-sm-4">
                    <input type="password" class="form-control" name="txtSenha" id="txtSenha" placeholder="Informe a Senha">
                </div>
                <div class="col-sm-4">
                    <input type="password" class="form-control" name="txtConfirmarSenha" id="txtConfirmarSenha" placeholder="Confirme a Senha">
                </div>
            </div>

            <div class="row mt-3"><!--LOGRADOURO / NUMERO / COMPLEMENTO-->
                <div class="col-sm-3">
                    <input type="text" class="form-control" name="txtLogradouro" id="txtLogradouro" placeholder=" Informe seu Endereço">
                </div>
                <div class="col-sm-3">
                    <input type="number" class="form-control" name="txtNumero" id="txtNumero" placeholder="Insira o Numero">
                </div>
                <div class="col-sm-3">
                    <input type="text" class="form-control" name="txtComplemento" id="txtComplemento" placeholder="Informe o Complemento">
                </div>
            </div>

            <div class="row mt-4"><!-- BAIRRO / CIDADE / UF / CEP -->
                <div class="col-sm-3">
                    <input type="text" class="form-control" name="txtBairro" id="txtBairro" placeholder=" Informe seu Bairro">
                </div>
                <div class="col-sm-3">
                    <input type="text" class="form-control" name="txtCidade" id="txtCidade" placeholder=" Informe sua Cidade">
                </div>
                <div class="col-sm-3">
                    <select name="txtUF" id="txtUF" class="form-control">
                        <option value="">UF</option>
                        <option value="Acre">AC</option>
                        <option value="Alagoas">AL</option>
                        <option value="Amapá">AP</option>
                        <option value="Amazonas">AM</option>
                        <option value="Bahia">BA</option>
                        <option value="Ceará">CE</option>
                        <option value="Distrito Federal">DF</option>
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
                        <option value="Roraima">RR</option>
                        <option value="Santa Catarina">SC</option>
                        <option value="São Paulo">SP</option>
                        <option value="Sergipe">SE</option>
                        <option value="Tocantins">TO</option>
                    </select>
                </div>
                <div class="col-sm-3">
                    <input type="number" class="form-control" name="txtCep" id="txtCep" placeholder="Informe seu Cep" >
                </div>
            </div>
            <!-- onblur="pesquisacep(this.value);" -->
            <div class="row mt-4"><!-- Observação -->
                <div class="col-sm-12">
                    <textarea name="txtObs" id="txtObs" class="form-control" rows="3" placeholder="Insira a observação do cadastro (campo não obrigatório)"></textarea>
                </div>
            </div>
            <div class="container">
            <textarea  id="base64Code" rows="5" class="form-control"></textarea>
            <textarea  id="base64CodePHP" rows="5" class="form-control"></textarea>
            </div>

            <div class="row mt-2 mb-2"><!--botoes-->
                <div class="col-sm-12">
                    <button name="btoCadastrar" class="btn btn-success" onclick="CadastrarParceiro()">Cadastrar</button>
                
                    <a name="btoSair" class="btn btn-danger" href="_Home.php">Sair</a>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-10" id="resultado">
                </div>
            </div>
        </form>
    </div>
</div>

<script>
        function previewFile(element) {

            var preview = document.getElementById('preImg');
            var file = document.getElementById('txtImg').files[0];

            var reader = new FileReader();

            reader.onloadend = function() {
                var caminho = reader.result;
                // var caminhoLimpo = reader.result;

                preview.src = caminho;
                $("#base64Code").val(caminho);

            

            }

            if (file) {
                reader.readAsDataURL(file);
            } else {
                preview.src = "";
            }

        }
    </script>