/////////////////formulario Parceiro///////////
function CadastrarParceiro(){
 
    let status_Parceiro = $('#txtStatus').val();
    let nome_Parceiro = $('#txtNome').val();
    let cnpj_Parceiro = $('#txtCnpj').val();
    let ramo_Parceiro = $('#txtRamo').val();
    let email_Parceiro = $('#txtEmail').val();
    let telefone1_Parceiro = $('#txtTelefone1').val();
    let telefone2_Parceiro = $('#txtTelefone2').val();
    let login_Parceiro = $('#txtLogin').val();
    let senha_Parceiro = $('#txtSenha').val();
    let confirmarSenha_Parceiro = $('#txtConfirmarSenha').val();
    let logradouro_Parceiro = $('#txtLogradouro').val();
    let numero_Parceiro = $('#txtNumero').val();
    let complemento_Parceiro = $('#txtComplemento').val();
    let bairro_Parceiro = $('#txtbairro').val();
    let cidade_Parceiro = $('#txtCidade').val();
    let uf_Parceiro = $('#txtUF').val();
    let cep_Parceiro = $('#txtCep').val();
    let obs_Parceiro = $('#txtObs').val();
    let action = 'Parceiro_btoCadastrar.php';

    $.ajax({
        url: action,
        type: 'post',
        data: {
            txtStatus: status_Parceiro,
            txtNome: nome_Parceiro,
            txtCnpj: cnpj_Parceiro,
            txtRamo: ramo_Parceiro,
            txtEmail: email_Parceiro,
            txtTelefone1: telefone1_Parceiro,
            txtTelefone2: telefone2_Parceiro,
            txtLogin: login_Parceiro,
            txtSenha: senha_Parceiro,
            txtConfirmarSenha: confirmarSenha_Parceiro,
            txtLogradouro: logradouro_Parceiro,
            txtNumero: numero_Parceiro,
            txtComplemento: complemento_Parceiro,
            txtBairro: bairro_Parceiro,
            txtCidade: cidade_Parceiro,
            txtUF: uf_Parceiro,
            txtCep: cep_Parceiro,
            txtObs: obs_Parceiro
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
function ParceiroPesquisar(){

    //console.log('testtetttt');

    let id_Parceiro = $('#txtID').val();
  
    let action = 'Parceiro_btoPesquisa.php';


    $.ajax({
        url: action,
        type: 'post',
        data: {
            txtID: id_Parceiro
           
        },
        success: function (data, status, xhr) {

            $("#resultado").empty().html( data );
            $("#txtID").val($('#idGerado').text());
            $("#txtNome").val($('#PesquisaNome').text());
            $("#txtLogin").val($('#PesquisaLogin').text());
            $("#txtSenha").val($('#PesquisaSenha').text());
            $("#txtConfirmarSenha").val($('#PesquisaConfirmarSenha').text());
            $("#txtEmail").val($('#PesquisaEmail').text());
            $("#txtDataNasc").val($('#PesquisaDataNasc').text());
            $("#txtCpf").val($('#PesquisaCpf').text());
            $("#txtGenero").val($('#PesquisaGenero').text());
            $("#txtTelefone1").val($('#PesquisaTelefone1').text());
            $("#txtTelefone2").val($('#PesquisaTelefone2').text());
            $("#txtLogradouro").val($('#PesquisaLogradouro').text());
            $("#txtCidade").val($('#PesquisaCidade').text());
            $("#txtUF").val($('#PesquisaUF').text());
            $("#txtCep").val($('#PesquisaCep').text());
            $("#txtData").val($('#PesquisaCadastro').text());
            $("#txtStatus").val($('#PesquisaStatus').text()); //obs status nao esta puxando na caixa de txt no form
            $("#txtObs").val($('#PesquisaObs').text());
        },
        error: function (jqXhr, textStatus, errorMessage) {
            $('#resultado').empty().html('Error ' + errorMessage);
        }

    })

}
function ParceiroAlterar(){

    //console.log('testtetttt');

    let id_Parceiro = $('#txtID').val();
    let nome_Parceiro = $('#txtNome').val();
    let login_Parceiro = $('#txtLogin').val();
    let senha_Parceiro = $('#txtSenha').val();
    let confirmarSenha_Parceiro = $('#txtConfirmarSenha').val();
    let email_Parceiro = $('#txtEmail').val();
    let dataNasc_Parceiro  = $('#txtDataNasc').val();
    let cpf_Parceiro = $('#txtCpf').val();
    let genero_Parceiro = $('#txtGenero').val();
    let telefone1_Parceiro = $('#txtTelefone1').val();
    let telefone2_Parceiro = $('#txtTelefone2').val();
    let logradouro_Parceiro = $('#txtLogradouro').val();
    let cidade_Parceiro = $('#txtCidade').val();
    let uf_Parceiro = $('#txtUF').val();
    let cep_Parceiro = $('#txtCep').val();
    let status_Parceiro = $('#txtStatus').val();
    let obs_Parceiro = $('#txtObs').val();

  
    let action = 'Parceiro_btoAlterar.php';


    $.ajax({
        url: action,
        type: 'post',
        data: {
            txtID: id_Parceiro,
            txtNome: nome_Parceiro,
            txtLogin: login_Parceiro,
            txtSenha: senha_Parceiro,
            txtConfirmarSenha: confirmarSenha_Parceiro,
            txtEmail: email_Parceiro,
            txtDataNasc: dataNasc_Parceiro,
            txtCpf: cpf_Parceiro,
            txtGenero: genero_Parceiro,
            txtTelefone1: telefone1_Parceiro,
            txtTelefone2: telefone2_Parceiro,
            txtLogradouro: logradouro_Parceiro,
            txtCidade: cidade_Parceiro,
            txtUF: uf_Parceiro,
            txtCep: cep_Parceiro,
            txtStatus: status_Parceiro,
            txtObs: obs_Parceiro
           
        },
        beforend : function(){
            $("#resultado").html("ENVIANDO...");
        },
        success: function (data, status, xhr) {

            $("#resultado").empty().html( data );
            ParceiroPesquisar();
        },
        error: function (jqXhr, textStatus, errorMessage) {
            $('#resultado').append('Error ' + errorMessage);
        }

    })

}
function ParceiroExcluir(){

    let id_Parceiro = $('#txtID').val();
  
    let action = 'Parceiro_btoExcluir.php';


    $.ajax({
        url: action,
        type: 'post',
        data: {
            txtID: id_Parceiro
           
        },
        beforend : function(){
            $("#resultado").html("ENVIANDO...");
        },
        success: function(data, status, xhr){
            $( "#resultado" ).empty().html( data );
        },
        error: function (jqXhr, textStatus, errorMessage) {
            $('#resultado').empty().html('Error' + errorMessage);
        }

    })
}/////////////////formulario Parceiro///////////

/////////////////formulario Categoria Parceiro///////////
function CadastrarCategoriaParceiro(){
 

let nome_PCategoria = $('#txtNome').val();
let status_PCategoria = $('#txtStatus').val();
// console.log('testee');

let action = 'Parceiro_btoCategoriaCadastrar.php';

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
            $('#resultado').append('Error ' + errorMessage);
        }

    })
}
function PesquisarCategoriaParceiro(){

    //console.log('testtetttt');

    let id_PCategoria = $('#txtID').val();
  
    let action = 'Parceiro_btoCategoriaPesquisa.php';


    $.ajax({
        url: action,
        type: 'post',
        data: {
            txtID: id_PCategoria,
           
        },
        success: function (data, status, xhr) {

            $("#resultado").empty().html( data );
            $("#txtID").val($('#idGerado').text());
            $("#txtData").val($('#PesquisaCadastro').text());
            $("#txtNome").val($('#PesquisaNome').text());
            $("#txtStatus").val($('#PesquisaStatus').text()); //obs status nao esta puxando na caixa de txt no form
        },
        error: function (jqXhr, textStatus, errorMessage) {
            $('#resultado').empty().html('Error ' + errorMessage);
        }

    })

}
function ExcluirCategoriaParceiro(){

    let id_Parceiro = $('#txtID').val();
  
    let action = 'Parceiro_btoCategoriaExcluir.php';


    $.ajax({
        url: action,
        type: 'post',
        data: {
            txtID: id_PCategoria
           
        },
        beforend : function(){
            $("#resultado").html("ENVIANDO...");
        },
        success: function(data, status, xhr){
            $( "#resultado" ).empty().html( data );
        },
        error: function (jqXhr, textStatus, errorMessage) {
            $('#resultado').empty().html('Error' + errorMessage);
        }

    })
}
function AlterarCategoriaParceiro(){

    //console.log('testtetttt');

    let id_Parceiro = $('#txtID').val();
    let nome_Parceiro = $('#txtNome').val();
    let status_Parceiro = $('#txtStatus').val();
  
    let action = 'Parceiro_btoCategoriaAlterar.php';


    $.ajax({
        url: action,
        type: 'post',
        data: {
            txtID: id_Parceiro,
            txtNome: nome_Parceiro,
            txtStatus: status_Parceiro
           
        },
        beforend : function(){
            $("#resultado").html("ENVIANDO...");
        },
        success: function (data, status, xhr) {

            $("#resultado").empty().html( data );
            ParceiroPesquisar();
        },
        error: function (jqXhr, textStatus, errorMessage) {
            $('#resultado').append('Error ' + errorMessage);
        }

    })

}/////////////////formulario Categoria Parceiro///////////

/////////////////formulario Serviços Parceiro///////////
function CadastrarSevicosParceiro(){
 
    let nome_ParceiroServicos = $('#txtNome').val();
    let status_ParceiroServicos = $('#txtStatus').val();
    let descricao_ParceiroServicos = $('#txtDescricao').val();
    let action = 'Parceiro_btoServicosCadastrar.php';

    $.ajax({
        url: action,
        type: 'post',
        data: {
            txtNome: nome_ParceiroServicos,
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


/////////////////Categoria Serviços Parceiro///////////

