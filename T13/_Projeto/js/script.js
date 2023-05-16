
/////////////////formulario Parceiro///////////
function CadastrarParceiro() {

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
    let bairro_Parceiro = $('#txtBairro').val();
    let cidade_Parceiro = $('#txtCidade').val();
    let uf_Parceiro = $('#txtUF').val();
    let cep_Parceiro = $('#txtCep').val();
    let obs_Parceiro = $('#txtObs').val();
    let foto_Parceiro = $('#base64CodePHP').val();
    let action = 'Parceiro_btoCadastrar.php';

    if ($("#txtStatus").val() == '') {
        alert("erro");
        return;
    }
    if ($("#txtNome").val() == '') {
        alert("Campo Nome Obrigatório");
        return;
    }
    if ($.isNumeric($("#txtNome").val())) {
        alert("Campo nome deve conter Apenas Letras");
        return;
    }
    if ($("#txtCnpj").val() == null) {
        alert("CPF obrigatório");
        return;
    }
    if (!$.isNumeric($("#txtCnpj").val())) {
        alert("Apenas Números");
        return;
    }
    if ($('#txtRamo').val() == null) {
        alert("Ramo obrigatório");
        return;
    }

    if ($('#txtEmail').val() == null) {
        alert("E-mail obrigatório");
        return;
    }

    if ($("#txtTelefone1").val() == null) {
        alert("Campo Telefone1 obrigatório");
        return;
    }
    if (!$.isNumeric($("#txtTelefone1").val())) {
        alert("Preencha telefone com números");
        return;
    }
    if ($("#txtBairro").val() == null) {
        alert("Bairro obrigatório");
        return;
    }
    if ($.isNumeric($("#txtBairro").val())) {
        alert("Bairro deve conter Apenas letras");
        return;
    }
    if ($.isNumeric($("#txtCidade").val() == null)) {
        alert("Campo Cidade Obrigatório");
        return;
    }
    if ($("#txtCep").val() == null) {
        alert("CEP obrigatório");
        return;
    }
    if ($.isNumeric($("#txtCidade").val())) {
        alert("Apenas letras");
        return;
    }

    if (!$.isNumeric($("#txtCep").val())) {
        alert("Preencha o CEP com números")
        return;
    }
    if ($("#txtUF").val().trim() === '') {
        alert("Estado(UF) é Obrigatório");
        return;
    }
    if ($("#txtSenha").val() == null) {
        alert("Senha é Obrigatória");
        return;
    }
    if ($.isNumeric($("#txtSenha").val() != $("#txtConfirmarSenha").val())) {
        alert("A senha deve ser idêntica ao confirmar Senha");
        return;
    }
    if ($("#txtNumero").val() == null) {
        alert("Número da Residência é obrigatório");
        return;
    }
    if (!$.isNumeric($("#txtNumero").val())) {
        alert("Número da Residência não pode conter letras");
        return;
    }

    if ($("#txtLogin").val() == null) {
        alert("Login é Obrigatório");
        return;
    }
    else {

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
                txtObs: obs_Parceiro,
                txtImg: foto_Parceiro 
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
}
function ParceiroPesquisar() {

    console.log('testtetttt');

    let id_Parceiro = $('#txtID').val();

    let action = 'Parceiro_btoPesquisa.php';


    $.ajax({
        url: action,
        type: 'post',
        data: {
            txtID: id_Parceiro

        },
        success: function (data, status, xhr) {

            $("#resultado").empty().html(data);
            // $("#txtID").val($('#idGerado').text());
            // $("#txtNome").val($('#PesquisaNome').text());
            // $("#txtLogin").val($('#PesquisaLogin').text());
            // $("#txtSenha").val($('#PesquisaSenha').text());
            // $("#txtEmail").val($('#PesquisaEmail').text());
            // $("#txtDataNasc").val($('#PesquisaDataNasc').text());
            // $("#txtCpf").val($('#PesquisaCpf').text());
            // $("#txtGenero").val($('#PesquisaGenero').text());
            // $("#txtTelefone1").val($('#PesquisaTelefone1').text());
            // $("#txtTelefone2").val($('#PesquisaTelefone2').text());
            // $("#txtLogradouro").val($('#PesquisaLogradouro').text());
            // $("#txtCidade").val($('#PesquisaCidade').text());
            // $("#txtUF").val($('#PesquisaUF').text());
            // $("#txtCep").val($('#PesquisaCep').text());
            // $("#txtData").val($('#PesquisaCadastro').text());
            // $("#txtStatus").val($('#PesquisaStatus').text()); //obs status nao esta puxando na caixa de txt no form
            // $("#txtObs").val($('#PesquisaObs').text());
        },
        error: function (jqXhr, textStatus, errorMessage) {
            $('#resultado').empty().html('Error ' + errorMessage);
        }

    })

}
function ParceiroAlterar() {

    let id_Parceiro = $('#txtID').val();
    let status_Parceiro = $('#txtStatus').val();
    let nome_Parceiro = $('#txtNome').val();
    let cnpj_Parceiro = $('#txtCnpj').val();
    let ramo_Parceiro = $('#txtRamo').val();
    let email_Parceiro = $('#txtEmail').val();
    let telefone1_Parceiro = $('#txtTelefone1').val();
    let telefone2_Parceiro = $('#txtTelefone2').val();
    let login_Parceiro = $('#txtLogin').val();
    let senha_Parceiro = $('#txtSenha').val();
    let logradouro_Parceiro = $('#txtLogradouro').val();
    let numero_Parceiro = $('#txtNumero').val();
    let complemento_Parceiro = $('#txtComplemento').val();
    let bairro_Parceiro = $('#txtBairro').val();
    let cidade_Parceiro = $('#txtCidade').val();
    let uf_Parceiro = $('#txtUF').val();
    let cep_Parceiro = $('#txtCep').val();
    let obs_Parceiro = $('#txtObs').val();


    if ($("#txtStatus").val() == '') {
        alert("erro");
        return;
    }
    if ($("#txtNome").val() == '') {
        alert("Campo Nome Obrigatório");
        return;
    }
    if ($.isNumeric($("#txtNome").val())) {
        alert("Nome deve possuir Apenas Letras");
        return;
    }
    if ($("#txtCnpj").val() == null) {
        alert("CPF obrigatório");
        return;
    }
    if (!$.isNumeric($("#txtCnpj").val())) {
        alert("Apenas Números");
        return;
    }
    if ($('#txtRamo').val() == null) {
        alert("Ramo obrigatório");
        return;
    }

    if ($('#txtEmail').val() == null) {
        alert("E-mail obrigatório");
        return;
    }

    if ($("#txtTelefone1").val() == null) {
        alert("Campo Telefone1 obrigatório");
        return;
    }
    if (!$.isNumeric($("#txtTelefone1").val())) {
        alert("Preencha telefone com números");
        return;
    }
    if ($("#txtBairro").val() == null) {
        alert("Bairro obrigatório");
        return;
    }
    if (!$.isNumeric($("#txtBairro").val())) {
        alert("Bairro deve conter Apenas letras");
        return;
    }
    if ($.isNumeric($("#txtCidade").val() == null)) {
        alert("Campo Cidade Obrigatório");
        return;
    }
    if (!$.isNumeric($("#txtCidade").val())) {
        alert("Cidade deve conter Apenas letras");
        return;
    }
    if ($("#txtCEP").val() = null) {
        alert("CEP obrigatório");
        return;
    }
    if (!$.isNumeric($("#txtCEP").val())) {
        alert("Preencha o CEP com números")
        return;
    }
    if ($("#txtUF").val().trim() === '') {
        alert("Estado(UF) é Obrigatório");
        return;
    }
    if ($("#txtSenha").val() == null) {
        alert("Senha é Obrigatória");
        return;
    }
    if ($.isNumeric($("#txtSenha").val() != $("#txtConfirmarSenha").val())) {
        alert("A senha deve ser idêntica ao confirmar Senha");
        return;
    }
    if ($("#txtNumero").val() == null) {
        alert("Número da Residência é obrigatório");
        return;
    }
    if (!$.isNumeric($("#txtNumero").val())) {
        alert("Número da Residência não pode conter letras");
        return;
    }

    if ($("#txtLogin").val() == null) {
        alert("Login é Obrigatório");
        return;
    }
    else {


        let action = 'Parceiro_btoAlterar.php';
        // console.log('testtetttt');


        $.ajax({
            url: action,
            type: 'post',
            data: {
                txtID: id_Parceiro,
                txtNome: nome_Parceiro,
                txtStatus: status_Parceiro,
                txtCnpj: cnpj_Parceiro,
                txtRamo: ramo_Parceiro,
                txtEmail: email_Parceiro,
                txtTelefone1: telefone1_Parceiro,
                txtTelefone2: telefone2_Parceiro,
                txtLogin: login_Parceiro,
                txtSenha: senha_Parceiro,
                txtLogradouro: logradouro_Parceiro,
                txtNumero: numero_Parceiro,
                txtComplemento: complemento_Parceiro,
                txtBairro: bairro_Parceiro,
                txtCidade: cidade_Parceiro,
                txtUF: uf_Parceiro,
                txtCep: cep_Parceiro,
                txtObs: obs_Parceiro

            },
            beforend: function () {
                $("#resultado").html("ENVIANDO...");
            },
            success: function (data, status, xhr) {
                $("#resultado").html(data);

            },
            error: function (jqXhr, textStatus, errorMessage) {
                $('#resultado').append('Error ' + errorMessage);
            }

        })
    }

}
function ParceiroExcluir() {

    let id_Parceiro = $('#txtID').val();

    let action = 'Parceiro_btoExcluir.php';


    $.ajax({
        url: action,
        type: 'post',
        data: {
            txtID: id_Parceiro

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
}/////////////////formulario Parceiro///////////

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


/////////////////Cliente///////////

function CadastrarCliente() {

    // console.log("teste");

    let status_Cliente = $('#txtStatus').val();
    let nome_Cliente = $('#txtNome').val();
    let cpf_Cliente = $('#txtCPF').val();
    let email_Cliente = $('#txtEmail').val();
    let telefone1_Cliente = $('#txtTelefone1').val();
    let telefone2_Cliente = $('#txtTelefone2').val();
    let login_Cliente = $('#txtLogin').val();
    let senha_Cliente = $('#txtSenha').val();
    let ConfirmarSenha_Cliente = $('#txtConfirmarSenha').val();
    let logradouro_Cliente = $('#txtLogradouro').val();
    let numero_Cliente = $('#txtNumero').val();
    let complemento_Cliente = $('#txtComplemento').val();
    let bairro_Cliente = $('#txtBairro').val();
    let cidade_Cliente = $('#txtCidade').val();
    let uf_Cliente = $('#txtUF').val();
    let cep_Cliente = $('#txtCEP').val();
    let obs_Cliente = $('#txtObs').val();
    let foto_Cliente = $('#base64CodePHP').val();



    let action = 'Cliente_btoCadastrar.php';


    if ($("#txtStatus").val() == '') {
        alert("erro");
        return;
    }
    if ($("#txtNome").val() == '') {
        alert("Campo Nome Obrigatório");
        return;
    }
    if ($.isNumeric($("#txtNome").val())) {
        alert("Apenas Letras");
        return;
    }
    if ($("#txtCPF").val() == null) {
        alert("CPF obrigatório");
        return;
    }
    if (!$.isNumeric($("#txtCPF").val())) {
        alert("Apenas Números");
        return;
    }
    if ($('#txtEmail').val() == null) {
        alert("E-mail obrigatório");
        return;
    }

    if ($("#txtTelefone1").val() == null) {
        alert("Campo Telefone1 obrigatório");
        return;
    }
    if (!$.isNumeric($("#txtTelefone1").val())) {
        alert("Preencha telefone com números");
        return;
    }
    if ($("#txtBairro").val() == null) {
        alert("Bairro obrigatório");
        return;
    }
    if ($.isNumeric($("#txtBairro").val())) {
        alert("Apenas letras");
        return;
    }
    if ($.isNumeric($("#txtCidade").val() == null)) {
        alert("Campo Cidade Obrigatório");
        return;
    }
    if ($.isNumeric($("#txtCidade").val())) {
        alert("Apenas letras");
        return;
    }
    if ($("#txtCEP").val() = null) {
        alert("CEP obrigatório");
        return;
    }
    if (!$.isNumeric($("#txtCEP").val())) {
        alert("Preencha o CEP com números")
        return;
    }
    if ($("#txtUF").val().trim() === '') {
        alert("Estado(UF) é Obrigatório");
        return;
    }
    if ($("#txtSenha").val() == null) {
        alert("Senha é Obrigatória");
        return;
    }
    if ($.isNumeric($("#txtSenha").val() != $("#txtConfirmarSenha").val())) {
        alert("A senha deve ser idêntica ao confirmar Senha");
        return;
    }
    if ($("#txtNumero").val() == null) {
        alert("Número da Residência é obrigatório");
        return;
    }
    if (!$.isNumeric($("#txtNumero").val())) {
        alert("Número da Residência não pode conter letras");
        return;
    }

    if ($("#txtLogin").val() == null) {
        alert("Login é Obrigatório");
        return;
    }
    else {


        $.ajax({
            url: action,
            type: 'post',
            data: {
                txtStatus: status_Cliente,
                txtNome: nome_Cliente,
                txtCPF: cpf_Cliente,
                txtEmail: email_Cliente,
                txtTelefone1: telefone1_Cliente,
                txtTelefone2: telefone2_Cliente,
                txtLogin: login_Cliente,
                txtSenha: senha_Cliente,
                txtLogradouro: logradouro_Cliente,
                txtNumero: numero_Cliente,
                txtComplemento: complemento_Cliente,
                txtBairro: bairro_Cliente,
                txtCidade: cidade_Cliente,
                txtUF: uf_Cliente,
                txtCEP: cep_Cliente,
                txtObs: obs_Cliente,
                fImage: foto_Cliente,

            },
            beforsend: function () {
                $("#Resultado").html("ENVIANDO...");
            },
            success: function (data, status, xhr) {
                $("#Resultado").empty().html(data);
                //$("#txtID").val($(#idGerado).text());
            },
            error: function (jqXhr, textStatus, errorMessage) {
                $('#Resultado').empty('Error ' + errorMessage);
            }

        })
    }
}

/////////////////Cliente///////////

function AlterarCliente() {


    let id_Cliente = $('#txtID').val();
    let status_Cliente = $('#txtStatus').val();
    let nome_Cliente = $('#txtNome').val();
    let cpf_Cliente = $('#txtCPF').val();
    let email_Cliente = $('#txtEmail').val();
    let telefone1_Cliente = $('#txtTelefone1').val();
    let telefone2_Cliente = $('#txtTelefone2').val();
    let login_Cliente = $('#txtLogin').val();
    let senha_Cliente = $('#txtSenha').val();
    let logradouro_Cliente = $('#txtLogradouro').val();
    let numero_Cliente = $('#txtNumero').val();
    let complemento_Cliente = $('#txtComplemento').val();
    let bairro_Cliente = $('#txtBairro').val();
    let cidade_Cliente = $('#txtCidade').val();
    let uf_Cliente = $('#txtUF').val();
    let cep_Cliente = $('#txtCEP').val();
    let obs_Cliente = $('#txtObs').val();

    let action = 'Cliente_btoAlterar.php';
    // console.log('testtetttt');

    if ($("#txtStatus").val() == '') {
        alert("erro");
        return;
    }
    if ($("#txtNome").val() == '') {
        alert("Campo Nome Obrigatório");
        return;
    }
    if ($.isNumeric($("#txtNome").val())) {
        alert("Apenas Letras");
        return;
    }
    if ($("#txtCPF").val() == null) {
        alert("CPF obrigatório");
        return;
    }
    if (!$.isNumeric($("#txtCPF").val())) {
        alert("Apenas Números");
        return;
    }
    if ($('#txtEmail').val() == null) {
        alert("E-mail obrigatório");
        return;
    }

    if ($("#txtTelefone1").val() == null) {
        alert("Campo Telefone1 obrigatório");
        return;
    }
    if (!$.isNumeric($("#txtTelefone1").val())) {
        alert("Preencha telefone com números");
        return;
    }
    if ($("#txtBairro").val() == null) {
        alert("Bairro obrigatório");
        return;
    }
    if (!$.isNumeric($("#txtBairro").val())) {
        alert("Apenas letras");
        return;
    }
    if ($.isNumeric($("#txtCidade").val() == null)) {
        alert("Campo Cidade Obrigatório");
        return;
    }
    if (!$.isNumeric($("#txtCidade").val())) {
        alert("Apenas letras");
        return;
    }
    if ($("#txtCEP").val() = null) {
        alert("CEP obrigatório");
        return;
    }
    if (!$.isNumeric($("#txtCEP").val())) {
        alert("Preencha o CEP com números")
        return;
    }
    if ($("#txtUF").val().trim() === '') {
        alert("Estado(UF) é Obrigatório");
        return;
    }
    if ($("#txtSenha").val() == null) {
        alert("Senha é Obrigatória");
        return;
    }
    if ($.isNumeric($("#txtSenha").val() != $("#txtConfirmarSenha").val())) {
        alert("A senha deve ser idêntica ao confirmar Senha");
        return;
    }
    if ($("#txtNumero").val() == null) {
        alert("Número da Residência é obrigatório");
        return;
    }
    if (!$.isNumeric($("#txtNumero").val())) {
        alert("Número da Residência não pode conter letras");
        return;
    }

    if ($("#txtLogin").val() == null) {
        alert("Login é Obrigatório");
        return;
    }
    else {

        $.ajax({
            url: action,
            type: 'post',
            data: {
                txtID: id_Cliente,
                txtStatus: status_Cliente,
                txtNome: nome_Cliente,
                txtCPF: cpf_Cliente,
                txtEmail: email_Cliente,
                txtTelefone1: telefone1_Cliente,
                txtTelefone2: telefone2_Cliente,
                txtLogin: login_Cliente,
                txtSenha: senha_Cliente,
                txtLogradouro: logradouro_Cliente,
                txtNumero: numero_Cliente,
                txtComplemento: complemento_Cliente,
                txtBairro: bairro_Cliente,
                txtCidade: cidade_Cliente,
                txtUF: uf_Cliente,
                txtCEP: cep_Cliente,
                txtObs: obs_Cliente

            },
            beforend: function () {
                $("#resultado").html("ENVIANDO...");
            },
            success: function (data, status, xhr) {

                $("#resultado").html(data);

            },
            error: function (jqXhr, textStatus, errorMessage) {
                $('#resultado').append('Error ' + errorMessage);
            }

        })
    }
}

function PesquisarCliente() {
    // console.log('foi');
    let id_Cliente = $('#txtID').val();

    let action = 'Cliente.btoPesquisa.php';


    $.ajax({
        url: action,
        type: 'post',
        data: {
            txtID: id_Cliente

        },
        success: function (data, status, xhr) {



        },
        error: function (jqXhr, textStatus, errorMessage) {
            $('#resultado').empty().html('Error ' + errorMessage);
        }

    })

}

// Validar CEP
function limparFormulario() {
    document.getElementById('#txtUF').value = ("");
    document.getElementById('#txtBairro').value = ("");
    document.getElementById('#txtCidade').value = ("");
    document.getElementById('#txtLogradouro').value = ("");
}

function meu_callback(endereco) {
    if (!("erro" in endereco)) {
        document.getElementById('#txtUF').value = (endereco.uf);
        document.getElementById('#txtBairro').value = (endereco.bairro);
        document.getElementById('#txtCidade').value = (endereco.localidade);
        document.getElementById('#txtLogradouro').value = (endereco.logradouro);
    } else {
        limparFormulario();
        alert("CEP não encontrado");
    }
}

function pesquisacep(valor) {
    const cep = valor.replace(/\D/g, '');

    if (cep != "") {
        const validacep = /^[0-9]{8}$/;

        if (validacep.test(cep)) {
            document.getElementById('#txtUF').value = "...";
            document.getElementById('#txtBairro').value = "...";
            document.getElementById('#txtCidade').value = "...";
            document.getElementById('#txtLogradouro').value = "...";

            const script = document.createElement('script');

            script.src = 'https://viacep.com.br/ws/' + cep + '/json/?callback=meu_callback';

            document.body.appendChild(script);

        } else {
            limparFormulario();
            alert("Formato de CEP inválido");
        }
    } else {
        limparFormulario();
    }
};

//////////////////////////////Contrato////////////////////
function Contrato() {

    console.log("teste");

    let cnpj_Contrato = $('#txtcnpj').val();
    let nome_Contrato = $('#txtNome').val();
    let valor_Contrato = $('#txtValor').val();
    let tipo_Contrato = $('#txtTipo').val();
    let dataEmissao_Contrato = $('#txtEmissao').val();
    let dataTermino_Contrato = $('#txtTermino').val();




    let action = 'contrato.teste.php';



    $.ajax({
        url: action,
        type: 'post',
        data: {

            txtCnpj: cnpj_Contrato,
            txtNome: nome_Contrato,
            txtValor: valor_Contrato,
            txtTipo: tipo_Contrato,
            txtEmissao: dataEmissao_Contrato,
            txtTermino: dataTermino_Contrato,


        },
        success: function (data, status, xhr) {
            $("#Resultado").empty().html(data);
            //$("#txtID").val($(#idGerado).text());
        },
        error: function (jqXhr, textStatus, errorMessage) {
            $('#Resultado').empty('Error ' + errorMessage);
        }

    })
}

/////////////////Contrato///////////