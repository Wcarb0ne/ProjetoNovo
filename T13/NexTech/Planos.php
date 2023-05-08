<br>
<form id="my-form"  action="#"class="from-control" method="post" onsubmit="return false">
    <div class="row">
        <div class="col-sm-10">
                <h1>Criar Plano</h1>
        </div>
    </div>
    <br>

    <div class="row">
        <div class="col-sm-3">
            <input type="text" class="form-control" name="txtID" id="txtID" placeholder="ID Plano">
        </div>
        <div class="col-sm-3">
            <select class="form-control" name="txtStatus" id="txtStatus">
                <option value="">Selecione</option>
                <option value="Ativo">Ativo</option>
                <option value="Expirado">Expirado</option>
                <option value="Expirado">Sem Plano</option>
            </select>
        </div>
        <div class="col-sm-4">
            <input type="text" class="form-control" name="txtData" id="txtData" placeholder="Data de Cadastro">
        </div>
    </div>

    <div class="row">
        <div class="col-sm-3">
            <label for="Plano">Nome *</label>
            <input type="text" class="form-control" name="txtNome" id="txtNome" placeholder="Nome Da Plano">
        </div>

        <div class="col-sm-3">
            <label for="Plano">Preço</label>
            <input type="text" class="form-control" name="txtPreco" id="txtPreco" placeholder="Valor do Plano">
        </div>

        <div class="col-sm-4">
            <label for="tplano">Duração do plano</label>
            <select class="form-control" name="txtDuracao" id="txtDuracao">
                <option value="">Selecione</option>
                <option value="Bronze">1 Mês</option>
                <option value="Silver">2 Mês</option>
                <option value="Gold">3 Mês</option>
            </select>        
        </div>

    </div>
    <div class="row mt-2">
        <div class="col-sm-2">
        <label for="tplano">Beneficio dos Planos</label>
        </div>
    </div>
    <div class="row mt-2">
        <div class="col-sm-2">
            <input type="text" class="form-control" name="txtBeneficio1" id="txtBeneficios1" placeholder="Benficios do plano">
        </div>
            <!-- <div class="col-sm-1"></div> -->
        <div class="col-sm-2">
            <input type="text" class="form-control" name="txtBeneficio2" id="txtBeneficios2" placeholder="Benficios do plano">
        </div>
        <div class="col-sm-2">
            <input type="text" class="form-control" name="txtBeneficio3" id="txtBeneficios3" placeholder="Benficios do plano">
        </div>
            <!-- <div class="col-sm-1"></div> -->
        <div class="col-sm-2">
            <input type="text" class="form-control" name="txtBeneficio4" id="txtBeneficios4" placeholder="Benficios do plano">
        </div>
        <div class="col-sm-2">
            <input type="text" class="form-control" name="txtBeneficio4" id="txtBeneficios5" placeholder="Benficios do plano">
        </div>
    </div>
    <div class="row mt-4 mb-4"><!--botoes-->
        <div class="col-sm-10">
            <button name="btoPesquisa" class="btn btn-primary" onclick="PesquisarPlano()">Pesquisar</button>
            <button name="btoCadastrar" class="btn btn-success" onclick="CadastrarPlano()">Cadastrar</button>
            <button name="btoAlterar" class="btn btn-warning" onclick="AlterarPlano()">Alterar</button>
            <a type="reset" name="btoLimpar" class="btn btn-dark"href="NexTech_Sistema.php?Tela=Plano">Limpar</a>
            <button name="btoExcluir" class="btn btn-danger" onclick="ExcluirPlano()">Excluir</button>
        </div>
            <div class="row"> 
                <div class="col-sm-10" id="resultado">
            </div>
    </div>      
</form>
<br>