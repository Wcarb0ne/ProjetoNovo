<form class="from-control" method="post" onsubmit="return false">
    <div class="row">
        <div class="col-sm-10">
                <h1>Criar Categoria</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-3">
            <input type="text" class="form-control" name="txtID" id="txtID" placeholder="ID Categoria">
        </div>
            <div class="col-sm-2"></div>
        <div class="col-sm-5">
            <input type="text" class="form-control" name="txtData" id="txtData" placeholder="Data de Cadastro">
        </div>
    </div>
    <div class="row">
        <div class="col-sm-4">
            <input type="text" class="form-control" name="txtNome" id="txtNome" placeholder="Nome Da Categoria">
        </div>
            <div class="col-sm-2"></div>
        <div class="col-sm-4">
            <select class="form-control" name="txtStatus" id="txtStatus">
                <option value=""> ->Selecione<-</option>
                <option value="Ativo">Ativo</option>
                <option value="Inativo">Inativo</option>
            </select>        
        </div>
    </div>
    <div class="row mt-4 mb-4"><!--botoes-->
        <div class="col-sm-10">
            <button name="btoPesquisa" class="btn btn-primary" onclick="PesquisarCategoriaParceiro()">Pesquisar</button>
            <button name="btoCadastrar" class="btn btn-success" onclick="CadastrarCategoriaParceiro()">Cadastrar</button>
            <button name="btoAlterar" class="btn btn-warning" onclick="AlterarCategoriaParceiro()">Alterar</button>
            <a type="reset" name="btoLimpar" class="btn btn-dark"href="Parceiro_sistema.php?Tela=Categoria">Limpar</a>
            <button name="btoExcluir" class="btn btn-danger" onclick="ExcluirCategoriaParceiro()">Excluir</button>
            <button name="btotabela" class="btn btn-info"formaction="Parceiro_sistema.php?">Tabela</button>
        </div>
            <div class="row"> 
                <div class="col-sm-10" id="resultado">
            </div>
    </div>
        
</form>

