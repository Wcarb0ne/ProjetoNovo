function CadastrarUsuario(){
 
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