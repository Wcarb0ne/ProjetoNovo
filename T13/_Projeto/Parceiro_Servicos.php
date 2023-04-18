<form action="" class="from-control" method="post" onsubmit="return false">
    <div class="row">
        <div class="col-sm-10">
                <h1>Criar Serviços</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-3">
            <input type="text" class="form-control" name="txtID" id="txtID" placeholder="ID Serviços">
        </div>
            <div class="col-sm-2"></div>
        <div class="col-sm-5">
            <input type="text" class="form-control" name="txtData" id="txtData" placeholder="Data de Cadastro">
        </div>
    </div>
    <div class="row">
        <div class="col-sm-4">
            <label for="Nome">Nome</label>
            <input type="text" class="form-control" name="txtNome" id="txtNome" placeholder="Insira um novo Serviço">
        </div>
            <div class="col-sm-3">
            <label for="Nome">Categoria</label>
            <input type="checkbox" class="form-control" name="txtCategoria" id="txtCategoria">
            </div>
        <div class="col-sm-3">
            <label for="Status">Status</label>
            <select type="checkbox"name="txtStatus" id="txtStatus" class="form-control">
                <option value="">Selecione</option>
                <option value="Ativo">Ativo</option>
                <option value="Inativo">Inativo</option>
            </select>        
        </div>
    </div>
    <div class="row mt-1"><!-- descrição -->
        <div class="col-sm-10">
            <label for="Nome">Descrição</label>
            <textarea name="txtDescricao" id="txtDescricao" class="form-control" rows="5" placeholder="Insira uma descrição do Serviço (obrigatório)" require></textarea>
        </div>
    </div>
    <div class="row mt-4 mb-4"><!--botoes-->
        <div class="col-sm-10">
            <button name="btoPesquisa" class="btn btn-primary"formaction="Parceiro_sistema.php?Tela=Servicos">Pesquisar</button>
            <button name="btotabela" class="btn btn-info"formaction="Parceiro_sistema.php?Tela=Ctabela">Tabela</button>
            <button name="btoCadastrar" class="btn btn-success"onclick="CadastrarSevicosParceiro()">Cadastrar</button>
            <button name="btoAlterar" class="btn btn-warning"formaction="Parceiro_btoAlterar.php?Tela=Servicos">Alterar</button>
            <a type="reset" name="btoLimpar" class="btn btn-dark"href="Parceiro_sistema.php?Tela=Servicos">Limpar</a>
            <button name="btoExcluir" class="btn btn-danger"formaction="Parceiro_btoExcluir.php?Tela=Servicos">Excluir</button>
        </div>
    </div>
        <div class="row"> 
            <div class="col-sm-10" id="resultado">
        </div>
    </div>
</form>
