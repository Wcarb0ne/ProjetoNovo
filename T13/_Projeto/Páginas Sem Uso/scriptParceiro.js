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

