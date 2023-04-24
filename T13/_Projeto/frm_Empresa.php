<!-- <section class=""> -->
    <form id="my-form" class="from-control" action="#" method="post" enctype="multipart/form-data">
        <h2>Cadastre sua Empresa</h2>
        <br><br>

        <div>
            <img class="imglogin" src="./Cadastro-Parceiro/img/logoteste.jpg" alt="" id="imgPhoto" accept=".jpg,.jpeg,.png"><br>
            <label for="img">Selecione uma imagem</label>
            <input id="fotoPerfil" type="file" accept=".jpg,.jpeg,.png"/>
        </div><br>

        <div class="row"><!-- ID / STATUS / datacadastro -->
            <div class="col-sm-3">
                <input type="text" class="form-control" name="txtID" id="txtID" placeholder="ID Usuario">
            </div>
                <div class="col-sm-1"></div>
            <div class="col-sm-2">
                <select name="txtStatus" id="txtStatus" class="form-control">
                    <option value="" selected >Selecione</option>
                    <option value="Ativo">Ativo</option>
                    <option value="Inativo">Inativo</option>
                </select>
            </div>
                <div class="col-sm-1"></div>
            <div class="col-sm-3">
                <input type="text" class="form-control" name="txtData" id="txtData" placeholder="Data de Cadastro">
            </div>
        </div>

        <div class="row mt-3">
            <label for="name">Dados Pessoais</label><hr>
        </div>

        <div class="row mt-1"><!-- NOME  / CHPJ  / -->
            <div class="col-sm-5">
                <div class="my-form-control-error">
                    <label for="name">Nome Completo *</label>
                        <input type="text" class="form-control" id="name" placeholder="Kauã Vahz de la felipe"/>
                </div>
            </div>
                <div class="col-sm-2"></div>
            <div class="col-sm-3">
                <div class="my-form-control-error">
                    <label for="cpf">CPF *</label>
                    <input type="text" class="cpf form-control" id="cpf" placeholder="157.000.000-00" name="cpf"
                    onkeyup="cpfCheck(this)" maxlength="14" onkeydown="javascript: fMasc( this, mCPF );">
                    <span class="spancpf" id="cpfResponse"></span>
                </div>
            </div>
        </div>

        <div class="row mt-3">
            <label for="name">Dados da Empresa</label><hr>
        </div>

        <div class="row mt-1"><!-- EMPRESA  / CNPJ  / DATA EMISSÃO  btoCalcular-->
            <div class="col-sm-3">
                <div class="my-form-control-error">
                    <label for="apelido">Nome Empresa *</label>
                        <input type="text" class="form-control" id="apelido" placeholder="Zaza02v" maxlength="20"/>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="my-form-control-error">
                    <label for="rg">CNPJ *</label>
                        <input type="text" class="rg form-control" id="rg" placeholder="XX.XXX.XXX/0001-XX"maxlength="18"/>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="my-form-control-error">
                    <label for="date">Data de Emissão *</label>
                        <input type="date" id="dob" class="date form-control"/>
                            <!-- <button type="submit" id="btn-idade" class="btn-idade"> Calcular</button>
                            <div id="stickyAge" class="msgIdade"></div>     -->
               </div>
            </div>

            <div class="col-sm-1">
                <div class="my-form-control-error">
                    <button type="submit" id="btn-idade" class="btn-idade"> Calcular</button>
                    <div id="stickyAge" class="msgIdade"></div>
                </div>    
            </div>
        </div>

        <div class="row mt-3">
            <label for="name">Endereço</label><hr>
        </div>

        <div class="row mt-1"><!-- EMPRESA  / CNPJ  / DATA EMISSÃO  btoCalcular-->
            <div class="col-sm-3">
                <div class="my-form-control-error">
                <label for="adress">Cep *</label>
                <input type="text" name="cep" id="cep" value="" class="mascCEP form-control" size="10" maxlength="8" placeholder="CEP" onblur="pesquisacep(this.value);"/>
                <!-- <input type="text" id="rua" placeholder="Rua, Avenida, Travessa, Estrada Seu Chico"/> -->
                </div>
            </div>

            <div class="col-sm-5">
                <div class="my-form-control-error">
                    <label for="adress">Logradouro *</label>
                        <input type="text" class="form-control" id="rua" placeholder="Rua, Avenida, Travessa, Estrada Seu Chico"/></div>
            </div>

            <div class="col-sm-2">
            <label for="numero">Nº *</label>
                    <input type="number" class="form-control" id="numero" placeholder="Número"/>
               </div>
            </div>
            <!-- Proxima linha -->
            <div class="row mt-1"><!-- BAIRRO / CIDADE / UF-->
            <div class="col-sm-4">
                <label for="bairro">Bairro *</label>
                <input type="text" class="form-control" name="bairro" id="bairro"  placeholder="Bairro"/>
            </div>
            
            <div class="col-sm-4">
                <label for="cidade">Cidade *</label>
                <input type="text" class="form-control" name="cidade" id="cidade"  placeholder="Cidade" />
            </div>

            <div class="col-sm-2">
                <!-- <div class="uf"> -->
                <label for="UF">UF *</label>
                    <select name="uf" id="uf" class="form-control">
                        <option value=""></option>
                        <option value="AC">Acre</option>
                        <option value="AL">Alagoas</option>
                        <option value="AP">Amapá</option>
                        <option value="AM">Amazonas</option>
                        <option value="BA">Bahia</option>
                        <option value="CE">Ceará</option>
                        <option value="DF">Distrito Federal</option>
                        <option value="ES">Espírito Santo</option>
                        <option value="GO">Goiás</option>
                        <option value="MA">Maranhão</option>
                        <option value="MT">Mato Grosso</option>
                        <option value="MS">Mato Grosso do Sul</option>
                        <option value="MG">Minas Gerais</option>
                        <option value="PA">Pará</option>
                        <option value="PB">Paraíba</option>
                        <option value="PR">Paraná</option>
                        <option value="PE">Pernambuco</option>
                        <option value="PI">Piauí</option>
                        <option value="RJ">Rio de Janeiro</option>
                        <option value="RN">Rio Grande do Norte</option>
                        <option value="RS">Rio Grande do Sul</option>
                        <option value="RO">Rondônia</option>
                        <option value="RR">Roraima</option>
                        <option value="SC">Santa Catarina</option>
                        <option value="SP">São Paulo</option>
                        <option value="SE">Sergipe</option>
                        <option value="TO">Tocantins</option>
                    </select>
                <!-- </div>                -->
            </div>
        </div>

        <div class="row mt-3">
            <label for="name">Contato</label><hr>
        </div>

        <div class="row mt-1"><!--  EMAIL  / CELULAR  / CONTATO -->
            <div class="col-sm-4">
                <div class="my-form-control-error">
                    <label for="adress">Email *</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email *"/>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="my-form-control-error">
                    <label for="adress">Celular *</label>
                    <input type="tel" class="form-control" name="telefone" id="telefone" placeholder="Celular com DDD"/>
                </div>
            </div>

            <div class="col-sm-3">
                <label for="adress">Empresa *</label>
                <input type="tel" class="form-control" name="telefone" id="telefone" placeholder="Celular com DDD"/>
            </div>
            <!-- Proxima linha -->
        </div>

        <div class="row mt-3">
            <label for="name">Dados de Login</label><hr>
        </div> 

        <div class="row mt-1"><!--  LOGIN  / SENHA  / CONFIRMAR SENHA -->
            <div class="col-sm-4">
                <div class="my-form-control-error">
                <label for="login">Login *</label>
                <input type="text" class="form-control" name="txtLogin" id="txtLogin" placeholder="Login do usuário">
                </div>
            </div>

            <div class="col-sm-3">
                <div class="my-form-control-error">
                    <label for="senha">Senha *</label>
                    <input type="password" class="form-control" name="txtSenha" id="txtSenha" placeholder="Informe a Senha">
                </div>
            </div>

            <div class="col-sm-3">
                <label for="senha">Confirmar Senha *</label>
                <input type="password" class="form-control" name="txtConfirmarSenha" id="txtConfirmarSenha" placeholder="Confirme a Senha">

            </div>
               
        </div>

        <div class="row mt-3">
            <button id="btn-validar" class="btn-validar" type="submit" value="validar" onclick="validarCampos();">Cadastrar</button>
            <div class="msgValidar"></div>
        </div> 

        

        
    </form>
<!-- </section> -->