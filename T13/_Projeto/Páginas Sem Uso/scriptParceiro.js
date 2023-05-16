/////////////////formulario Categoria Parceiro///////////
function CadastrarCategoriaParceiro() {

    let nome_PCategoria = $('#txtNome').val();
    let status_PCategoria = $('#txtStatus').val();

    // console.log('testee');

    let action = 'Parceiro_CategoriaBtoCadastrar.php';

    $.ajax({
        url: action,
        type: 'post',
        data: {
            txtNome: nome_PCategoria,
            txtStatus: status_PCategoria
        },
        success: function (data, status, xhr) {
            $("#resultado").empty().html(data);
            //$("#txtID").val($(#idGerado).text());
        },
        error: function (jqXhr, textStatus, errorMessage) {
            $('#resultado').empty('Error ' + errorMessage);
        }

    })
}
function PesquisarCategoriaParceiro() {

    //console.log('testtetttt');

    let id_PCategoria = $('#txtID').val();

    let action = 'Parceiro_CategoriaBtoPesquisa.php';


    $.ajax({
        url: action,
        type: 'post',
        data: {
            txtID: id_PCategoria

        },
        success: function (data, status, xhr) {

            $("#resultado").empty().html(data);
            $("#txtID").val($('#idGerado').text());
            $("#txtData").val($('#PesquisaData').text());
            $("#txtNome").val($('#PesquisaNome').text());
            $("#txtStatus").val($('#PesquisaStatus').text()); //obs status nao esta puxando na caixa de txt no form

        },
        error: function (jqXhr, textStatus, errorMessage) {
            $('#resultado').empty().html('Error ' + errorMessage);
        }

    })

}
function ExcluirCategoriaParceiro() {

    let id_PCategoria = $('#txtID').val();

    let action = 'Parceiro_CategoriaBtoExcluir.php';


    $.ajax({
        url: action,
        type: 'post',
        data: {
            txtID: id_PCategoria

        },
        beforend: function () {
            $("#resultado").html("ENVIANDO...");
        },
        success: function (data, status, xhr) {
            $("#resultado").empty().html(data);
        },
        error: function (jqXhr, textStatus, errorMessage) {
            $('#resultado').empty().html('Error' + errorMessage);
        }

    })
}
function AlterarCategoriaParceiro() {

    //console.log('testtetttt');

    let id_PCategoria = $('#txtID').val();
    let nome_PCategoria = $('#txtNome').val();
    let status_PCategoria = $('#txtStatus').val();

    let action = 'Parceiro_CategoriaBtoAlterar.php';


    $.ajax({
        url: action,
        type: 'post',
        data: {
            txtID: id_PCategoria,
            txtNome: nome_PCategoria,
            txtStatus: status_PCategoria

        },
        beforend: function () {
            $("#resultado").html("ENVIANDO...");
        },
        success: function (data, status, xhr) {

            $("#resultado").empty().html(data);
            PesquisarCategoriaParceiror();
        },
        error: function (jqXhr, textStatus, errorMessage) {
            $('#resultado').append('Error ' + errorMessage);
        }

    })

}/////////////////formulario Categoria Parceiro///////////

/////////////////formulario Serviços Parceiro///////////
function AbrirTabelaServicos() {
    $('#tabelaServicos').load('Parceiro_ServicosTabela.php');
}
function PesquisarSevicosParceiro() {

    let id_ParceiroServicos = $('#txtID').val();

    let action = 'Parceiro_ServicosBtoPesquisa.php';


    $.ajax({
        url: action,
        type: 'post',
        data: {
            txtID: id_ParceiroServicos

        },
        success: function (data, status, xhr) {

            $("#resultado").empty().html(data);
            $("#txtID").val($('#idGerado').text());
            $("#txtData").val($('#PesquisaData').text());
            $("#txtNome").val($('#PesquisaNome').text());

            $("#txtStatus").val($('#PesquisaStatus').text());
            $("#txtDescricao").val($('#PesquisaDescricao').text());

        },
        error: function (jqXhr, textStatus, errorMessage) {
            $('#resultado').empty().html('Error ' + errorMessage);
        }

    })

}
function CadastrarSevicosParceiro() {

    let nome_ParceiroServicos = $('#txtNome').val();

    let status_ParceiroServicos = $('#txtStatus').val();
    let descricao_ParceiroServicos = $('#txtDescricao').val();
    let action = 'Parceiro_ServicosBtoCadastrar.php';

    $.ajax({
        url: action,
        type: 'post',
        data: {
            txtNome: nome_ParceiroServicos,
            txtIDC: $('#txtIDC').val(),
            txtStatus: status_ParceiroServicos,
            txtDescricao: descricao_ParceiroServicos

        },
        success: function (data, status, xhr) {
            $("#resultado").empty().html(data);
            //$("#txtID").val($(#idGerado).text());
        },
        error: function (jqXhr, textStatus, errorMessage) {
            $('#resultado').append('Error ' + errorMessage);
        }

    })
}
function ExcluirServicosParceiro() {

    let id_Parceiro = $('#txtID').val();

    let action = 'Parceiro_ServicosBtoExcluir.php';


    $.ajax({
        url: action,
        type: 'post',
        data: {
            txtID: id_ParceiroServicos

        },
        beforend: function () {
            $("#resultado").html("ENVIANDO...");
        },
        success: function (data, status, xhr) {
            $("#resultado").empty().html(data);
        },
        error: function (jqXhr, textStatus, errorMessage) {
            $('#resultado').empty().html('Error' + errorMessage);
        }

    })
}
function AlterarCategoriaParceiro() {

    //console.log('testtetttt');

    let id_ParceiroServicos = $('#txtID').val();
    let nome_ParceiroServicos = $('#txtNome').val();
    let status_ParceiroServicos = $('#txtStatus').val();
    let descricao_ParceiroServicos = $('#txtDescricao').val();

    let action = 'Parceiro_ServicosBtoAlterar.php';


    $.ajax({
        url: action,
        type: 'post',
        data: {
            txtID: id_ParceiroServicos,
            txtNome: nome_ParceiroServicos,
            txtStatus: status_ParceiroServicos,
            txtDescricao: descricao_ParceiroServicos

        },
        beforend: function () {
            $("#resultado").html("ENVIANDO...");
        },
        success: function (data, status, xhr) {

            $("#resultado").empty().html(data);
            PesquisarSevicosParceiro();
        },
        error: function (jqXhr, textStatus, errorMessage) {
            $('#resultado').append('Error ' + errorMessage);
        }

    })
}
/////////////////Categoria Serviços Parceiro///////////