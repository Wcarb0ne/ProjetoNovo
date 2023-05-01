<br>
<form id="my-form"  action="#"class="from-control" method="post" onsubmit="return false">
    <div class="row">
        <div class="col-sm-12">
                <h1>Criar Departamento</h1>
        </div>
    </div>
    <br>

    <div class="row">
        <div class="col-sm-4">
            <input type="text" class="form-control" name="txtID" id="txtID" placeholder="ID Departamento">
        </div>
            <div class="col-sm-3"></div>
        <div class="col-sm-5">
            <input type="text" class="form-control" name="txtData" id="txtData" placeholder="Data de Cadastro">
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
        <label for="Departamento">Nome *</label>
            <input type="text" class="form-control" name="txtNome" id="txtNome" placeholder="Nome Da Departamento"require>
        </div>
            <div class="col-sm-2"></div>
        <div class="col-sm-4">
            <label for="Status">Status</label>
            <select class="form-control" name="txtStatus" id="txtStatus">
                <option value="Ativo">Ativo</option>
                <option value="Inativo">Inativo</option>
            </select>        
        </div>
    </div>
    <div class="row mt-4 mb-4"><!--botoes-->
        <div class="col-sm-10">
            <button name="btoPesquisa" class="btn btn-primary" onclick="PesquisarDepartamentoParceiro()">Pesquisar</button>
            <button name="btoCadastrar" class="btn btn-success" onclick="CadastrarDepartamentoParceiro()">Cadastrar</button>
            <button name="btoAlterar" class="btn btn-warning" onclick="AlterarDepartamentoParceiro()">Alterar</button>
            <a type="reset" name="btoLimpar" class="btn btn-dark"href="Parceiro_sistema.php?Tela=Departamento">Limpar</a>
            <button name="btoExcluir" class="btn btn-danger" onclick="ExcluirDepartamentoParceiro()">Excluir</button>
        </div>
            <div class="row"> 
                <div class="col-sm-10" id="resultado">
            </div>
    </div>
        
</form>