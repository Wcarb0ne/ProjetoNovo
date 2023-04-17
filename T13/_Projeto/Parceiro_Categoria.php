<form action="" class="from-control" method="post">
    <div class="row">
        <div class="col-sm-8">
                <h1>Criar Categoria</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-3">
            <input type="text" class="form-control" name="txtID" id="txtID" placeholder="ID Categoria">
        </div>
            <div class="col-sm-2"></div>
        <div class="col-sm-3">
            <input type="text" class="form-control" name="txtData" id="txtData" placeholder="Data de Cadastro">
        </div>
    </div>
    <div class="row">
        <div class="col-sm-3">
            <input type="text" class="form-control" name="txtNome" id="txtNome" placeholder="Nome Da Categoria">
        </div>
            <div class="col-sm-2"></div>
        <div class="col-sm-3">
            <select type="checkbox"name="txtStatus" id="txtStatus" class="form-control">
                <option value=""> ->Selecione<-</option>
                <option value="Ativo">Ativo</option>
                <option value="Inativo">Inativo</option>
            </select>        
        </div>
    </div>
    <div class="row mt-4 mb-4"><!--botoes-->
        <div class="col-sm-8">
            <button name="btoPesquisa" class="btn btn-primary"formaction="Parceiro_sistema.php?Tela=Categoria">Pesquisar</button>
            <button name="btoCadastrar" class="btn btn-success"formaction="Parceiro_btoCadastrar.php?Tela=Categoria">Cadastrar</button>
            <button name="btoAlterar" class="btn btn-warning"formaction="Parceiro_btoAlterar.php?Tela=Categoria">Alterar</button>
            <a type="reset" name="btoLimpar" class="btn btn-dark"href="Parceiro_sistema.php?Tela=Categoria">Limpar</a>
            <button name="btoExcluir" class="btn btn-danger"formaction="Parceiro_btoExcluir.php?Tela=Categoria">Excluir</button>
            <button name="btotabela" class="btn btn-info"formaction="Parceiro_sistema.php?Tela=Ctabela">Tabela</button>
        </div>
    </div>
</form>