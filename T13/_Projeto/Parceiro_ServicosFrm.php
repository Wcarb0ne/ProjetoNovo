<br>
<form id="my-form" action="#" class="from-control" method="post" onsubmit="return false">
    <div class="row">
        <div class="col-sm-12">
                <h1>Criar Serviços</h1>
        </div>
    </div>
    <br>
    <br>

    <div class="row">
        <div class="col-sm-3">
            <input type="text" class="form-control" name="txtID" id="txtID" placeholder="ID Serviços">
        </div>
            <div class="col-sm-5"></div>
        <div class="col-sm-4">
            <input type="text" class="form-control" name="txtData" id="txtData" placeholder="Data de Cadastro">
        </div>
    </div>
    <div class="row">
        <div class="col-sm-4">
            <label for="Nome">Nome</label>
            <input type="text" class="form-control" name="txtNome" id="txtNome" placeholder="Insira um novo Serviço">
        </div>
            <div class="col-sm-5">
                <label for="Categoria">Categoria</label>
                    <select class="form-control">
                         <?php 
                         include_once('Parceiro_CategoriaPuxar.php');
                         ?>
                    </select>
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
        <div class="col-sm-12">
            <label for="Nome">Descrição</label>
            <textarea name="txtDescricao" id="txtDescricao" class="form-control" rows="5" placeholder="Insira uma descrição do Serviço (obrigatório)" require></textarea>
        </div>
    </div>
    <div class="row mt-4 mb-4"><!--botoes-->
        <div class="col-sm-1">
        </div>
            <div class="col-sm-10">
                <button name="btoCadastrar" class="btn btn-success"onclick="CadastrarSevicosParceiro()">Cadastrar</button>
                <button name="btoAlterar" class="btn btn-warning"formaction="Parceiro_btoAlterar.php?Tela=Servicos">Alterar</button>
                <a type="reset" name="btoLimpar" class="btn btn-dark"href="Parceiro_sistema.php?Tela=Servicos">Limpar</a>
                <button name="btoExcluir" class="btn btn-danger"formaction="Parceiro_btoExcluir.php?Tela=Servicos">Excluir</button>
            </div>
        <div class="col-sm-1">
        </div>
    </div>
        <div class="row">
            <div class="col-sm-12" id="resultado">
        </div>
    </div>
</form>
